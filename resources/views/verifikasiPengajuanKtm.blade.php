@extends('layouts.main')

@section('container')

<div 
class="container pt-5 px-5">
    <h2 class="pt-5 font-weight-bold">Verifikasi Pengajuan KTM</h1>
    <div 
    class="container py-5 px-0">
        <div class="container p-0 border rounded-4 bg-light">
            <div class="container bg-danger text-white px-5 pt-3 pb-1 rounded-top-4">
                <p style="font-weight:bold">KSM - Nama Pemilik Request</p>
            </div>
            <div class="row p-5">
                <div class="col-sm">
                    <img src="{{ asset('images/ksm-1.jpg') }}" class="img-fluid w-100" alt="Ini KSM">
                </div>
                <div class="col-sm">Data</div>
            </div>
        </div>
    </div>
</div>


@endsection