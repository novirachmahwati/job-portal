@extends('layouts.app')

@section('title', 'Registrasi')

@section('main-navigation', 'main-navigation')
@section('registrasi_active', 'active')

@section('customCSS')
    <link rel="stylesheet" href="{{ asset('style/css/register.css') }}" type="text/css">
@endsection

@section('content')
    <div class="register-photo">
      <div class="form-container">
          <div class="image-holder"></div>
          <form method="post">
              <h2 class="text-center"><strong>Registrasi</strong> Akun Pelamar</h2>
              <div class="form-group"><input class="form-control" type="text" name="fullname" placeholder="Nama lengkap anda"></div>
              <div class="form-group"><input class="form-control" type="email" name="email" placeholder="Email"></div>
              <div class="form-group"><input class="form-control" type="password" name="password" placeholder="Kata sandi"></div>
              <div class="form-group"><input class="form-control" type="password" name="password-repeat" placeholder="Masukkan ulang kata sandi"></div>
              <div class="form-group">
                  <div class="form-check"><label class="form-check-label"><input class="form-check-input" type="checkbox"> Saya setuju dengan <a class="linkColor" href="#">Syarat & Ketentuan</a> yang berlaku</label></div>
              </div>
              <div class="form-group"><button class="btn btn-success btn-block" type="submit">Register</button></div>
              <p class="already">Belum memiliki akun? <a class="linkColor" href="#">Login</a> disini.</p>
            </form>
      </div>
    </div>
@endsection

@section('registrasi-perusahaan')
  @include('layouts.registrasi-perusahaan')
@endsection