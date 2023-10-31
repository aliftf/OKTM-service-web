@extends('layouts.main')

@section('container')

<div class="p-5">
<div class="p-5">

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
            <div class="p-2 border text-white rounded-top-4 bg-danger">
                <i class="bi bi-info-circle">information</i>
            </div>
    
            {{--content--}}
            <div class="p-5">
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
            <div class="p-2 border text-white rounded-top-4 bg-danger">
                <i class="bi bi-info-circle">Filing Form</i>
            </div>

            {{--content--}}
            <div class="p-5">
                <div>
                <form>
                    <div class="form-group row ">
                        <label for="inputNama" class="col-lg-2 col-form-label">Nama</label>
                        <div class="col-lg-5">
                        <input type="Text" class="form-control" id="inputNama" placeholder="Nama">
                        </div>
                    </div>
                    <div class="form-group row pt-2">
                        <label for="inputTahun" class="col-lg-2 col-form-label">Tahun Ajaran</label>
                        <div class="col-lg-5">
                        <input type="Text" class="form-control" id="inputTahun" placeholder="Tahun Ajaran">
                        </div>
                    </div>
                    <div class="form-group row pt-2">
                        <label for="inputProgram" class="col-lg-2 col-form-label">Program Study</label>
                        <div class="col-lg-5">
                        <input type="Text" class="form-control" id="inputProgram" placeholder="Program Study">
                        </div>
                    </div>
                    <div class="form-group row pt-2">
                        <label for="inputKSM" class="col-lg-2 col-form-label">Upload KSM</label>
                        <div class="col-lg-5">
                        <input type="file" class="form-control" id="inputKSM" placeholder="KSM">
                        </div>
                    </div>
                    <div class="form-group row pt-2">
                        <label for="inputKSM" class="col-lg-2 col-form-label">Upload KTM</label>
                        <div class="col-lg-5">
                        <input type="file" class="form-control" id="inputKTM" placeholder="KTM">
                        </div>
                    </div>
                    <div class="form-group row pt-2 ">
                        <label for="inputBukti" class="col-lg-2 col-form-label">Upload Bukti Pembayaran</label>
                        <div class="col-lg-5">
                            <div class="d-flex justify-content-center">
                            <input type="file" class="form-control" id="inputBukti" placeholder="Bukti">
                            </div>

                        </div>
                    </div>
                    
                    <div class="form-group row pt-5">
                        <div class="col-sm-12 col-lg-8">
                            <div class="d-flex justify-content-end ">
                                <button type="submit" class="btn btn-danger shadow" style="width:200px">Submit</button>

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

@endsection