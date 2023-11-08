@extends('layouts.main')

@section('container')

<div 
class="container pt-5 px-5">
    <h2 class="pt-5 fw-bold">Verifikasi Pengajuan KTM</h1>
    <!-- Semua form -->
    <div class="px-0">
        <!-- Form KSM -->
        <div class="py-5">
            <div class="shadow p-0 border border-2 rounded-4 bg-light">
                <!-- Header form -->
                <div class="text-white px-5 pt-3 pb-1 rounded-top-4" style="background-color: #9F0000">
                    <h5 class="fw-bold">KSM - Nama Pemilik Request</h5>
                </div>
                <div class="row p-5">
                    <!-- Foto preview untuk isi file yang di submit -->
                    <div class="col-sm my-auto">
                        <img src="{{ asset('images/ksm-1.jpg') }}" class="img-fluid w-100" alt="Ini KSM">
                        <p class="text-center"><a class="link-opacity-100" href="#">KSM-test.jpg</a></p>
                    </div>
                    <!-- Divider -->
                    <div class="col-sm-1 text-center text-dark my-auto">
                        <div class="vr" style="height: 400px; width:2px"></div>
                    </div>
                    <!-- Form -->
                    <div class="col-sm my-auto">
                        <h3 class="fw-bold">Status</h3>
                        <p id="statusKsm" class="fs-4">Belum disetujui</p>
                        <!-- Text box untuk note -->
                        <div class="p-3 bg-light border border-secondary">
                            <div class="form-group">
                                <label for="noteForm" class="fs-4">Note:</label>
                                <hr class="border border-black"></hr>
                                <textarea class="form-control" id="noteForm" rows="3"></textarea>
                            </div>
                        </div>
                        <!-- Button persetujuan -->
                        <h3 class="fw-bold pt-3">Persetujuan Pengajuan</h3>
                        <a class="nav-link" href="#Doc2">
                            <button type="button" class="shadow-sm btn btn-light btn-lg fw-bold rounded-lg">Tidak disetujui</button>
                            <button type="button" class="shadow-sm btn btn-danger btn-lg fw-bold border rounded-lg">Disetujui</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Form KTM -->
        <div class="py-5"  id="Doc2">
            <div class="shadow p-0 border border-2 rounded-4 bg-light">
                <!-- Header form -->
                <div class="text-white px-5 pt-3 pb-1 rounded-top-4" style="background-color: #9F0000">
                    <h5 class="fw-bold">KTM - Nama Pemilik Request</h5>
                </div>
                <div class="row p-5">
                    <!-- Foto preview untuk isi file yang di submit -->
                    <div class="col-sm my-auto">
                        <img src="{{ asset('images/ktm-1.jpg') }}" class="img-fluid w-100" alt="Ini KSM">
                        <p class="text-center"><a class="link-opacity-100" href="#">KTM-test.jpg</a></p>
                    </div>
                    <!-- Divider -->
                    <div class="col-sm-1 text-center text-dark my-auto">
                        <div class="vr" style="height: 400px; width:2px"></div>
                    </div>
                    <!-- Form -->
                    <div class="col-sm my-auto">
                        <h3 class="fw-bold">Status</h3>
                        <p id="statusKsm" class="fs-4">Belum disetujui</p>
                        <!-- Text box untuk note -->
                        <div class="p-3 bg-light border border-secondary">
                            <div class="form-group">
                                <label for="noteForm" class="fs-4">Note:</label>
                                <hr class="border border-black"></hr>
                                <textarea class="form-control" id="noteForm" rows="3"></textarea>
                            </div>
                        </div>
                        <!-- Button persetujuan -->
                        <h3 class="fw-bold pt-3">Persetujuan Pengajuan</h3>
                        <a class="nav-link" href="#Doc3">
                            <button type="button" class="shadow-sm btn btn-light btn-lg fw-bold rounded-lg">Tidak disetujui</button>
                            <button type="button" class="shadow-sm btn btn-danger btn-lg fw-bold border rounded-lg">Disetujui</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Form Bukti Pembayaran -->
        <div class="py-5"  id="Doc3">
            <div class="shadow p-0 border border-2 rounded-4 bg-light">
                <!-- Header form -->
                <div class="text-white px-5 pt-3 pb-1 rounded-top-4" style="background-color: #9F0000">
                    <h5 class="fw-bold">Bukti Pembayaran - Nama Pemilik Request</h5>
                </div>
                <div class="row p-5">
                    <!-- Foto preview untuk isi file yang di submit -->
                    <div class="col-sm my-auto">
                        <img src="{{ asset('images/bukti-pembayaran-1.jpg') }}" class="img-fluid w-100" alt="Ini KSM">
                        <p class="text-center"><a class="link-opacity-100" href="#">bukti-pembayaran-test.jpg</a></p>
                    </div>
                    <!-- Divider -->
                    <div class="col-sm-1 text-center text-dark my-auto">
                        <div class="vr" style="height: 400px; width:2px"></div>
                    </div>
                    <!-- Form -->
                    <div class="col-sm my-auto">
                        <h3 class="fw-bold">Status</h3>
                        <p id="statusKsm" class="fs-4">Belum disetujui</p>
                        <!-- Text box untuk note -->
                        <div class="p-3 bg-light border border-secondary">
                            <div class="form-group">
                                <label for="noteForm" class="fs-4">Note:</label>
                                <hr class="border border-black"></hr>
                                <textarea class="form-control" id="noteForm" rows="3"></textarea>
                            </div>
                        </div>
                        <!-- Button persetujuan -->
                        <h3 class="fw-bold pt-3">Persetujuan Pengajuan</h3>
                        <a class="nav-link" href="#submitpengajuan">
                            <button type="button" class="shadow-sm btn btn-light btn-lg fw-bold rounded-lg">Tidak disetujui</button>
                            <button type="button" class="shadow-sm btn btn-danger btn-lg fw-bold border rounded-lg">Disetujui</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Selesai verifikasi -->
    <div>
        <hr class="border border-black"></hr>
        <label for="noteForm" class="fs-4 fw-bold">Dengan menekan submit, request akan di update</label>
    </div>
    <div class="pt-3" id="submitpengajuan">
        <a href="/penerimaan-pengajuan-ktm"><button type="button" class="shadow-sm btn btn-danger btn-lg fw-bold border rounded-lg">Submit</button></a>
    </div>
    <div class="py-5"></div>
</div>


@endsection