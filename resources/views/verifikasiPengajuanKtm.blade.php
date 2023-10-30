@extends('layouts.main')

@section('container')

<div 
class="container pt-5 px-5">
    <h2 class="pt-5 fw-bold">Verifikasi Pengajuan KTM</h1>
    <!-- Semua form -->
    <div class="py-5 px-0">
        <!-- Form KSM -->
        <div class="p-0 border border-2 rounded-4 bg-light">
            <!-- Header form -->
            <div class="bg-danger text-white px-5 pt-3 pb-1 rounded-top-4">
                <h5 class="fw-bold">KSM - Nama Pemilik Request</h5>
            </div>
            <div class="row p-5">
                <!-- Foto preview untuk isi file yang di submit -->
                <div class="col-sm my-auto">
                    <img src="{{ asset('images/ksm-1.jpg') }}" class="img-fluid w-100" alt="Ini KSM">
                    <p class="text-center">ksm-test.jpg</p>
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
                    <button type="button" class="shadow-sm btn btn-light btn-lg fw-bold rounded-lg">Tidak disetujui</button>
                    <button type="button" class="shadow-sm btn btn-danger btn-lg fw-bold border rounded-lg">Disetujui</button>
                </div>
            </div>
        </div>
        <!-- Form KTM -->
        <div class="p-0 border border-2 rounded-4 bg-light">
            <!-- Header form -->
            <div class="bg-danger text-white px-5 pt-3 pb-1 rounded-top-4">
                <h5 class="fw-bold">KTM - Nama Pemilik Request</h5>
            </div>
            <div class="row p-5">
                <!-- Foto preview untuk isi file yang di submit -->
                <div class="col-sm my-auto">
                    <img src="{{ asset('images/ktm-1.jpg') }}" class="img-fluid w-100" alt="Ini KSM">
                    <p class="text-center">ktm-test.jpg</p>
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
                    <button type="button" class="shadow-sm btn btn-light btn-lg fw-bold rounded-lg">Tidak disetujui</button>
                    <button type="button" class="shadow-sm btn btn-danger btn-lg fw-bold border rounded-lg">Disetujui</button>
                </div>
            </div>
        </div>
        <!-- Form Bukti Pembayaran -->
        <div class="p-0 border border-2 rounded-4 bg-light">
            <!-- Header form -->
            <div class="bg-danger text-white px-5 pt-3 pb-1 rounded-top-4">
                <h5 class="fw-bold">Bukti Pembayaran - Nama Pemilik Request</h5>
            </div>
            <div class="row p-5">
                <!-- Foto preview untuk isi file yang di submit -->
                <div class="col-sm my-auto">
                    <img src="{{ asset('images/bukti-pembayaran-1.jpg') }}" class="img-fluid w-100" alt="Ini KSM">
                    <p class="text-center">bukti-pembayaran-test.jpg</p>
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
                    <button type="button" class="shadow-sm btn btn-light btn-lg fw-bold rounded-lg">Tidak disetujui</button>
                    <button type="button" class="shadow-sm btn btn-danger btn-lg fw-bold border rounded-lg">Disetujui</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Selesai verifikasi -->
    <div class="pd-5">
        <hr class="border border-black"></hr>
        <label for="noteForm" class="fs-4 fw-bold">Dengan menekan submit, request akan di update</label>
        <button type="button" class="shadow-sm btn btn-danger btn-lg fw-bold border rounded-lg">Disetujui</button>
    </div>
    <div class="px-5"></div>
</div>


@endsection