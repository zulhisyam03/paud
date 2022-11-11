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
                                    @foreach ($kontak as $contact)
                                        <form action="/profile/kontak" method="POST">
                                            @csrf
                                            <div class="row mb-3">
                                                <label class="col-sm-4 col-form-label" for="basic-default-name" >NPSN</label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="npsn" class="form-control"
                                                        id="basic-default-name" placeholder="NPSN"
                                                        value="{{ $contact->npsn }}" readonly/>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-sm-4 col-form-label" for="basic-default-name">Alamat
                                                    Sekolah</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control text-uppercase" name="alamat"
                                                        id="basic-default-alamat" placeholder="Alamat"
                                                        value="{{ $contact->alamat }}" />
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-sm-4 col-form-label" for="basic-default-name">Dusun
                                                </label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control text-uppercase" name="dusun"
                                                        id="basic-default-alamat" placeholder="Dusun"
                                                        value="{{ $contact->dusun }}" />
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-sm-4 col-form-label"
                                                    for="basic-default-name">RT/RW</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" name="rtRw"
                                                        id="basic-default-name" placeholder="RT/RW"
                                                        value="{{ $contact->rtRw }}" />
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-sm-4 col-form-label"
                                                    for="basic-default-name">Desa/Kelurahan</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" name="desa"
                                                        id="basic-default-name" placeholder="Desa/Kelurahan"
                                                        value="{{ $contact->desa }}" />
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-sm-4 col-form-label"
                                                    for="basic-default-name">Kecamatan</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" name="kecamatan"
                                                        id="basic-default-name" placeholder="Kecamatan"
                                                        value="{{ $contact->kecamatan }}" />
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-sm-4 col-form-label"
                                                    for="basic-default-name">Kabupaten</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" name="kabupaten"
                                                        id="basic-default-name" placeholder="2022-01-01"
                                                        value="{{ $contact->kabupaten }}" />
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-sm-4 col-form-label"
                                                    for="basic-default-name">Provinsi</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" name="provinsi"
                                                        id="basic-default-name" placeholder="Provinsi"
                                                        value="{{ $contact->provinsi }}" />
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-sm-4 col-form-label"
                                                    for="basic-default-name">Kode Pos</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" name="kdPos"
                                                        id="basic-default-name" placeholder="46311"
                                                        value="{{ $contact->kdPos }}" />
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-sm-4 col-form-label"
                                                    for="basic-default-name">Lintang</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" name="lintang"
                                                        id="basic-default-name" placeholder="Garis Lintang"
                                                        value="{{ $contact->lintang }}" />
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-sm-4 col-form-label"
                                                    for="basic-default-name">Bujur</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" name="bujur"
                                                        id="basic-default-name" placeholder="Garis Bujur"
                                                        value="{{ $contact->bujur }}" />
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
