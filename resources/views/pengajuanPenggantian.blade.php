@extends('layouts.main')

@section('container')

<div class="d-flex flex-column justify-content-center align-items-center mt-5 mb-5" style="height:auto;">
    <div class="d-flex flex-column justify-content-center align-items-center mb-5" style="width:190vh">
        <h2 class="text-center m-4" style="font-weight:bold;">Pengajuan Penggantian KTM Baru |<span style="font-style:italic; font-weight:lighter;"> Informasi dan Syarat Pengajuan Penggantian KTM</span></h2>
        <div class="container">
            <div class="d-lg-flex shadow-lg p-3 bg-danger rounded text-white">
                <h5 style="font-weight: bold color: white">(i) Information</h5>
            </div>
            <div class="d-lg-flex flex-column shadow-lg p-3 ps-5 bg-body-tertiary rounded">
                <h4 style="font-weight: bold;">Ketentuan Dapat Mengajukan Penggantian KTM</h4>
                <p class="ps-3">- Terdaftar sebagai mahasiswa yang masih menempuh pendidikan di telkom university<br>
                - Terdaftar sebagai mahasiswa yang masih menempuh pendidikan di telkom university</p>
                <h4 style="font-weight: bold;">Persyaratan Lampiran</h4>
                <p class="ps-3">- KSM<br>
                - Surat Kehilangan Dari Polisi<br>
                - Bukti Pembayaran
                </p>
            </div>
        </div>
    </div>
    <div class="d-flex flex-column justify-content-center align-items-center mt-5" style="width:190vh">
        <h2 class="text-center m-4" style="font-weight:bold;">Pengajuan Penggantian KTM Baru |<span style="font-style:italic; font-weight:lighter;"> Form Pengajuan Penggantian KTM</span></h2>
        <div class="container">
            <div class="d-lg-flex shadow-lg p-3 bg-danger rounded text-white">
                <h5 style="font-weight: bold color: white">Filling Form</h5>
            </div>
            <div class="container shadow-lg p-3 ps-5 bg-body-tertiary rounded">
                <form action="/Nunggubackend" method="post">
                    <div class="container row">
                        <div class="row  fs-5">
                            <div class="col-2">
                                <p style="font-weight: bold;">Nama Mahasiswa</p>
                            </div>
                            <div class="col-7">
                                <p style="font-weight: normal;">Iqro Banyuanto</p>
                            </div>
                            <div class="col-1">
                                <p style="font-weight: bold;">NIM</p>
                            </div>
                            <div class="col-2">
                                <p style="font-weight: normal;">1302213061</p>
                            </div>
                        </div>
                        <div class="row  fs-5">
                            <div class="col-2">
                                <p style="font-weight: normal;">Tahun Ajar</p>
                            </div>
                            <div class="col-8">
                                <p style="font-weight: normal;">: <span class="">2021</span></p>
                            </div>
                        </div>
                        <div class="row  fs-5 mb-3">
                            <div class="col-2">
                                <p style="font-weight: normal;">Program Studi</p>
                            </div>
                            <div class="col-8">
                                <p style="font-weight: normal;">: <span class="">S1 Rekayasa Perangkat Lunak</span></p>
                            </div>
                        </div>
                        <div class="row  fs-5  mb-3">
                            <div class="col-2">
                                <p style="font-weight: normal;">Upload KSM</p>
                            </div>
                            <div class="col-8">
                                <div class="input-group mb-3 p" style="width:500px">
                                    <input type="file" class="form-control" id="inputGroupFile02">
                                </div>
                            </div>
                        </div>
                        <div class="row  fs-5 mb-3">
                            <div class="col-2">
                                <p style="font-weight: normal;">Upload Surat Kehilangan</p>
                            </div>
                            <div class="col-8">
                                <div class="input-group mb-3" style="width:500px">
                                    <input type="file" class="form-control" id="inputGroupFile02">
                                </div>
                            </div>
                        </div>
                        <div class="row  fs-5  mb-3">
                            <div class="col-2">
                                <p style="font-weight: normal;">Upload Bukti Pembayaran</p>
                            </div>
                            <div class="col-8">
                                <div class="input-group mb-3" style="width:500px">
                                    <input type="file" class="form-control" id="inputGroupFile02">
                                </div>
                            </div>
                        </div>
                        <div class="row  fs-5  mb-3">
                            <div class="col text-center">
                            <button type="button" class="btn btn-danger fw-bold" style="width:200px">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection