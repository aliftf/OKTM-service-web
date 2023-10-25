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
        <div class= "border rounded-4">
            
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
        <div class="row pb-3">
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
        <div class= "border rounded-4">
            
            {{-- container header --}}
            <div class="p-2 border text-white rounded-top-4 bg-danger">
                <i class="bi bi-info-circle">Filing Form</i>
            </div>

            {{--content--}}
            <div class="p-5">
                <div>
                <form>
                    <div class="form-group row ">
                        <label for="inputEmail3" class="col-lg-2 col-form-label">Email</label>
                        <div class="col-lg-10">
                        <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-group row pt-2">
                        <label for="inputPassword3" class="col-lg-2 col-form-label">Password</label>
                        <div class="col-lg-10">
                        <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                        </div>
                    </div>
                    <fieldset class="form-group pt-2">
                        <div class="row">
                        <legend class="col-form-label col-lg-2 pt-0">Radios</legend>
                        <div class="col-lg-10 pt-2 pt-2">
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                            <label class="form-check-label" for="gridRadios1">
                                First radio
                            </label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                            <label class="form-check-label" for="gridRadios2">
                                Second radio
                            </label>
                            </div>
                            <div class="form-check disabled">
                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3" disabled>
                            <label class="form-check-label" for="gridRadios3">
                                Third disabled radio
                            </label>
                            </div>
                        </div>
                        </div>
                    </fieldset>
                    <div class="form-group row">
                        <div class="col-sm-2">Checkbox</div>
                        <div class="col-sm-10">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck1">
                            <label class="form-check-label" for="gridCheck1">
                            Example checkbox
                            </label>
                        </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Sign in</button>
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