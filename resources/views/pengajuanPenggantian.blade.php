@extends('layouts.main')

@section('container')

<div class="d-flex flex-column justify-content-center align-items-center mt-5 mb-5" style="height:auto;">
    <div class="d-flex flex-column justify-content-center align-items-center mb-5" style="width:190vh">
        <div class="d-flex flex-row">
            <h2 class="text-center m-2" style="font-weight:bold;">Pengajuan Penggantian KTM Baru |</h2>
            <h2 class="text-center m-2" style="font-style:italic; font-weight:lighter;">Informasi dan Syarat Pengajuan Penggantian KTM</h2>
        </div>
        <div class="container">
            <div class="d-lg-flex shadow-lg p-3 bg-danger rounded rounded-bottom-0 text-white">
                <img src="{{ asset('images/info_outline_white_24dp.svg') }}" class="me-2" alt="infomation-icon">
                <h5 class="pt-2" style="font-weight: bold; color: white;">Information</h5>
            </div>
            <div class="d-lg-flex flex-column shadow-lg p-3 ps-5 bg-body-tertiary rounded rounded-top-0">
                <h4 style="font-weight: bold;">Ketentuan Dapat Mengajukan Penggantian KTM</h4>
                    <ul class="ps-4">
                        <li>Terdaftar sebagai mahasiswa yang masih menempuh pendidikan di telkom university</li>
                        <li>KTM yang diperbaiki masih ada secara fisik</li>
                    </ul>
                <h4 style="font-weight: bold;">Persyaratan Lampiran</h4>
                    <ul class="ps-4">
                            <li>KSM</li>
                            <li>Surat Kehilangan Dari Polisi</li>
                            <li>Bukti Pembayaran</li>
                    </ul>
            </div>
        </div>
    </div>
    <div class="d-flex flex-column justify-content-center align-items-center mt-5" style="width:190vh;">
        <div class="d-flex flex-row">
            <h2 class="text-center m-2" style="font-weight:bold;">Pengajuan Penggantian KTM Baru |</h2>
            <h2 class="text-center m-2" style="font-style:italic; font-weight:lighter;">Form Pengajuan Penggantian KTM</h2>
        </div>
        <div class="container">
            <div class="d-lg-flex shadow-lg p-3 bg-danger rounded rounded-bottom-0 text-white">
                <h5 class="pt-2" style="font-weight: bold; color: white;">Filling Form</h5>
            </div>
            <div class="form-group row container shadow-lg p-3 ps-5 bg-body-tertiary rounded rounded-top-0">
                <form action="/Nunggubackend" method="post">
                    <div class="container row">
                        <div class="row  fs-5">
                            <div class="col-3">
                                <p style="font-weight: bold;">Nama Mahasiswa</p>
                            </div>
                            <div class="col-6">
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
                            <div class="col-1">
                                 <p style="font-weight: normal;">:</p>
                            </div>
                            <div class="col-8">
                                <p style="font-weight: normal;">2021</p>
                            </div>
                        </div>
                        <div class="row  fs-5 mb-3">
                            <div class="col-2">
                                <p style="font-weight: normal;">Program Studi</p>
                            </div>
                            <div class="col-1">
                                 <p style="font-weight: normal;">:</p>
                            </div>
                            <div class="col-8">
                                <p style="font-weight: normal;">S1 Rekayasa Perangkat Lunak</p>
                            </div>
                        </div>
                        <div class="row  fs-5  mb-3">
                            <div class="col-2">
                                <p style="font-weight: normal;">Upload KSM</p>
                            </div>
                            <div class="col-1">
                                 <p style="font-weight: normal;">:</p>
                            </div>
                            <div class="col-8">
                                <div class="input-group mb-3 p" style="width:auto">
                                    <input type="file" class="form-control" id="inputGroupFile02">
                                </div>
                            </div>
                        </div>
                        <div class="row  fs-5 mb-3">
                            <div class="col-2">
                                <p style="font-weight: normal;">Upload Surat Kehilangan</p>
                            </div>
                            <div class="col-1">
                                 <p style="font-weight: normal;">:</p>
                            </div>
                            <div class="col-8">
                                <div class="input-group mb-3" style="width:auto">
                                    <input type="file" class="form-control" id="inputGroupFile02">
                                </div>
                            </div>
                        </div>
                        <div class="row  fs-5  mb-3">
                            <div class="col-2">
                                <p style="font-weight: normal;">Upload Bukti Pembayaran</p>
                            </div>
                            <div class="col-1">
                                 <p style="font-weight: normal;">:</p>
                            </div>
                            <div class="col-8">
                                <div class="input-group mb-3" style="width:auto">
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