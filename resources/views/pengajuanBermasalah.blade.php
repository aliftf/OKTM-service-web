@extends('layouts.main')

@section('container')

<div class="px-3 pt-5 px-sm-5">
<div class="pt-5 px-sm-3">

    {{--KTM BERMASALAH--}}
    <div>
        {{-- JUDUL --}}
        <div class="row pb-3">
            <div class="col-12 col-lg-auto ">
                <h2 class="fw-bold">KTM bermasalah |</h1>
            </div>
            <div class="col-12 col-lg-auto">
                <h2 class=" fw-light">Informasi dan Syarat Bagi KTM yang Masih Bermasalah</h1>
            </div>
        </div>
        
        {{-- CONTAINER --}}
        <div class="row">
        <div class="container">
        <div class= "border rounded-4 shadow-sm">
            
            {{-- container header --}}
            <div class="p-2 border text-white rounded-top-4"  style="background-color: #9D0000;">
                <i class="bi bi-info-circle">information</i>
            </div>
    
            {{--content--}}
            <div class="p-4 p-sm-5">
                <div>
                    <h3 class="fw-bold">
                        Ketentuan dapat mengajukan permasalahan
                    </h3>
                    <ul>
                        <li>
                            Terdaftar sebagai mahasiswa yang masih menempuh pendidikan di Telkom University.
                        </li>
                        <li>
                            KTM yang ingin diperbaiki masih ada secara fisik.
                        </li>
                    </ul>
                </div>
    
                <div class="pt-5">
                    <h3 class="fw-bold">
                        Persyaratan Lampiran
                    </h3>
                    <ul>
                        <li>
                            KSM
                        </li>
                        <li>
                            Foto dari KTM
                        </li>
                        <li>
                            Bukti pembayaran
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        </div>
        </div>
    </div>

    {{-- Form Pengajuan perbaikan --}}
    <div class="pt-5">
        {{--JUDUL--}}
        <div class="row pb-3 ">
            <div class="col-12 col-lg-auto ">
                <h2 class="fw-bold">Pengajuan Perbaikan KTM |</h1>
            </div>
            <div class="col-12 col-lg-auto">
                <h2 class=" fw-light">Form Pengajuan Perbaikan</h1>
            </div>
        </div>

        {{--CONTAINER--}}
        <div class="row">
        <div class="container">
        <div class= "border rounded-4 shadow-sm">
            
            {{-- container header --}}
            <div class="p-2 border text-white rounded-top-4"  style="background-color: #9D0000;">
                <i class="bi bi-info-circle">Filing Form</i>
            </div>

            {{--content--}}
            <div class="p-4 p-sm-5">
                <div>
                <form>
                    <div class="form-group row ">
                        <label for="inputNama" class="fw-bold col-lg-2 col-form-label">Nama Mahasiswa</label>
                        <div class="col-lg-5 ">
                            <span class="align-middle text-uppercase">Regy Renanda Rahman<span>
                        </div>
                        <label for="inputNIM" class="fw-bold col-lg-1 col-form-label">NIM</label>
                        <div class="col-lg-4">
                            <span class="align-middle text-uppercase">1302213117<span>
                        </div>
                    </div>
                    <div class="form-group row pt-2">
                        <label for="inputTahun" class="fw-bold col-lg-2 col-form-label">Tahun Ajaran</label>
                        <div class="col-lg-5">
                            <span class="align-middle text-uppercase">2021<span>
                        </div>
                    </div>
                    <div class="form-group row pt-2">
                        <label for="inputProgram" class="fw-bold col-lg-2 col-form-label">Program Study</label>
                        <div class="col-lg-5">
                            <span class="align-middle text-uppercase">S1 Rekayasa Perangkat Lunak<span>
                        </div>
                    </div>
                    <div class="form-group row pt-2">
                        <label for="inputKSM" class="fw-bold col-lg-2 col-form-label">Upload KSM</label>
                        <div class="col-lg-5">
                        <input type="file" class="form-control" id="inputKSM" placeholder="KSM">
                        </div>
                    </div>
                    <div class="form-group row pt-2">
                        <label for="inputKSM" class="fw-bold col-lg-2 col-form-label">Upload KTM</label>
                        <div class="col-lg-5">
                        <input type="file" class="form-control" id="inputKTM" placeholder="KTM">
                        </div>
                    </div>
                    <div class="form-group row pt-2 ">
                        <label for="inputBukti" class="fw-bold col-lg-2 col-form-label">Upload Bukti Pembayaran</label>
                        <div class="col-lg-5">
                            <div class="d-flex justify-content-center">
                            <input type="file" class="form-control" id="inputBukti" placeholder="Bukti">
                            </div>

                        </div>
                    </div>
                    
                    <div class="form-group row pt-5">
                        <div class="col-sm-12 col-lg-8">
                            <div class="d-flex justify-content-end ">
                                <button type="submit" class="btn shadow text-white" style="width:200px ; background-color: #9D0000;">Submit</button>

                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        </div>
        </div>
    </div>
</div>
</div>



</style>

@endsection