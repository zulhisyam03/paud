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
                                    <button class="btn btn-warning" id="btnInputPegawai">+ Tambah Siswa </button>
                                    {{-- FORM INPUT DATA PEGAWAI --}}
                                    <form action="/Data/prasarana" method="POST" id="" class="formInput">
                                        @csrf
                                        <input type="hidden" name="npsnSekolah"
                                            class="form-control @error('npsnSekolah') is-invalid @enderror" id="npsn"
                                            placeholder="NPSN" value="{{ $npsnSekolah }}" />
                                        <table class="table table-hover">
                                            <tr>
                                                <th>Semester</th>
                                                <td>
                                                    <div class="row">
                                                        <div class="col-sm-4 ps-0">
                                                            <select name="thSemester" class="form-select">
                                                                <option hidden selected>Tahun...</option>
                                                                @php
                                                                    $tglNow = date('Y');
                                                                    $max = 10;
                                                                @endphp
                                                                @for ($i = 0; $i < $max; $i++)
                                                                    <option value="{{ $tglNow }}">{{ $tglNow }}
                                                                    </option>
                                                                    @php
                                                                        $tglNow--;
                                                                    @endphp
                                                                @endfor
                                                            </select>
                                                        </div>
                                                        <div class="col-sm-5">
                                                            <select name="semester" id="" class="form-select">
                                                                <option hidden selected>Semeste...</option>
                                                                <option value="Ganjil">Ganjil</option>
                                                                <option value="Genap">Genap</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Ruang Kelas</th>
                                                <td>
                                                    <div class="number-spinner row">
                                                        <button class="btn btn-danger btn-sm" data-dir="dwn" type="button"
                                                            style="width: 60px">
                                                            <i class="bx bx-minus d-inline"></i>
                                                        </button>
                                                        <div class="col-sm-3 d-inline px-0.5">
                                                            <input type="text" class="form-control text-center"
                                                                value="0" name="kelas">
                                                        </div>
                                                        <button class="btn btn-warning btn-sm" data-dir="up" type="button"
                                                            style="width: 60px"><i class="bx bx-plus"></i></button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Ruang Perpustakaan</th>
                                                <td>
                                                    <div class="number-spinner row">
                                                        <button class="btn btn-danger" data-dir="dwn" type="button"
                                                            style="width: 60px">
                                                            <i class="bx bx-minus d-inline"></i>
                                                        </button>
                                                        <div class="col-sm-3 d-inline px-0.5">
                                                            <input type="text" class="form-control text-center"
                                                                value="0" name="perpustakaan">
                                                        </div>
                                                        <button class="btn btn-warning" data-dir="up" type="button"
                                                            style="width: 60px"><i class="bx bx-plus"></i></button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Ruang Laboratorium</th>
                                                <td>
                                                    <div class="number-spinner row">
                                                        <button class="btn btn-danger" data-dir="dwn" type="button"
                                                            style="width: 60px">
                                                            <i class="bx bx-minus d-inline"></i>
                                                        </button>
                                                        <div class="col-sm-3 d-inline px-0.5">
                                                            <input type="text" class="form-control text-center"
                                                                value="0" name="laboratorium">
                                                        </div>
                                                        <button class="btn btn-warning" data-dir="up" type="button"
                                                            style="width: 60px"><i class="bx bx-plus"></i></button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Ruang Praktik</th>
                                                <td>
                                                    <div class="number-spinner row">
                                                        <button class="btn btn-danger" data-dir="dwn" type="button"
                                                            style="width: 60px">
                                                            <i class="bx bx-minus d-inline"></i>
                                                        </button>
                                                        <div class="col-sm-3 d-inline px-0.5">
                                                            <input type="text" class="form-control text-center"
                                                                value="0" name="praktik">
                                                        </div>
                                                        <button class="btn btn-warning" data-dir="up" type="button"
                                                            style="width: 60px"><i class="bx bx-plus"></i></button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Ruang Pimpinan</th>
                                                <td>
                                                    <div class="number-spinner row">
                                                        <button class="btn btn-danger" data-dir="dwn" type="button"
                                                            style="width: 60px">
                                                            <i class="bx bx-minus d-inline"></i>
                                                        </button>
                                                        <div class="col-sm-3 d-inline px-0.5">
                                                            <input type="text" class="form-control text-center"
                                                                value="0" name="pimpinan">
                                                        </div>
                                                        <button class="btn btn-warning" data-dir="up" type="button"
                                                            style="width: 60px"><i class="bx bx-plus"></i></button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Ruang Guru</th>
                                                <td>
                                                    <div class="number-spinner row">
                                                        <button class="btn btn-danger" data-dir="dwn" type="button"
                                                            style="width: 60px">
                                                            <i class="bx bx-minus d-inline"></i>
                                                        </button>
                                                        <div class="col-sm-3 d-inline px-0.5">
                                                            <input type="text" class="form-control text-center"
                                                                value="0" name="guru">
                                                        </div>
                                                        <button class="btn btn-warning" data-dir="up" type="button"
                                                            style="width: 60px"><i class="bx bx-plus"></i></button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Ruang Ibadah</th>
                                                <td>
                                                    <div class="number-spinner row">
                                                        <button class="btn btn-danger" data-dir="dwn" type="button"
                                                            style="width: 60px">
                                                            <i class="bx bx-minus d-inline"></i>
                                                        </button>
                                                        <div class="col-sm-3 d-inline px-0.5">
                                                            <input type="text" class="form-control text-center"
                                                                value="0" name="ibadah">
                                                        </div>
                                                        <button class="btn btn-warning" data-dir="up" type="button"
                                                            style="width: 60px"><i class="bx bx-plus"></i></button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Ruang UKS</th>
                                                <td>
                                                    <div class="number-spinner row">
                                                        <button class="btn btn-danger" data-dir="dwn" type="button"
                                                            style="width: 60px">
                                                            <i class="bx bx-minus d-inline"></i>
                                                        </button>
                                                        <div class="col-sm-3 d-inline px-0.5">
                                                            <input type="text" class="form-control text-center"
                                                                value="0" name="uks">
                                                        </div>
                                                        <button class="btn btn-warning" data-dir="up" type="button"
                                                            style="width: 60px"><i class="bx bx-plus"></i></button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Ruang Toilet</th>
                                                <td>
                                                    <div class="number-spinner row">
                                                        <button class="btn btn-danger" data-dir="dwn" type="button"
                                                            style="width: 60px">
                                                            <i class="bx bx-minus d-inline"></i>
                                                        </button>
                                                        <div class="col-sm-3 d-inline px-0.5">
                                                            <input type="text" class="form-control text-center"
                                                                value="0" name="toilet">
                                                        </div>
                                                        <button class="btn btn-warning" data-dir="up" type="button"
                                                            style="width: 60px"><i class="bx bx-plus"></i></button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Ruang Gudang</th>
                                                <td>
                                                    <div class="number-spinner row">
                                                        <button class="btn btn-danger" data-dir="dwn" type="button"
                                                            style="width: 60px">
                                                            <i class="bx bx-minus d-inline"></i>
                                                        </button>
                                                        <div class="col-sm-3 d-inline px-0.5">
                                                            <input type="text" class="form-control text-center"
                                                                value="0" name="gudang">
                                                        </div>
                                                        <button class="btn btn-warning" data-dir="up" type="button"
                                                            style="width: 60px"><i class="bx bx-plus"></i></button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Ruang Sirkulasi</th>
                                                <td>
                                                    <div class="number-spinner row">
                                                        <button class="btn btn-danger" data-dir="dwn" type="button"
                                                            style="width: 60px">
                                                            <i class="bx bx-minus d-inline"></i>
                                                        </button>
                                                        <div class="col-sm-3 d-inline px-0.5">
                                                            <input type="text" class="form-control text-center"
                                                                value="0" name="sirkulasi">
                                                        </div>
                                                        <button class="btn btn-warning" data-dir="up" type="button"
                                                            style="width: 60px"><i class="bx bx-plus"></i></button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Tempat Bermain/Olahraga</th>
                                                <td>
                                                    <div class="number-spinner row">
                                                        <button class="btn btn-danger" data-dir="dwn" type="button"
                                                            style="width: 60px">
                                                            <i class="bx bx-minus d-inline"></i>
                                                        </button>
                                                        <div class="col-sm-3 d-inline px-0.5">
                                                            <input type="text" class="form-control text-center"
                                                                value="0" name="tempatBermain">
                                                        </div>
                                                        <button class="btn btn-warning" data-dir="up" type="button"
                                                            style="width: 60px"><i class="bx bx-plus"></i></button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Ruang Tata Usaha</th>
                                                <td>
                                                    <div class="number-spinner row">
                                                        <button class="btn btn-danger" data-dir="dwn" type="button"
                                                            style="width: 60px">
                                                            <i class="bx bx-minus d-inline"></i>
                                                        </button>
                                                        <div class="col-sm-3 d-inline px-0.5">
                                                            <input type="text" class="form-control text-center"
                                                                value="0" name="tu">
                                                        </div>
                                                        <button class="btn btn-warning" data-dir="up" type="button"
                                                            style="width: 60px"><i class="bx bx-plus"></i></button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Ruang Konseling</th>
                                                <td>
                                                    <div class="number-spinner row">
                                                        <button class="btn btn-danger" data-dir="dwn" type="button"
                                                            style="width: 60px">
                                                            <i class="bx bx-minus d-inline"></i>
                                                        </button>
                                                        <div class="col-sm-3 d-inline px-0.5">
                                                            <input type="text" class="form-control text-center"
                                                                value="0" name="konseling">
                                                        </div>
                                                        <button class="btn btn-warning" data-dir="up" type="button"
                                                            style="width: 60px"><i class="bx bx-plus"></i></button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Ruang OSIS</th>
                                                <td>
                                                    <div class="number-spinner row">
                                                        <button class="btn btn-danger" data-dir="dwn" type="button"
                                                            style="width: 60px">
                                                            <i class="bx bx-minus d-inline"></i>
                                                        </button>
                                                        <div class="col-sm-3 d-inline px-0.5">
                                                            <input type="text" class="form-control text-center"
                                                                value="0" name="osis">
                                                        </div>
                                                        <button class="btn btn-warning" data-dir="up" type="button"
                                                            style="width: 60px"><i class="bx bx-plus"></i></button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Ruang Bangunan</th>
                                                <td>
                                                    <div class="number-spinner row">
                                                        <button class="btn btn-danger" data-dir="dwn" type="button"
                                                            style="width: 60px">
                                                            <i class="bx bx-minus d-inline"></i>
                                                        </button>
                                                        <div class="col-sm-3 d-inline px-0.5">
                                                            <input type="text" class="form-control text-center"
                                                                value="0" name="bangunan">
                                                        </div>
                                                        <button class="btn btn-warning" data-dir="up" type="button"
                                                            style="width: 60px"><i class="bx bx-plus"></i></button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="border border-white">
                                                <td colspan="2" class="text-end"><button type="submit"
                                                        id="" class="btn btn-primary">Simpan</button>
                                                    <button type="reset" class="btn btn-danger">Batal</button>
                                                </td>
                                            </tr>
                                        </table>
                                    </form>
                                    {{-- END FORM INPUT DATA PEGAWAI --}}
                                    <br>
                                    <hr>
                                    {{-- Table Data Pegawai --}}
                                    @include('dashboard.dataPrasarana')
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
