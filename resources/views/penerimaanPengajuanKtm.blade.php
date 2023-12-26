@extends('layouts.main')

@section('container')

<div class="container pt-5 px-5">
    <h2 class="pt-5 fw-bold">Verifikasi Pengajuan KTM</h2>
    <!-- Table -->
    <div class="py-5">
        <table class="table-list table-responsive table table-header text-center table-borderless hasil-table shadow">
            <thead class="h5 fw-bold align-middle m">
                <tr>
                    <th class="w-25">Nama Mahasiswa</th>
                    <th class="w-25">Tanggal Pengajuan</th>
                    <th class="w-25">Jenis Pengajuan</th>
                    <th class="w-25">Progress</th>
                </tr>
            </thead>
            <tbody class="fs-5 align-middle">
                @foreach ($result as $data)
                    <tr class="table-light">
                        <td><div class="py-3 px-2 border-end border-3">{{$data->mahasiswa->nama}}</div></td>
                        <td><div class="py-3 px-2 border-end border-3">{{$data->tanggal}}</div></td>
                        <td><div class="py-3 px-2 border-end border-3">{{$data->tipe}}</div></td>
                        <td><div class="py-3 px-2"><a href="/verifikasi-pengajuan-ktm/{{$data->nim}}/edit"><button type="button" class="shadow-sm btn btn-danger btn-lg fw-bold border rounded-lg">Process</button></a></div></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <!-- Pagination -->
        <div class="py-2">
            {{ $result->links() }}
        </div>
    </div>
</div>

@endsection