@extends('layouts.main')
@section('content')
    <!-- Content -->

    <div class="animate-bottom container-xxl">
      <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner">
          <!-- Register Card -->
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
              <h4 class="mb-2">Silahkan Registrasi 🚀</h4>
              <p class="mb-4">Permudah Dalam Pelaporan Data Anda!</p>

              <form id="formAuthentication" class="mb-3" action="/register" method="POST">
                @csrf
                <div class="mb-3">
                  <label for="npsn" class="form-label">NPSN</label>
                  <input
                    type="text"
                    class="form-control @error('npsn') is-invalid @enderror text-capitalize"
                    id="npsn"
                    name="npsn"
                    placeholder="NPSN"
                    autofocus
                  />
                  @error('npsn')
                      <div class="feedback-invalid">
                        {{ $message }}
                      </div>
                  @enderror
                </div>
                <div class="mb-3">
                  <label for="username" class="form-label">NAMA SEKOLAH</label>
                  <input
                    type="text"
                    class="form-control @error('name') is-invalid @enderror text-capitalize"
                    id="username"
                    name="name"
                    placeholder="Nama Sekolah"
                    autofocus
                  />
                  @error('name')
                      <div class="feedback-invalid">
                        {{ $message }}
                      </div>
                  @enderror
                </div>
                <div class="mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="example@gmail.com" />
                  @error('email')
                      <div class="feedback-invalid">
                        {{ $message }}
                      </div>
                  @enderror
                </div>
                <div class="mb-3 form-password-toggle">
                  <label class="form-label" for="password">Password</label>
                  <div class="input-group input-group-merge">
                    <input
                      type="password"
                      id="password"
                      class="form-control @error('password') is-invalid @enderror"
                      name="password"
                      placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                      aria-describedby="password"
                    />
                    @error('password')
                      <div class="feedback-invalid">
                        {{ $message }}
                      </div>
                  @enderror
                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                  </div>
                </div>

                <div class="mb-3">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="terms-conditions" name="terms" required/>
                    <label class="form-check-label" for="terms-conditions">
                      I agree to
                      <a href="javascript:void(0);">privacy policy & terms</a>
                    </label>
                  </div>
                </div>
                <button class="btn btn-primary d-grid w-100">Sign up</button>
              </form>

              <p class="text-center">
                <span>Sudah punya akun?</span>
                <a href="/login">
                  <span>Silahkan Login</span>
                </a>
              </p>
            </div>
          </div>
          <!-- Register Card -->
        </div>
      </div>
    </div>

    <!-- / Content -->
@endsection