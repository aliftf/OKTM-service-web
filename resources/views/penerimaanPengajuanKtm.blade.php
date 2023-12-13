@extends('layouts.main')

@section('container')

<div class="container pt-5 px-5">
    <h2 class="pt-5 fw-bold">Verifikasi Pengajuan KTM</h1>
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
                @foreach($result as $data)
                    <tr class="table-light">
                        <td><div class="py-3 px-2 border-end border-3">{{$data->mahasiswa->nama}}</div></td>
                        <td><div class="py-3 px-2 border-end border-3">{{$data->tanggal}}</div></td>
                        <td><div class="py-3 px-2 border-end border-3">{{$data->tipe}}</div></td>
                        <td><div class="py-3 px-2"><a href="/verifikasi-pengajuan-ktm/{{$data->id}}/edit"><button type="button" class="shadow-sm btn btn-danger btn-lg fw-bold border rounded-lg">Process</button></a></div></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <!-- Pagination -->
        <div class="d-flex justify-content-end py-2">
            <nav aria-label="Page navigation example">
                <ul class="pagination shadow">
                    <li class="page-item">
                        <a class="page-link text-danger" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                    <li class="page-item"><a class="page-link text-danger" href="#">1</a></li>
                    <li class="page-item"><a class="page-link text-danger" href="#">2</a></li>
                    <li class="page-item"><a class="page-link text-danger" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link text-danger" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>

@endsection