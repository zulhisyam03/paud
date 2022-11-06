@extends('layouts.main')
{{-- Loading --}}
<link rel="stylesheet" href="{{ asset('assets/css/loading.css') }}">
@section('content')
    @include('component.auth.sidebar')
    <!-- Layout container -->
    <div class="layout-page">
        <!-- Navbar -->
        @include('component.auth.topnav')

        <!-- / Navbar -->

        <!-- Content wrapper -->
        <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
                <div class="col-lg-12 mb-2 card">
                    <div class="card-body">
                        <h5 class="mb-1 me-0">Kelengkapan Profil</h5>
                        <div class="progress" style="height: 18px">
                            <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25"
                                aria-valuemin="0" aria-valuemax="100">
                                25%
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 mb-4 order-0">
                        <div class="card">
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
                                            alt="View Badge User" data-app-dark-img="illustrations/man-with-laptop-dark.png"
                                            data-app-light-img="illustrations/man-with-laptop-light.png" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 order-1">
                        <div class="row">
                            <div class="col-lg-6 col-md-12 col-6 mb-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="card-title d-flex align-items-start justify-content-between">
                                            <div class="avatar flex-shrink-0">
                                                <img src="../assets/img/icons/unicons/building.svg" alt="Ruangan"
                                                    class="rounded" />
                                            </div>
                                            <div class="dropdown">
                                                <button class="btn p-0" type="button" id="cardOpt3"
                                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                                                    <a class="dropdown-item" href="javascript:void(0);">View
                                                        More</a>
                                                    <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                        <span>Ruangan</span>
                                        <h3 class="card-title mb-1">5</h3>
                                        <a href="#">
                                            <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i>
                                                Detil</small>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 col-6 mb-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="card-title d-flex align-items-start justify-content-between">
                                            <div class="avatar flex-shrink-0">
                                                <img src="../assets/img/icons/unicons/water.svg" alt="Sanitasi"
                                                    class="rounded" />
                                            </div>
                                            <div class="dropdown">
                                                <button class="btn p-0" type="button" id="cardOpt6"
                                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt6">
                                                    <a class="dropdown-item" href="javascript:void(0);">View
                                                        More</a>
                                                    <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                        <span>Sanitasi</span>
                                        <h3 class="card-title text-nowrap mb-1">0</h3>
                                        <a href="#">
                                            <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i>
                                                Detil</small>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Total Revenue -->
                    <div class="col-12 col-lg-8 order-2 order-md-3 order-lg-2 mb-4">

                        <div class="row">
                            <div class="col-xl">
                                <h6 class="text-muted">Profil Paud</h6>
                                <div class="nav-align-top mb-4">
                                    <ul class="nav nav-tabs nav-fill" role="tablist">
                                        <li class="nav-item">
                                            <button type="button" class="nav-link active" role="tab"
                                                data-bs-toggle="tab" data-bs-target="#navs-justified-home"
                                                aria-controls="navs-justified-home" aria-selected="true">
                                                <i class="tf-icons bx bx-home"></i> Home
                                                {{-- <span class="badge rounded-pill badge-center h-px-20 w-px-20 bg-label-danger">3</span> --}}
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
                                                Icing pastry pudding oat cake. Lemon drops cotton candy caramels cake
                                                caramels sesame snaps
                                                powder. Bear claw candy topping.
                                            </p>
                                            <p class="mb-0">
                                                Tootsie roll fruitcake cookie. Dessert topping pie. Jujubes wafer carrot
                                                cake jelly. Bonbon
                                                jelly-o jelly-o ice cream jelly beans candy canes cake bonbon. Cookie jelly
                                                beans marshmallow
                                                jujubes sweet.
                                            </p>
                                        </div>
                                        <div class="tab-pane fade" id="navs-justified-contact" role="tabpanel">
                                            <p>
                                                Donut dragée jelly pie halvah. Danish gingerbread bonbon cookie wafer candy
                                                oat cake ice
                                                cream. Gummies halvah tootsie roll muffin biscuit icing dessert gingerbread.
                                                Pastry ice cream
                                                cheesecake fruitcake.
                                            </p>
                                            <p class="mb-0">
                                                Jelly-o jelly beans icing pastry cake cake lemon drops. Muffin muffin pie
                                                tiramisu halvah
                                                cotton candy liquorice caramels.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                   
                    <div class="col-12 col-md-8 col-lg-4 order-3 order-md-2">
                        <div class="row">
                            <div class="col-6 mb-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="card-title d-flex align-items-start justify-content-between">
                                            <div class="avatar flex-shrink-0">
                                                <img src="../assets/img/icons/unicons/users-alt.svg" alt="Peserta Didik"
                                                    class="rounded" />
                                            </div>
                                            <div class="dropdown">
                                                <button class="btn p-0" type="button" id="cardOpt4"
                                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt4">
                                                    <a class="dropdown-item" href="javascript:void(0);">View
                                                        More</a>
                                                    <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                        <span class="d-block mb-1">PD</span>
                                        <h3 class="card-title text-nowrap mb-1">25 <small><sub>Org</sub></small></h3>
                                        <a href="#">
                                            <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i>
                                                Detil</small>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 mb-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="card-title d-flex align-items-start justify-content-between">
                                            <div class="avatar flex-shrink-0">
                                                <img src="../assets/img/icons/unicons/user-md.svg" alt="ptk"
                                                    class="rounded" />
                                            </div>
                                            <div class="dropdown">
                                                <button class="btn p-0" type="button" id="cardOpt1"
                                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="cardOpt1">
                                                    <a class="dropdown-item" href="javascript:void(0);">View
                                                        More</a>
                                                    <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                        <span class="fw-semibold d-block mb-1">PTK</span>
                                        <h3 class="card-title mb-2">40 <small><sub>Org</sub></small></h3>
                                        <a href="#">
                                            <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i>
                                                Detil</small>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- </div>
                            <div class="row"> -->
                            <div class="col-12 mb-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between flex-sm-row flex-column gap-3">
                                            <div
                                                class="d-flex flex-sm-column flex-row align-items-start justify-content-between">
                                                <div class="card-title">
                                                    <h5 class="text-nowrap mb-2">Profile Report</h5>
                                                    <span class="badge bg-label-warning rounded-pill">Year
                                                        2021</span>
                                                </div>
                                                <div class="mt-sm-auto">
                                                    <small class="text-success text-nowrap fw-semibold"><i
                                                            class="bx bx-chevron-up"></i> 68.2%</small>
                                                    <h3 class="mb-0">$84,686k</h3>
                                                </div>
                                            </div>
                                            <div id="profileReportChart"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>                
            </div>
            <!-- / Content -->

            <!-- Footer -->
            <footer class="content-footer footer bg-footer-theme">
                <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                    <div class="mb-2 mb-md-0">
                        ©
                        <script>
                            document.write(new Date().getFullYear());
                        </script>
                        , made with ❤️ by
                        <a href="https://themeselection.com" target="_blank"
                            class="footer-link fw-bolder">ThemeSelection</a>
                    </div>
                    <div>
                        <a href="https://themeselection.com/license/" class="footer-link me-4"
                            target="_blank">License</a>
                        <a href="https://themeselection.com/" target="_blank" class="footer-link me-4">More
                            Themes</a>

                        <a href="https://themeselection.com/demo/sneat-bootstrap-html-admin-template/documentation/"
                            target="_blank" class="footer-link me-4">Documentation</a>

                        <a href="https://github.com/themeselection/sneat-html-admin-template-free/issues" target="_blank"
                            class="footer-link me-4">Support</a>
                    </div>
                </div>
            </footer>
            <!-- / Footer -->

            <div class="content-backdrop fade"></div>
        </div>
        <!-- Content wrapper -->
    </div>
@endsection
