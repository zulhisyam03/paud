@extends('layouts.main')    
@section('content')

    <!-- Content -->
    @if ($message=session()->has('gagalLogin'))
      <div class="alert alert-danger alert-dismissible fade show text-center fixed-top" role="alert">
        <strong>Maaf!</strong> {{ session()->get('gagalLogin') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif
    @if ($message=session()->has('succes'))
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
                    <img src="{{ asset('assets/img/logoSigi.png') }}" alt="logo Sigi" width="55px" height="55px">
                    <img src="{{ asset('assets/img/logoDinasPendidikan.png') }}" alt="logo Dinas Pendidikan" width="73px" height="55px">
                    <img src="{{ asset('assets/img/logoPaud.png') }}" alt="logo Paud" width="60px" height="55px">
                  </span>
                </a>
              </div>
              <!-- /Logo -->
              <h4 class="mb-2">Selamat Datang 👋</h4>
              <p class="mb-4">Silahkan Masukan Data User Anda</p>

              <form id="formAuthentication" class="mb-3" action="/login" method="POST">
                @csrf
                <div class="mb-3">
                  <label for="email" class="form-label">Email or Username</label>
                  <input
                    type="email"
                    class="form-control @error('email') is-invalid @enderror"
                    id="email"
                    name="email"
                    placeholder="Enter your email or username"
                    required
                    value="{{ old('email') }}"
                    autofocus
                  />
                  @error('email')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
                <div class="mb-3 form-password-toggle">
                  <div class="d-flex justify-content-between">
                    <label class="form-label" for="password">Password</label>
                    <a href="auth-forgot-password-basic.html">
                      <small>Lupa Password?</small>
                    </a>
                  </div>
                  <div class="input-group input-group-merge">
                    <input
                      type="password"
                      id="password"
                      class="form-control"
                      name="password"
                      placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                      aria-describedby="password"
                      required
                    />
                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
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
                  <button class="btn btn-warning d-grid w-100" type="button">Halaman Tamu</button>
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