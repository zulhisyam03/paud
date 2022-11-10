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
                                <label class="card-title pt-3 ps-3 pb-0 h5">Profile Sekolah</label>
                                <div class="card-body">
                                    @foreach ($profil as $profile)
                                        <form action="/profile/sekolah" method="POST">
                                            @csrf
                                            <div class="row mb-3">
                                                <label class="col-sm-4 col-form-label" for="basic-default-name">NPSN</label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="npsn" class="form-control"
                                                        id="basic-default-name" placeholder="NPSN"
                                                        value="{{ $profile->sekolahProfil['npsn'] }}" />
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-sm-4 col-form-label" for="basic-default-name">Nama
                                                    Sekolah</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control text-uppercase"
                                                        name="namaSekolah" id="basic-default-name"
                                                        placeholder="Nama Sekolah"
                                                        value="{{ $profile->sekolahProfil['namaSekolah'] }}" />
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-sm-4 col-form-label"
                                                    for="basic-default-name">Akreditasi</label>
                                                <div class="col-sm-8">
                                                    <select class="form-select" name="akreditas" id="">
                                                        <option disabled selected hidden>{{ $profile->sekolahProfil['akreditas'] != '' ? $profile->sekolahProfil['akreditas'] : 'Pilih...' }}</option>
                                                        <option value="Akreditasi A">Akreditasi A</option>
                                                        <option value="Akreditasi B">Akreditasi B</option>
                                                        <option value="Akreditasi B">Akreditasi B</option>
                                                        <option value="Belum Terakreditasi">Belum Terakreditasi</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-sm-4 col-form-label"
                                                    for="basic-default-name">Kurikulum</label>
                                                <div class="col-sm-8">
                                                    <select class="form-select" name="kurikulum" id="">
                                                        <option disabled selected hidden>{{ $profile->sekolahProfil['kurikulum'] != '' ? $profile->sekolahProfil['kurikulum'] : 'Pilih...' }}</option>
                                                        <option value="Kurikulum 2013">Kurikulum 2013</option>                                                        
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-sm-4 col-form-label"
                                                    for="basic-default-name">Status</label>
                                                <div class="col-sm-8">
                                                    <select class="form-select" name="status" id="">
                                                        <option disabled selected hidden>{{ $profile->sekolahProfil['status'] != '' ? $profile->sekolahProfil['status'] : 'Pilih...' }}</option>
                                                        <option value="Swasta">Swasta</option>
                                                        <option value="Negeri">Negeri</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-sm-4 col-form-label" for="basic-default-name">Bentuk
                                                    Pendidikan</label>
                                                <div class="col-sm-8">
                                                    <select name="bentukPendidikan" class="form-select" id="">
                                                        <option disabled selected hidden>{{ $profile->sekolahProfil['status'] != '' ? $profile->sekolahProfil['bentukPendidikan'] : 'Pilih...' }}</option>
                                                        <option value="TK">TK</option>
                                                        <option value="SD">SD</option>
                                                        <option value="SMP">SMP</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-sm-4 col-form-label" for="basic-default-name">Status
                                                    Kepemilikan</label>
                                                <div class="col-sm-8">
                                                    <select name="statsuKepemilikan" class="form-select" id="">
                                                        <option disabled selected hidden>{{ $profile->sekolahProfil['status'] != '' ? $profile->sekolahProfil['statusKepemilikan'] : 'Pilih...' }}</option>
                                                        <option value="Yayasan">Yayasan</option>
                                                        <option value="Negeri">Negeri</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-sm-4 col-form-label" for="basic-default-name">SK Pendirian
                                                    sekolah
                                                    Sekolah</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" name="skPendirian"
                                                        id="basic-default-name" placeholder="SK Pendirian Sekolah"
                                                        value="{{ $profile->sekolahProfil['skPendirian'] }}" />
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-sm-4 col-form-label" for="basic-default-name">tanggal sk
                                                    pendirian
                                                    Sekolah</label>
                                                <div class="col-sm-8">
                                                    <input type="date" class="form-control" name="tglSkPendirian"
                                                        id="basic-default-name" placeholder="2022-01-01"
                                                        value="{{ $profile->sekolahProfil['tglSkPendirian'] }}" />
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-sm-4 col-form-label" for="basic-default-name">sk izin
                                                    operasional
                                                    Sekolah</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" name="skIzinOperasional"
                                                        id="basic-default-name" placeholder="SK Izin Operasional"
                                                        value="{{ $profile->sekolahProfil['skIzinOperasional'] }}" />
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-sm-4 col-form-label" for="basic-default-name">tanggal sk
                                                    izin operasional
                                                    Sekolah</label>
                                                <div class="col-sm-8">
                                                    <input type="date" class="form-control" name="tglSkOperasional"
                                                        id="basic-default-name" placeholder="2022-01-01"
                                                        value="{{ $profile->sekolahProfil['tglSkOperasional'] }}" />
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-sm-12 text-end">
                                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                                    <button type="reset" class="btn btn-danger">Batal</button>
                                                </div>
                                            </div>
                                        </form>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- End Mid Content --}}

                    {{-- Right Content --}}
                    @include('component.auth.rightContent')
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
