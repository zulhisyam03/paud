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
                                    <button class="btn btn-warning" id="btnInputPegawai">+ Tambah Data Sanitasi </button>
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
                                                        <div class="col-sm ps-0">
                                                            <select name="semester" class="form-select">
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
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Sumber Air</th>
                                                <td>
                                                    <div class="row">
                                                       <div class="col-sm-5">
                                                        <input type="radio" class="form-control" value="Ada">Ada                                                        
                                                        <input type="radio" class="form-control" value="Tidak Ada">Tidak Ada                                                        
                                                       </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Sumber Air Minum</th>
                                                <td>
                                                    <div class="number-spinner row">
                                                        <button class="btn btn-danger" data-dir="dwn" type="button"
                                                            style="width: 60px">
                                                            <i class="bx bx-minus d-inline"></i>
                                                        </button>
                                                        <div class="col-sm-5 d-inline px-0.5">
                                                            <input type="text" class="form-control text-center"
                                                                value="0" name="perpustakaan">
                                                        </div>
                                                        <button class="btn btn-warning" data-dir="up" type="button"
                                                            style="width: 60px"><i class="bx bx-plus"></i></button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Kecukupan Air Bersih</th>
                                                <td>
                                                    <div class="number-spinner row">
                                                        <button class="btn btn-danger" data-dir="dwn" type="button"
                                                            style="width: 60px">
                                                            <i class="bx bx-minus d-inline"></i>
                                                        </button>
                                                        <div class="col-sm-5 d-inline px-0.5">
                                                            <input type="text" class="form-control text-center"
                                                                value="0" name="laboratorium">
                                                        </div>
                                                        <button class="btn btn-warning" data-dir="up" type="button"
                                                            style="width: 60px"><i class="bx bx-plus"></i></button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Sekolah Menyediakan Jamban Yang Dilengkapi dengan Fasilitas Pendukung untuk digunakan oleh siswa berkebutuhan khusus</th>
                                                <td>
                                                    <div class="number-spinner row">
                                                        <button class="btn btn-danger" data-dir="dwn" type="button"
                                                            style="width: 60px">
                                                            <i class="bx bx-minus d-inline"></i>
                                                        </button>
                                                        <div class="col-sm-5 d-inline px-0.5">
                                                            <input type="text" class="form-control text-center"
                                                                value="0" name="praktik">
                                                        </div>
                                                        <button class="btn btn-warning" data-dir="up" type="button"
                                                            style="width: 60px"><i class="bx bx-plus"></i></button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Tipe Jamban</th>
                                                <td>
                                                    <div class="number-spinner row">
                                                        <button class="btn btn-danger" data-dir="dwn" type="button"
                                                            style="width: 60px">
                                                            <i class="bx bx-minus d-inline"></i>
                                                        </button>
                                                        <div class="col-sm-5 d-inline px-0.5">
                                                            <input type="text" class="form-control text-center"
                                                                value="0" name="pimpinan">
                                                        </div>
                                                        <button class="btn btn-warning" data-dir="up" type="button"
                                                            style="width: 60px"><i class="bx bx-plus"></i></button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Jumlah hari dalam seminggu siswa mengikuti kegiatan cuci tangan berkelompok</th>
                                                <td>
                                                    <div class="number-spinner row">
                                                        <button class="btn btn-danger" data-dir="dwn" type="button"
                                                            style="width: 60px">
                                                            <i class="bx bx-minus d-inline"></i>
                                                        </button>
                                                        <div class="col-sm-5 d-inline px-0.5">
                                                            <input type="text" class="form-control text-center"
                                                                value="0" name="guru">
                                                        </div>
                                                        <button class="btn btn-warning" data-dir="up" type="button"
                                                            style="width: 60px"><i class="bx bx-plus"></i></button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Jumlah tempat cuci tangan</th>
                                                <td>
                                                    <div class="number-spinner row">
                                                        <button class="btn btn-danger" data-dir="dwn" type="button"
                                                            style="width: 60px">
                                                            <i class="bx bx-minus d-inline"></i>
                                                        </button>
                                                        <div class="col-sm-5 d-inline px-0.5">
                                                            <input type="text" class="form-control text-center"
                                                                value="0" name="ibadah">
                                                        </div>
                                                        <button class="btn btn-warning" data-dir="up" type="button"
                                                            style="width: 60px"><i class="bx bx-plus"></i></button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Jumlah tempat cuci tangan rusak</th>
                                                <td>
                                                    <div class="number-spinner row">
                                                        <button class="btn btn-danger" data-dir="dwn" type="button"
                                                            style="width: 60px">
                                                            <i class="bx bx-minus d-inline"></i>
                                                        </button>
                                                        <div class="col-sm-5 d-inline px-0.5">
                                                            <input type="text" class="form-control text-center"
                                                                value="0" name="uks">
                                                        </div>
                                                        <button class="btn btn-warning" data-dir="up" type="button"
                                                            style="width: 60px"><i class="bx bx-plus"></i></button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Apakah Sabun dan air mengalir pada tempat cuci tangan</th>
                                                <td>
                                                    <div class="number-spinner row">
                                                        <button class="btn btn-danger" data-dir="dwn" type="button"
                                                            style="width: 60px">
                                                            <i class="bx bx-minus d-inline"></i>
                                                        </button>
                                                        <div class="col-sm-5 d-inline px-0.5">
                                                            <input type="text" class="form-control text-center"
                                                                value="0" name="toilet">
                                                        </div>
                                                        <button class="btn btn-warning" data-dir="up" type="button"
                                                            style="width: 60px"><i class="bx bx-plus"></i></button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Sekolah memiliki saluran pembuangan air limbah dari jamban</th>
                                                <td>
                                                    <div class="number-spinner row">
                                                        <button class="btn btn-danger" data-dir="dwn" type="button"
                                                            style="width: 60px">
                                                            <i class="bx bx-minus d-inline"></i>
                                                        </button>
                                                        <div class="col-sm-5 d-inline px-0.5">
                                                            <input type="text" class="form-control text-center"
                                                                value="0" name="gudang">
                                                        </div>
                                                        <button class="btn btn-warning" data-dir="up" type="button"
                                                            style="width: 60px"><i class="bx bx-plus"></i></button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Sekolah Pernah Menguras Tangki Septik dalam 3 hingga 5 tahun terakhir dengan truk/motor sedot tinja</th>
                                                <td>
                                                    <div class="number-spinner row">
                                                        <button class="btn btn-danger" data-dir="dwn" type="button"
                                                            style="width: 60px">
                                                            <i class="bx bx-minus d-inline"></i>
                                                        </button>
                                                        <div class="col-sm-5 d-inline px-0.5">
                                                            <input type="text" class="form-control text-center"
                                                                value="0" name="sirkulasi">
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
                                    @include('dashboard.dataSanitasi')
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
