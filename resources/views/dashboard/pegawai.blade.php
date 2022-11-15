@extends('layouts.main')
{{-- Loading --}}

@section('content')
    @include('component.auth.sidebar')
    <!-- Layout container -->
    <div class="layout-page">
        <!-- Navbar -->
        @include('component.auth.topnav')

        <!-- Content wrapper -->
        <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y pt-2">
                <div class="row mx-0">
                    {{-- Mid Content --}}
                    <span class="text-muted mb-1">Profile <i class='bx bx-chevrons-right'></i>
                        <b>{{ $title }}</b></span>

                    <div class="col-lg-8 mb-4">
                        <div class="row">
                            <div class="col card">
                                <label class="card-title pt-3 ps-3 pb-0 h5">{{ $title }}</label>
                                <div class="card-body">
                                    <button class="btn btn-warning" id="btnInputPegawai">+ Tambah Pegawai </button>
                                    {{-- FORM INPUT DATA PEGAWAI --}}
                                    <form action="/Data/Pegawai" method="POST" id="" class="formInput">
                                        @csrf
                                        <input type="hidden" name="npsnSekolah"  class="form-control @error('npsnSekolah') is-invalid @enderror"
                                                    id="npsn" placeholder="NPSN"
                                                    value="{{ $npsnSekolah }}" />
                                        <div class="row mb-3">
                                            <label class="col-sm-4 col-form-label" for="">ID
                                                Pegawai</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="idPegawai" class="form-control @error('idPegawai') is-invalid @enderror"
                                                    value="{{ old('idPegawai') }}" id="idPegawai" placeholder="ID Pegawai" />
                                            </div>
                                            @error('idPegawai')
                                                <div class="feedback-invalid">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-sm-4 col-form-label" for="">Nama
                                                Pegawai</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control text-uppercase @error('namaPegawai') is-invalid @enderror" name="namaPegawai"
                                                    value="{{ old('namaPegawai') }}" id="namaPegawai" placeholder="Nama Pegawai" />
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-sm-4 col-form-label" for="">Tempat,
                                                Tgl.Lahir</label>
                                            <div class="col-sm-4">
                                                <input type="text" name="tempatLahir" value="{{ old('tempatLahir') }}" id="tempatLahir"
                                                    class="col-sm-3 form-control @error('tempatLahir') is-invalid @enderror" placeholder="Tempat Lahir">
                                            </div>
                                            <div class="col-sm-4">
                                                <input type="date" class="form-control @error('tglLahir') is-invalid @enderror" name="tglLahir"
                                                    id="tglLahir" placeholder="1995/05/03" value="{{ old('tglLahir') }}"/>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-sm-4 col-form-label"
                                                for="">No.Handphone</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control @error('noHp') is-invalid @enderror"
                                                    onkeypress="return hanyaAngka(event)"
                                                    name="noHp" id="noHp" placeholder="082212345633"  value="{{ old('tglLahir') }}"/>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-sm-4 col-form-label" for="basic-default-jk">Jenis
                                                Kelamin</label>
                                            <div class="col-sm-8">
                                                <select class="form-select @error('jk') is-invalid @enderror" name="jk" id="jk">
                                                    <option disabled selected hidden>Pilih...</option>
                                                    <option value="Laki-Laki">Laki-Laki</option>
                                                    <option value="Perempuan">Perempuan</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-sm-4 col-form-label"
                                                for="basic-default-jabatan">Jabatan</label>
                                            <div class="col-sm-8">
                                                <select class="form-select @error('jabatan') is-invalid @enderror" name="jabatan" id="jabatan">
                                                    <option disabled selected hidden>Pilih...</option>
                                                    <option value="Guru">Guru</option>
                                                    <option value="Operator">Operator</option>
                                                    <option value="Staf TU">Staf TU</option>
                                                    <option value="Kepala Sekolah">Kepala Sekolah</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-sm-4 col-form-label"
                                                for="basic-default-golongan">Golongan</label>
                                            <div class="col-sm-8">
                                                <select class="form-select @error('golongan') is-invalid @enderror" name="golongan" id="golongan">
                                                    <option disabled selected hidden>Pilih...</option>
                                                    <option value="III A">III A</option>
                                                    <option value="III C">III C</option>
                                                    <option value="-">Lainnya</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-sm-4 col-form-label" for="basic-default-status">Status
                                                Kepegawaian</label>
                                            <div class="col-sm-8">
                                                <select class="form-select @error('status') is-invalid @enderror" name="status" id="status">
                                                    <option disabled selected hidden>Pilih...</option>
                                                    <option value="PNS">PNS</option>
                                                    <option value="Non PNS">Non PNS</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-sm-4 col-form-label" for="basic-default-pt">Pendidikan
                                                Terakhir</label>
                                            <div class="col-sm-8">
                                                <select class="form-select @error('pT') is-invalid @enderror" name="pT" id="pT">
                                                    <option disabled selected hidden>Pilih...</option>
                                                    <option value="S2">S2</option>
                                                    <option value="S1">S1</option>
                                                    <option value="SMA">SMA</option>
                                                    <option value="SMP">SMP</option>
                                                    <option value="SD">SD</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-12 text-end">
                                                <button type="submit" id="" class="btn btn-primary">Simpan</button>
                                                <button type="reset" class="btn btn-danger">Batal</button>
                                            </div>
                                        </div>
                                    </form>
                                    {{-- END FORM INPUT DATA PEGAWAI --}}
                                    <br>
                                    <hr>
                                    {{-- Table Data Pegawai --}}
                                    @include('dashboard.dataPegawai')
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- End Mid Content --}}

                    {{-- Right Content --}}
                    <div class="col-lg pe-0">
                        @include('component.auth.rightContent')
                    </div>
                    {{-- End Right Content --}}
                </div>
            </div>
            <!-- / Content -->

            {{-- footer --}}
            @include('component.auth.footer')

            <div class="content-backdrop fade"></div>
        </div>
        <!-- Content wrapper -->
    </div>
@endsection
