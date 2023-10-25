@extends('layouts.main')

@section('container')
<div class="d-flex flex-column align-items-center gap-5" style="padding: 9rem 0 4.5rem 0; height: 73.5vh;">
  <h1>Pilih Tipe Pengajuan</h1>
  <div class="d-flex gap-5">
    <a href="#" class="text-decoration-none">
      <div class="btn-card-container btn-custom-ani">
        <div class="btn-card-logo">
          <img src="{{ asset('images/logo-pengajuanKTM.png') }}" style="height: 70px" alt="">
        </div>
        <div class="btn-card-text">
          <p class="text-center text-white mb-0 fw-bold fs-6 py-2">Penggantian KTM</p>
        </div>
      </div>
    </a>
    <a href="#" class="text-decoration-none">
      <div class="btn-card-container btn-custom-ani">
        <div class="btn-card-logo">
          <img src="{{ asset('images/logo-pengajuanKTM.png') }}" style="height: 70px" alt="">
        </div>
        <div class="btn-card-text">
          <p class="text-center text-white mb-0 fw-bold fs-6 py-2">Perbaikan KTM</p>
        </div>
      </div>
    </a>
  </div>

</div>
@endsection