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
                                    @foreach ($dataPelengkap as $item)
                                        <form action="/profile/sekolah" method="POST">
                                            @csrf
                                            <div class="row mb-3">
                                                <label class="col-sm-4 col-form-label"
                                                    for="basic-default-name">Kebutuhan Khusus Dilayani</label>
                                                <div class="col-sm-8">
                                                    <select class="form-select" name="kkd" id="">
                                                        <option disabled selected hidden>{{ $item->kkd != '' ? $item->kkd : 'Pilih...' }}</option>
                                                        <option value="Ada">Ada</option>
                                                        <option value="Tidak Ada">Tidak Ada</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-sm-4 col-form-label" for="basic-default-name">Nama
                                                    Bank</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control text-uppercase"
                                                        name="namaBank" id="basic-default-name"
                                                        placeholder="Nama Bank..."
                                                        value="{{ $item->namaBank }}" />
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-sm-4 col-form-label" for="basic-default-name">Cabang KCP/Unit
                                                    Bank</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control text-uppercase"
                                                        name="cabangBank" id="basic-default-name"
                                                        placeholder="Cabang Bank..."
                                                        value="{{ $item->cabangBank }}" />
                                                </div>
                                            </div>                                            
                                            <div class="row mb-3">
                                                <label class="col-sm-4 col-form-label" for="basic-default-name">Rekening Atas Nama</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" name="nama"
                                                        id="basic-default-name" placeholder="Nama..."
                                                        value="{{ $item->nama }}" />
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
