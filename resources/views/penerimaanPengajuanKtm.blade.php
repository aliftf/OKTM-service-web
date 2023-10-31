@extends('layouts.main')

@section('container')

<div class="container pt-5 px-5">
    <h2 class="pt-5 fw-bold">Verifikasi Pengajuan KTM</h1>
    <div class="py-5">
        <div class="shadow p-0 border border-2 rounded-4 bg-light">
            <!-- Header tabel -->
            <div class="text-white px-5 pt-3 pb-1 rounded-top-4" style="background-color: #9F0000">
                <div class="row text-center">
                    <div class="col-lg-4">
                        <h5 class="fw-bold">Nama Mahasiswa</h5> 
                    </div>
                    <div class="col-lg-3">
                        <h5 class="fw-bold">Tanggal Pengajuan</h5>
                    </div>
                    <div class="col-lg-2">
                        <h5 class="fw-bold">Jenis Pengajuan</h5>
                    </div>
                    <div class="col-lg-3">
                        <h5 class="fw-bold">Progress</h5>
                    </div>
                </div>
            </div>
            <!-- Isi tabel -->
            <div class="container px-5 py-3">
                <table class="table table-borderless text-center">
                    <tbody class="fs-5 align-middle">
                        <tr class="table-light">
                            <td class="py-4">Regy Renanda Rahman</td>
                            <td class="py-4"><div class="vr" style="height: 75px; width:2px"></div></td>
                            <td class="py-4">01-12-2025</td>
                            <td class="py-4"><div class="vr" style="height: 75px; width:2px"></div></td>
                            <td class="py-4">Penggantian</td>
                            <td class="py-4"><div class="vr" style="height: 75px; width:2px"></div></td>
                            <td class="py-4"><button type="button" class="shadow-sm btn btn-danger btn-lg fw-bold border rounded-lg">Process</button></td>
                        </tr>
                        <tr class="table-light">
                            <td class="py-4">Rahma Sakti Rahardian</td>
                            <td class="py-4"><div class="vr" style="height: 75px; width:2px"></div></td>
                            <td class="py-4">01-12-2025</td>
                            <td class="py-4"><div class="vr" style="height: 75px; width:2px"></div></td>
                            <td class="py-4">Penggantian</td>
                            <td class="py-4"><div class="vr" style="height: 75px; width:2px"></div></td>
                            <td class="py-4"><button type="button" class="shadow-sm btn btn-danger btn-lg fw-bold border rounded-lg">Process</button></td>
                        </tr>
                        <tr class="table-light">
                            <td class="py-4">Iqro Banyuanto</td>
                            <td class="py-4"><div class="vr" style="height: 75px; width:2px"></div></td>
                            <td class="py-4">01-12-2025</td>
                            <td class="py-4"><div class="vr" style="height: 75px; width:2px"></div></td>
                            <td class="py-4">Perbaikan</td>
                            <td class="py-4"><div class="vr" style="height: 75px; width:2px"></div></td>
                            <td class="py-4"><button type="button" class="shadow-sm btn btn-danger btn-lg fw-bold border rounded-lg">Process</button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="py-5"></div>
    </div>
</div>

@endsection