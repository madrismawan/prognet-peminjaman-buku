@extends('layouts.main-layout.main-layout')

@section('tittle','Tambah Pengguna')

@push('css')
    <!-- Select2 -->
    <link rel="stylesheet" href="{{asset('base-template/plugins/select2/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('base-template/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="{{asset('base-template/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">

    <!-- daterange picker -->
    <link rel="stylesheet" href="{{asset('base-template/plugins/daterangepicker/daterangepicker.css')}}">


@endpush

@section('content')
    <section class="content-header">
        <div class="container-fluid border-bottom">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Tambah Pengguna Peminjam Buku</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Tambah Pengguna</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card card-primary">
                    <div class="card-header bg-white text-center">
                        {{-- <img class="rounded mx-auto d-block" src="{{ asset('base-template/dist/img/logo-01.png') }}" alt="sipandu logo" width="100" height="100"> --}}
                        <div class="div p-3">
                            <a href="" class="h3 fw-bold mb-1 text-dark">Sistem Peminjaman Buku</a>
                            <p class="mt-1 fs-5 mb-1">Form Penambahan Anggota Perpus</p>
                            <p class="text-center mb-1">Silahkan lengkapi data di bawah ini</p>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{route('admin.manajemen-pengguna.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row px-lg-4">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label>Nama <span class="text-danger">*</span></label>
                                        <div class="input-group mb-3">
                                            <input type="text" name="nama" autocomplete="off" class="form-control @error('nama') is-invalid @enderror" value="{{ old('nama') }}" placeholder="Masukan Nama lengkap">
                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                    <span class="fas fa-user"></span>
                                                </div>
                                            </div>
                                            @error('nama')
                                                <div class="invalid-feedback text-start">
                                                    {{$errors->first('nama') }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Nomor HP <span class="text-danger"> *</span></label>
                                        <div class="input-group mb-3">
                                            <input type="number" name="tlpn" autocomplete="off" class="form-control @error('tlpn') is-invalid @enderror" value="{{ old('tlpn') }}" placeholder="Masukan Nomor HP">
                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                    <span class="fas fa-phone-alt"></span>
                                                </div>
                                            </div>
                                            @error('tlpn')
                                                <div class="invalid-feedback text-start">
                                                    {{$errors->first('tlpn') }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>E-Mail <span class="text-danger">*</span></label>
                                        <div class="input-group mb-3">
                                            <input type="email" name="email" autocomplete="off" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" placeholder="Masukan E-Mail">
                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                    <span class="fas fa-envelope"></span>
                                                </div>
                                            </div>
                                            @error('email')
                                                <div class="invalid-feedback text-start">
                                                    {{$errors->first('email') }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="">Tanggal Lahir</label>
                                        <input type="date" name="tanggal_lahir" maxlength="10" class="form-control bg-se @error('tanggal_lahir') is-invalid @enderror" value="{{ old('tanggal_lahir') }}" id="tanggal-penyuluhan">
                                        @error('tanggal_lahir')
                                            <span class="invalid-feedback">
                                                <strong>{{$errors->first('tanggal_lahir') }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Program Studi <span class="text-danger">*</span></label>
                                        <select name="program_studi" class="form-control select2bs4  @error('program_studi') is-invalid @enderror" style="width: 100%;" aria-placeholder="Pilihlah Program Studi">
                                            <option disabled selected>Pilihlah Program Studi</option>
                                            <option value="Teknologi Informasi">Teknologi Informasi</option>
                                            <option value="Teknik Sipil">Teknik Sipil</option>
                                            <option value="Teknik Elektro">Teknik Elektro</option>
                                            <option value="Teknik Arsitek">Teknik Arsitek</option>
                                            <option value="Teknik Mesin">Teknik Mesin</option>
                                        </select>
                                        @error('program_studi')
                                            <div class="invalid-feedback text-start">
                                                {{$errors->first('program_studi') }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>NIM <span class="text-danger">*</span></label>
                                        <div class="input-group">
                                            <input type="number" name="nim" autocomplete="off" class="form-control @error('nim') is-invalid @enderror" value="{{ old('nim') }}" placeholder="Masukan NIM Peminjam">
                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                    <span class="fas fa-id-card"></span>
                                                </div>
                                            </div>
                                            @error('nim')
                                                <div class="invalid-feedback text-start">
                                                    {{$errors->first('nim') }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-12">
                                    <label>Foto KTP</label>
                                    <div class="input-group mb-2">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input @error('file') is-invalid @enderror" name="file" id="customFile" >
                                            <label class="custom-file-label " for="customFile">Upload Foto KTP Pengguna</label>
                                        </div>
                                        @error('file')
                                            <div class="invalid-feedback text-start">
                                                {{ $errors->first('file') }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group col-12">
                                    <label>Alamat Lengkap <span class="text-danger">*</span></label>
                                    <textarea name="alamat" class="form-control  @error('email') is-invalid @enderror" rows="3" placeholder="Masukan Alamat Lengkap" value="{{ old('alamat') }}"></textarea>
                                    @error('alamat')
                                    <div class="invalid-feedback text-start">
                                        {{$errors->first('alamat') }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row d-flex justify-content-end mt-1 p-lg-2">
                                <div class="col-7 col-sm-4">
                                    <button type="submit" class="btn btn-primary btn-block">Daftarkan Pengguna Baru</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection


@push('js')
      <script src="{{asset('base-template/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
      <!-- Select2 -->
      <script src="{{asset('base-template/plugins/select2/js/select2.full.min.js')}}"></script>
      <!-- InputMask -->
      <script src="{{asset('base-template/plugins/moment/moment.min.js')}}"></script>
      <script src="{{asset('base-template/plugins/inputmask/jquery.inputmask.min.js')}}"></script>
      <!-- date-range-picker -->
      <script src="{{asset('base-template/plugins/daterangepicker/daterangepicker.js')}}"></script>
      <!-- Tempusdominus Bootstrap 4 -->
      <script src="{{asset('base-template/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>

      <script src="{{asset('base-template/plugins/bs-custom-file-input/bs-custom-file-input.min.js')}}"></script>




    <script type="text/javascript">
        $(document).ready(function(){
            //Initialize Select2 Elements
            $('.select2').select2()

            //Initialize Select2 Elements
            $('.select2bs4').select2({
                theme: 'bootstrap4'
            })

            $('#side-manajemen-pengguna').addClass('menu-open');
            $('#side-manajemen-pengguna-tambah').addClass('active');

            $(function () {
                bsCustomFileInput.init();
            });
        });
    </script>

    <script>

        //Date range picker
        $('#reservation').daterangepicker()
        //Date range picker with time picker
        $('#reservationtime').daterangepicker({
            timePicker: true,
            timePickerIncrement: 30,
            locale: {
            format: 'MM/DD/YYYY hh:mm A'
            }
        })
    </script>
@endpush


