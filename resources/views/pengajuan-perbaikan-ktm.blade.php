@extends('layouts.main')

@section('container')
    <div class="bg-pengajuan-perbaikan pt-5 pb-5">
        {{-- Information --}}
        <div class="container">
            {{-- Title --}}
            <div class="py-4 pt-5">
                <h3 class=" fw-bold align-middle d-inline">Pengajuan Perbaikan KTM |</h3><span
                    class="fs-3 fst-italic ps-3 align-middle">Informasi dan Syarat Pengajuan Perbaikan KTM</span>
            </div>
            {{-- Information Header --}}
            <div class="border border-secondary-subtle rounded-5 mb-5 shadow bg-body-tertiary rounded">
                <div class="box-header-color ps-4 h-25 rounded-top-5">
                    <div class="fs-6 fw-bold py-3 px-2">
                        <img src="{{ asset('images/icon-information.png') }}" alt="" width="22">
                        Information
                    </div>
                </div>
                {{-- Information Content --}}
                <div class="pt-4 mx-4 px-sm-4">
                    <div class="fs-4 fw-bold pb-3 mt-1">Ketentuan dapat mengajukan Perbaikan KTM</div>
                    <ul>
                        <li class="mb-2">Terdaftar sebagai mahasiswa yang masih menempuh pendidikan di Telkom University.
                        </li>
                        <li class="mb-2">KTM yang ingin diperbaiki masih ada secara fisik.</li>
                    </ul>
                    <div class="fs-4 fw-bold mt-5">Persyaratan Lampiran</div>
                    <ul class="mb-5">
                        <li class="mb-2">Kartu Studi Mahasiswa (KSM)</li>
                        <li class="mb-2">Foto Kartu Tanda Mahasiswa (KTM)</li>
                        <li>Bukti Pembayaran</li>
                    </ul>
                </div>
            </div>
        </div>

        {{-- Filing Form --}}
        <div class="container">
            {{-- Title --}}
            <div class="py-4 pt-4">
                <h3 class="fw-bold mb-4 align-middle d-inline">Pengajuan Perbaikan KTM |</h3><span
                    class="fs-3 fst-italic ps-3 align-middle">Form Pengajuan Perbaikan</span>
            </div>
            <div class="border border-secondary-subtle rounded-5 mb-5 shadow bg-body-tertiary rounded">
                {{-- Filing Form Header --}}
                <div class="box-header-color ps-4 h-25 rounded-top-5">
                    <div class="fs-6 fw-bold py-3 px-2">
                        Filing Form
                    </div>
                </div>
                {{-- Filing Form Content --}}
                {{-- Data Mahasiswa --}}
                <div class="container px-0 px-sm-4 pt-sm-4">
                    <div class="mt-1 row px-md-4 mx-4">
                        <div class="col-sm-3 px-md-0 text-left fs-6 fw-bold">
                            Nama Mahasiswa
                        </div>
                        <div class="col-sm-3 text-left fs-6 mb-2">
                            REGY RENANDA RAHMAN
                        </div>
                        <div class="col-sm-3 text-left fs-6 fw-bold">
                            NIM
                        </div>
                        <div class="col-sm-3 text-left fs-6 mb-2">
                            0000000000
                        </div>
                    </div>
                </div>
                {{-- Form --}}
                <div class="container px-0 p-sm-4">
                    <form action="" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="px-3 mx-4 px-md-4">
                            <!-- Tahun Ajar -->
                            <div class="row align-items-center mb-3">
                                <p class="col-4 fs-6">Tahun Ajar</p>
                                <p class="col-1 fs-6">:</p>
                                <p class="col-6 col-sm-7 fs-6">2021</p>
                            </div>

                            <!-- Program Studi -->
                            <div class="row align-items-center mb-3">
                                <p class="col-4 fs-6">Program Studi</p>
                                <p class="col-1 fs-6">:</p>
                                <p class="col-6 col-sm-7 fs-6">S1 Rekayasa Perangkat Lunak</p>
                            </div>

                            <!-- Input KSM -->
                            <div class="row align-items-center mb-3">
                                <label for="ksmFile" class="col-4 form-label fs-6">Upload KSM</label>
                                <p class="col-1 fs-6">:</p>
                                <div class="col-6 col-sm-7">
                                    <input class="form-control" type="file" id="ksmFile">
                                </div>
                            </div>

                            <!-- Input KTM -->
                            <div class="row align-items-center mb-3">
                                <label for="ktmForm" class="col-4 form-label fs-6">Upload KTM</label>
                                <p class="col-1 fs-6">:</p>
                                <div class="col-6 col-sm-7">
                                    <input class="form-control" type="file" id="ktmForm">
                                </div>
                            </div>

                            <!-- Input Pembayaran -->
                            <div class="row align-items-center mb-3">
                                <label for="formFile" class="col-4 form-label fs-6">Upload Bukti Pembayaran</label>
                                <p class="col-1 fs-6">:</p>
                                <div class="col-6 col-sm-7">
                                    <input class="form-control" type="file" id="formFile">
                                </div>
                            </div>
                        </div>
                        <div class="col-12 text-center my-5">
                            <button type="submit"
                                class="btn filing-form-btn-color px-5 fw-bold border border-danger">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
