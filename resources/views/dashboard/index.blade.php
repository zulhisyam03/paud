@extends('layouts.main')
{{-- Loading --}}
<link rel="stylesheet" href="{{ asset('assets/css/loading.css') }}">
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
                    <span class="text-muted mb-1">Home <i class='bx bx-chevrons-right'></i> <b>{{ $title }}</b></span>
                    <div class="col-lg-8">
                        {{-- Welcome --}}
                        <div class="row mb-4">
                            <div class="col card">
                                <div class="d-flex align-items-end row">
                                    <div class="col-sm-7">
                                        <div class="card-body">
                                            <h5 class="card-title text-primary">Selamat Datang
                                                <b class="text-capitalize"> {{ auth()->user()->name }}</b> 🎉
                                            </h5>
                                            <p class="mb-4">
                                                Silahkan lakukan penginputan data bulanan anda.
                                            </p>

                                            <a href="javascript:;" class="btn btn-sm btn-outline-primary">Ayo Mulai</a>
                                        </div>
                                    </div>
                                    <div class="col-sm-5 text-center text-sm-left">
                                        <div class="card-body pb-0 px-0 px-md-4">
                                            <img src="../assets/img/illustrations/man-with-laptop-light.png" height="140"
                                                alt="View Badge User"
                                                data-app-dark-img="illustrations/man-with-laptop-dark.png"
                                                data-app-light-img="illustrations/man-with-laptop-light.png" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- End Welcome --}}
                        <div class="row mb-4">
                            <div class="col-card mx-0 px-0">
                                <h6 class="text-primary">Profil Paud</h6>
                                <div class="nav-align-top mx-0 " style="width: 100%;">
                                    <ul class="nav nav-tabs nav-fill" role="tablist">
                                        <li class="nav-item">
                                            <button type="button" class="nav-link active" role="tab"
                                                data-bs-toggle="tab" data-bs-target="#navs-justified-home"
                                                aria-controls="navs-justified-home" aria-selected="true">
                                                <i class="tf-icons bx bx-home"></i> Home

                                            </button>
                                        </li>
                                        <li class="nav-item">
                                            <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
                                                data-bs-target="#navs-justified-contact"
                                                aria-controls="navs-justified-contact" aria-selected="false">
                                                <i class='bx bx-envelope'></i> Kontak
                                            </button>
                                        </li>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane fade show active" id="navs-justified-home" role="tabpanel">
                                            <p>
                                                @foreach ($profil as $profile)
                                                    <table class="table table-striped text-wrap text-break">
                                                        <tr>
                                                            <th>NPSN</th>
                                                            <td>{{ $profile->sekolahProfil['npsn'] }}</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Status</th>
                                                            <td>{{ $profile->sekolahProfil['status'] }}</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Bentuk Pendidikan</th>
                                                            <td>{{ $profile->sekolahProfil['bentukPendidikan'] }}</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Status Kepemilikan</th>
                                                            <td>{{ $profile->sekolahProfil['stsatusKepemilikan'] }}</td>
                                                        </tr>
                                                        <tr>
                                                            <th>SK Pendirian Sekolah</th>
                                                            <td>{{ $profile->sekolahProfil['skPendirian'] }}</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Tanggal SK Pendirian</th>
                                                            <td>{{ $profile->sekolahProfil['tglSkPendirian'] }}</td>
                                                        </tr>
                                                        <tr>
                                                            <th>SK Izin Operasional</th>
                                                            <td>{{ $profile->sekolahProfil['skIzinOperasional'] }}</td>
                                                        </tr>
                                                        <tr>
                                                            <th>TAnggal SK Izin Operasional</th>
                                                            <td>{{ $profile->sekolahProfil['tglSkOperasional'] }}</td>
                                                        </tr>
                                                    </table>
                                                @endforeach
                                            </p>
                                        </div>
                                        <div class="tab-pane fade" id="navs-justified-contact" role="tabpanel">
                                            <p>
                                                @foreach ($kontak as $contact)
                                                    <table class="table table-striped text-wrap text-break">
                                                        <tr>
                                                            <th>Alamat</th>
                                                            <td>{{ $contact->alamat }}</td>
                                                        </tr>
                                                        <tr>
                                                            <th>RT / RW</th>
                                                            <td>{{ $contact->rtRw }}</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Dusun</th>
                                                            <td>{{ $contact->dusun }}</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Desa/Kelurahan</th>
                                                            <td>{{ $contact->desa }}</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Kecamatan</th>
                                                            <td>{{ $contact->kecamatan }}</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Kabupaten</th>
                                                            <td>{{ $contact->kabupaten }}</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Provinsi</th>
                                                            <td>{{ $contact->provinsi }}</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Kode Pos</th>
                                                            <td>{{ $contact->kdPos }}</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Lintang</th>
                                                            <td>{{ $contact->lintang }}</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Bujur</th>
                                                            <td>{{ $contact->bujur }}</td>
                                                        </tr>
                                                    </table>
                                                @endforeach
                                            </p>
                                        </div>
                                    </div>
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
