@extends('layouts.main')

@section('container')
<div class="d-flex flex-column align-items-center justify-content-center" style="padding-top: 3.5rem">
  {{-- start-carousel --}}
  <div id="carouselExampleIndicators" class="carousel slide carousel-fade" style="width: 75%; padding: 2rem 0 2rem 0;" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner" style="height: 500px">
      <div class="carousel-item active">
        <img src="{{ asset('images/home-1.jpg') }}" class="d-block w-100 object-fit-cover border rounded" style="height: 500px" alt="...">
      </div>
      <div class="carousel-item">
        <img src="{{ asset('images/home-2.jpg') }}" class="d-block w-100 object-fit-cover border rounded" style="height: 500px" alt="...">
      </div>
      <div class="carousel-item">
        <img src="{{ asset('images/home-3.jpg') }}" class="d-block w-100 object-fit-cover border rounded" style="height: 500px" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  {{-- end-carousel --}}

  {{-- start-button --}}
  {{-- @auth --}}
  <div class="d-flex gap-sm-2 gap-md-5 ">
    <a href="#" class="text-decoration-none">
      <div class="btn-card-container btn-custom-ani">
        <div class="btn-card-logo">
          <img src="{{ asset('images/logo-pengajuanKTM.png') }}" style="height: 70px" alt="">
        </div>
        <div class="btn-card-text">
          <p class="text-center text-white mb-0 fw-bold fs-6 py-2">Pengajuan KTM</p>
        </div>
      </div>
    </a>
    <a href="#" class="text-decoration-none">
      <div class="btn-card-container btn-custom-ani">
        <div class="btn-card-logo">
          <img src="{{ asset('images/logo-informasi-hasil.png') }}" style="height: 70px" alt="">
        </div>
        <div class="btn-card-text">
          <p class="text-center text-white mb-0 fw-bold fs-6 py-2">Informasi Hasil</p>
        </div>
      </div>
    </a>
    <a href="#" class="text-decoration-none">
      <div class="btn-card-container btn-custom-ani">
        <div class="btn-card-logo">
          <img src="{{ asset('images/logo-ktm-bermasalah.png') }}" style="height: 70px" alt="">
        </div>
        <div class="btn-card-text">
          <p class="text-center text-white mb-0 fw-bold fs-6 py-2">KTM Bermasalah</p>
        </div>
      </div>
    </a>
  </div>
  {{-- @endauth --}}
  {{-- end-button --}}

  {{-- start-login-button --}}
  {{-- @guest --}}
  @auth
  <a href="/login" class="text-decoration-none my-4">
    <button class="home-login-btn btn-custom-ani">
      <span class="fw-bold fs-6">Login</span>
    </button>
  </a>
  @endauth
  {{-- @endguest --}}
  {{-- end-login-button --}}

  {{-- start-about --}}
  <div class="my-5 text-center w-50">
    <h3 class="fw-bold">About</h3>
    <p style="text-align: justify">Website ini menyediakan pelayanan untuk segala kendala terhadap KTM, mulai dari perbaikan, penggantian, dan kendala lainnya.  Proses yang telah disebutkan yang sebelumnya hanya bisa dilakukan dengan secara langsung mendatangi staff sekarang sudah bisa dilakukan secara online melalui website ini. Diharapkan website ini dapat membantu mahasiswa sekalian untuk menggunakan waktu yang dimiliki secara baik.</p>
  </div>
  {{-- end-about --}}

</div>

@endsection