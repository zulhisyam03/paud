@extends('layouts.main')
{{-- Loading --}}
<link rel="stylesheet" href="{{ asset('assets/css/loading.css') }}">
@section('content')
    <!-- Content -->
    @if ($message = session()->has('gagalLogin'))
        <div class="alert alert-danger alert-dismissible fade show text-center fixed-top" role="alert">
            <strong>Maaf!</strong> {{ session()->get('gagalLogin') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    @if ($message = session()->has('succes'))
        <div class="alert alert-primary alert-dismissible fade show text-center fixed-top" role="alert">
            <strong>Selamat!</strong> {{ session()->get('succes') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="animate-bottom container-xxl">
        <div class="authentication-wrapper authentication-basic container-p-y">
            <div class="authentication-inner">
                <!-- Register -->
                <div class="card">
                    <div class="card-body">
                        <!-- Logo -->
                        <div class="app-brand justify-content-center">
                            <a href="index.html" class="app-brand-link gap-2">
                                <span class="app-brand-text demo text-body fw-bolder">
                                    <img src="{{ asset('assets/img/logoSigi.png') }}" alt="logo Sigi" width="55px"
                                        height="55px">
                                    <img src="{{ asset('assets/img/logoDinasPendidikan.png') }}" alt="logo Dinas Pendidikan"
                                        width="73px" height="55px">
                                    <img src="{{ asset('assets/img/logoPaud.png') }}" alt="logo Paud" width="60px"
                                        height="55px">
                                </span>
                            </a>
                        </div>
                        <!-- /Logo -->
                        <h4 class="mb-2">Selamat Datang 👋</h4>
                        <p class="mb-4">Silahkan Masukan Data User Anda</p>

                        <form id="formAuthentication" class="mb-3" action="/login" method="POST">
                            @csrf
                            <div class="input-group mb-3">
                                <input type="email" class="rounded @error('email') is-invalid @enderror" id="email"
                                    name="email" required value="{{ old('email') }}" autofocus
                                    placeholder="example@gmail.com" />
                                <label for="email" class="">example@gmail.com</label>
                                @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3 form-password-toggle">
                                <div class="d-flex justify-content-between">
                                    <a href="auth-forgot-password-basic.html">
                                        <small>Lupa Password?</small>
                                    </a>
                                </div>
                                <div class="input-group input-group-merge">
                                    <input type="password" id="password" class="rounded" name="password"
                                        aria-describedby="password" required placeholder="Password" />
                                    <span
                                        class="input-group-text cursor-pointer position-absolute top-50 end-0 translate-middle-y"
                                        style="background: none;border:none;"><i class="bx bx-hide"></i></span>
                                    <label class="" for="password">Password</label>
                                </div>
                            </div>
                            {{-- <div class="mb-3">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="remember-me" />
                    <label class="form-check-label" for="remember-me"> Ingat Saya </label>
                  </div>
                </div> --}}
                            <div class="mb-3">
                                <button class="btn btn-primary d-grid w-100" type="submit">Masuk</button>
                            </div>
                        </form>
                        <p>
                        <div class="mb-3">
                            <a href="../guest">
                                <button class="btn btn-warning d-grid w-100" type="button">Halaman Tamu</button>
                            </a>
                        </div>
                        </p>

                        <p class="text-center">
                            <span>New on our platform?</span>
                            <a href="/register">
                                <span>Buat akun baru</span>
                            </a>
                        </p>
                    </div>
                </div>
                <!-- /Register -->
            </div>
        </div>
    </div>

    <!-- / Content -->
@endsection
