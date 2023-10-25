@extends('layouts.main')

@section('container')

<div class="mt-5 mb-5 p-5">

    {{-- page header --}}
    <div class="row mb-3">
        <div class="col-12 col-lg-auto">
            <h2 class="fw-bold">KTM bermasalah |</h1>
        </div>
        <div class="col-12 col-lg-auto">
            <h2 class=" fw-light">Informasi dan Syarat Bagi KTM yang Masih Bermasalah</h1>
        </div>
    </div>
    
    {{-- information box --}}
    <div class="row">
        <div class="container">
            <div class= "border rounded">
                
                {{-- container header --}}
                <div class="border p-2 text-white rounded bg-danger">
                    information
                </div>

                {{--content--}}
                <div class="p-5">
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
                    <h3 class="pt-3 fw-bold">
                        Persyaratan Lampiran
                    </h3>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection