@extends('layouts.main')

@section('container')

<div class="d-flex flex-column justify-content-center align-items-center" style="height: 150vh;">
    <div class="d-flex flex-column justify-content-center align-items-center mb-5" style="width:500vh">
        <h2 class="text-center m-4" style="font-weight:bold;">Pengajuan Penggantian KTM Baru |<span style="font-style:italic; font-weight:lighter;"> Informasi dan Syarat Pengajuan Penggantian KTM</span></h2>
        <div class="container">
            <div class="d-lg-flex shadow-lg p-3 bg-danger rounded text-white">
                <h5 style="font-weight: bold color: white">(i) Information</h5>
            </div>
            <div class="d-lg-flex flex-column shadow-lg p-3 ps-5 bg-body-tertiary rounded">
                <h4 style="font-weight: bold;">Ketentuan Dapat Mengajukan Penggantian KTM</h4>
                <p>- Terdaftar sebagai mahasiswa yang masih menempuh pendidikan di telkom university<br>
                - Terdaftar sebagai mahasiswa yang masih menempuh pendidikan di telkom university</p>
                <h4 style="font-weight: bold;">Persyaratan Lampiran</h4>
                <p>- KSM<br>
                - Surat Kehilangan Dari Polisi<br>
                - Bukti Pembayaran
                </p>
            </div>
        </div>
    </div>
    <div class="d-flex flex-column justify-content-center align-items-center mt-5 " style="width:500vh">
        <h2 class="text-center m-4" style="font-weight:bold;">Pengajuan Penggantian KTM Baru |<span style="font-style:italic; font-weight:lighter;"> Form Pengajuan Penggantian KTM</span></h2>
        <div class="container">
            <div class="d-lg-flex shadow-lg p-3 bg-danger rounded text-white">
                <h5 style="font-weight: bold color: white">Filling Form</h5>
            </div>
            <div class="d-lg-flex flex-column shadow-lg p-3 ps-5 bg-body-tertiary rounded">
                <form action="" method="post">
                    
                </form>
            </div>
        </div>
    </div>

</div>

@endsection