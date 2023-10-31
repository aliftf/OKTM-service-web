@extends('layouts.main')

@section('container')
<div class="bg-hasil hasil-min-height py-5">
    <div class="px-5 mx-5">
        <h3 class="fw-bold pb-4 pt-5">Informasi Hasil</h3>
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
