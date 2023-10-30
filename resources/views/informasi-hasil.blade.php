@extends('layouts.main')

@section('container')
<div class="bg-hasil hasil-min-height py-5">
    <div class="px-5 mx-5">
        <h3 class="fw-bold pb-4 pt-5">Informasi Hasil</h3>
        <!-- <div class="px-3">
            <div class="row header-color py-2 px-2 h-25 rounded-top-4">
                <div class="col-3 text-center fs-6 fw-bold">
                    Nama Mahasiswa
                </div>
                <div class="col-3 text-center fs-6 fw-bold">
                    Tanggal Pengajuan
                </div>
                <div class="col-3 text-center fs-6 fw-bold">
                    Jenis Pengajuan
                </div>
                <div class="col-3 text-center fs-6 fw-bold">
                    Progress
                </div>
            </div>
        </div>
        <div class="px-1">
            <div class="border border-secondary-subtle rounded-4 rounded-top-0 pb-3 mb-5 px-2 shadow bg-body-tertiary rounded">
                <div class="row py-5 ">
                    <div class="col-3 text-center fs-6 border-end border-secondary">
                        Regy Renanda Rahman
                    </div>
                    <div class="col-3 text-center fs-6 border-end border-secondary">
                        01-12-2025
                    </div>
                    <div class="col-3 text-center fs-6 border-end border-secondary">
                        Penggantian
                    </div>
                    <div class="col-3 text-center fs-6">
                        Menunggu Permintaan Diterima
                    </div>
                </div>
                <div class="row py-3">
                    <div class="col-3 text-center fs-6 border-end border-secondary">
                        Regy Renanda Rahman
                    </div>
                    <div class="col-3 text-center fs-6 border-end border-secondary">
                        01-12-2025
                    </div>
                    <div class="col-3 text-center fs-6 border-end border-secondary">
                        Penggantian
                    </div>
                    <div class="col-3 text-center fs-6">
                        Menunggu Permintaan Diterima
                    </div>
                </div>
            </div>
        </div> -->

        <!-- <table class="custom-table">
            <tr>
                <th>Nama Mahasiswa</th>
                <th>Tanggal Pengajuan</th>
                <th>Jenis Pengajuan</th>
                <th>Progress</th>
            </tr>
            <tr>
                <td>Regy Renanda Rahman</td>
                <td>01-12-2025</td>
                <td>Penggantian</td>
                <td>Menunggu Permintaan Diterima</td>
            </tr>
        </table><br> -->

        <table class="table table-borderless text-center hasil-table shadow bg-body-tertiary rounded">
            <thead>
                <tr>
                    <th>Nama Mahasiswa</th>
                    <th>Tanggal Pengajuan</th>
                    <th>Jenis Pengajuan</th>
                    <th>Progress</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="border-end">Regy Renanda Rahman</td>
                    <td class="border-end">01-12-2025</td>
                    <td class="border-end">Penggantian</td>
                    <td>Menunggu Permintaan Diterima</td>
                </tr>
                <tr>
                    <td class="border-end">Regy Renanda Rahman</td>
                    <td class="border-end">01-12-2025</td>
                    <td class="border-end">Penggantian</td>
                    <td>Menunggu Permintaan Diterima</td>
                </tr>
                <tr>
                    <td class="border-end">Regy Renanda Rahman</td>
                    <td class="border-end">01-12-2025</td>
                    <td class="border-end">Penggantian</td>
                    <td>Menunggu Permintaan Diterima</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
