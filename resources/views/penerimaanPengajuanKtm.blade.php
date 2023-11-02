@extends('layouts.main')

@section('container')

<div class="container pt-5 px-5">
    <h2 class="pt-5 fw-bold">Verifikasi Pengajuan KTM</h1>
    <div class="py-5 container-auto">
        <div class="shadow p-0 border border-2 rounded-4 bg-light shadow p-0 border border-2 rounded-4 bg-light" style="min-width:600px;">
            <!-- Header tabel -->
            <div class="text-white px-5 pt-3 pb-1 rounded-top-4 col" style="background-color: #9F0000">
                <table class="table-responsive table table-header table text-center table-borderless">
                    <thead class="h5 fw-bold align-middle">
                        <tr>
                            <th class="col w-25">Nama Mahasiswa</th>
                            <th></th>
                            <th class="col w-25">Tanggal Pengajuan</th>
                            <th></th>
                            <th class="col w-25">Jenis Pengajuan</th>
                            <th></th>
                            <th class="col w-25">Progress</th>
                        </tr>
                    </thead>
                </table>
                </div>
                <!-- Isi tabel -->
                <div class="container-auto px-5 py-3">
                    <table class="table table-borderless text-center">
                        <tbody class="fs-5 align-middle">
                            <tr class="table-light">
                                <td class="py-4 w-25">Regy Renanda Rahman</td>
                                <td class="py-4"><div class="vr" style="height: 75px; width:2px"></div></td>
                                <td class="py-4 w-25">01-12-2025</td>
                                <td class="py-4"><div class="vr" style="height: 75px; width:2px"></div></td>
                                <td class="py-4 w-25">Penggantian</td>
                                <td class="py-4"><div class="vr" style="height: 75px; width:2px"></div></td>
                                <td class="py-4 w-25"><button type="button" class="shadow-sm btn btn-danger btn-lg fw-bold border rounded-lg">Process</button></td>
                            </tr>
                            <tr class="table-light">
                                <td class="py-4 w-25">Rahma Sakti Rahardian</td>
                                <td class="py-4"><div class="vr" style="height: 75px; width:2px"></div></td>
                                <td class="py-4 w-25">01-12-2025</td>
                                <td class="py-4"><div class="vr" style="height: 75px; width:2px"></div></td>
                                <td class="py-4 w-25">Penggantian</td>
                                <td class="py-4"><div class="vr" style="height: 75px; width:2px"></div></td>
                                <td class="py-4 w-25"><button type="button" class="shadow-sm btn btn-danger btn-lg fw-bold border rounded-lg">Process</button></td>
                            </tr>
                            <tr class="table-light">
                                <td class="py-4 w-25">Iqro Banyuanto</td>
                                <td class="py-4"><div class="vr" style="height: 75px; width:2px"></div></td>
                                <td class="py-4 w-25">01-12-2025</td>
                                <td class="py-4"><div class="vr" style="height: 75px; width:2px"></div></td>
                                <td class="py-4 w-25">Perbaikan</td>
                                <td class="py-4"><div class="vr" style="height: 75px; width:2px"></div></td>
                                <td class="py-4 w-25"><button type="button" class="shadow-sm btn btn-danger btn-lg fw-bold border rounded-lg">Process</button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="py-5"></div>
    </div>
</div>

@endsection