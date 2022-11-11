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
                                    <form id="formInputPegawai" class="formInput">
                                        @csrf
                                        <div class="row mb-3">
                                            <label class="col-sm-4 col-form-label" for="">NPSN</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="npsn" class="form-control"
                                                    id="npsn" placeholder="NPSN"
                                                    value="{{ $npsnSekolah }}" />
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-sm-4 col-form-label" for="">ID
                                                Pegawai</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="idPegawai" class="form-control"
                                                    id="idPegawai" placeholder="ID Pegawai" />
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-sm-4 col-form-label" for="">Nama
                                                Pegawai</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control text-uppercase" name="namaSekolah"
                                                    id="namaSekolah" placeholder="Nama Sekolah" />
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-sm-4 col-form-label" for="">Tempat,
                                                Tgl.Lahir</label>
                                            <div class="col-sm-4">
                                                <input type="text" name="tempatLahir" id="tempatLahir"
                                                    class="col-sm-3 form-control" placeholder="Tempat Lahir">
                                            </div>
                                            <div class="col-sm-4">
                                                <input type="date" class="form-control " name="tglLahir"
                                                    id="tglLahir" placeholder="1995/05/03" />
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-sm-4 col-form-label"
                                                for="">No.Handphone</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control"
                                                    onkeypress="return hanyaAngka(event)"
                                                    name="noHp" id="noHp" placeholder="082212345633" />
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-sm-4 col-form-label" for="basic-default-jk">Jenis
                                                Kelamin</label>
                                            <div class="col-sm-8">
                                                <select class="form-select" name="jk" id="jk">
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
                                                <select class="form-select" name="jabatan" id="jabatan">
                                                    <option disabled selected hidden>Pilih...</option>
                                                    <option value="Guru">Guru</option>
                                                    <option value="Staf TU">Staf TU</option>
                                                    <option value="Kepala Sekolah">Kepala Sekolah</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-sm-4 col-form-label"
                                                for="basic-default-golongan">Golongan</label>
                                            <div class="col-sm-8">
                                                <select class="form-select" name="golongan" id="golongan">
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
                                                <select class="form-select" name="status" id="status">
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
                                                <select class="form-select" name="pT" id="pT">
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
                                                <button type="submit" id="btnSimpanPegawai" class="btn btn-primary">Simpan</button>
                                                <button type="reset" class="btn btn-danger">Batal</button>
                                            </div>
                                        </div>
                                    </form>
                                    {{-- END FORM INPUT DATA PEGAWAI --}}
                                    <br>
                                    <hr>
                                    {{-- Table Data Pegawai --}}
                                    <div id="dataPegawai">

                                    </div>
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
