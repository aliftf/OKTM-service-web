@extends('layouts.main')

@section('container')
{{-- Pengajuan Penggantian --}}
<div class="d-flex flex-column justify-content-center align-items-center mt-5 mb-5" style="height:auto;">
    {{-- Informasi --}}
    <div class="container">
        <div class="d-flex flex-column justify-content-center align-items-start mb-5" style="width:auto;">
            {{-- Judul --}}
            <div class="d-flex flex-wrap ms-3">
                <h2 class="text-center m-2" style="font-weight:bold;">Pengajuan Penggantian KTM Baru |</h2>
                <h2 class="text-center m-2" style="font-style:italic; font-weight:lighter;">Informasi dan Syarat Pengajuan Penggantian KTM</h2>    
            </div>
            {{-- Kotak informasi --}}
            <div class="container">
                {{-- Header --}}
                <div class="d-lg-flex flex-row flex-nowrap justify-content-start align-items-center shadow-lg p-3 rounded rounded-bottom-0 text-white" style="background-color: #9D0000;">
                    <h5 class="pt-2" style="font-weight: bold; color: white;"><span>
                        <img src="{{ asset('images/info_outline_white_24dp.svg') }}" class="mb-1" alt="infomation-icon">
                    </span>Information</h5>
                </div>
                {{-- Deskripsi --}}
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
        </div>
    </div>
    

    {{-- Form pengisian penggantian --}}
    <div class="container">
        <div class="d-flex flex-column justify-content-center align-items-start mt-5 mb-5" style="width:auto;">
            {{-- Judul --}}
            <div class="d-flex flex-wrap ms-3">
                <h2 class="text-center m-2" style="font-weight:bold;">Pengajuan Penggantian KTM Baru |</h2>
                <h2 class="text-center m-2" style="font-style:italic; font-weight:lighter;">Form Pengajuan Penggantian KTM</h2>
            </div>
            {{-- Kotak form --}}
            <div class="container">
                {{-- Header --}}
                <div class="d-lg-flex shadow-lg p-3 rounded rounded-bottom-0 text-white" style="background-color: #9D0000;">
                    <h5 class="pt-2" style="font-weight: bold; color: white;">Filling Form</h5>
                </div>
                {{-- Form pengisian --}}
                <div class="d-lg-flex flex-column shadow-lg p-3 ps-5 bg-body-tertiary rounded rounded-top-0">
                    <form action="/form" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('POST')
                        <input type="text" name="tipe" value="Pengajuan Penggantian KTM" hidden>

                        <div class="container row"> 
                            <div class="row  fs-5">
                                <div class="col-md-3">
                                    <p style="font-weight: bold;">Nama Mahasiswa</p>
                                </div>
                                <div class="col-md-6">
                                    <p style="font-weight: normal;">{{auth()->user()->mahasiswa->nama}}</p>
                                </div>
                                <div class="col-md-1">
                                    <p style="font-weight: bold;">NIM</p>
                                </div>
                                <div class="col-md-2">
                                    <p style="font-weight: normal;">{{auth()->user()->mahasiswa->nim}}</p>
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
                                    <p style="font-weight: normal;">{{auth()->user()->mahasiswa->tahun}}</p>
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
                                    <p style="font-weight: normal;">{{auth()->user()->mahasiswa->prodi}}</p>
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
                                        <input type="file" class="form-control" id="inputGroupFile01" name="ksm" >
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
                                        <input type="file" class="form-control" id="inputGroupFile02" name="surat_kehilangan">
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
                                        <input type="file" class="form-control" id="inputGroupFile03" name="bukti_pembayaran">
                                    </div>
                                </div>
                            </div>
                            <div class="row  fs-5  mb-3">
                                <div class="col text-center">
                                <button type="submit" class="btn fw-bold text-light" style="width:200px; background-color: #9D0000;">Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection