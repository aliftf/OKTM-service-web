@extends('layouts.main')

@section('container')

<div class="container pt-5 px-5">
    <h2 class="pt-5 fw-bold">Finalisasi</h2>
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
                        <td><div class="py-3 px-2"><button type="button" class="shadow-sm btn btn-danger btn-lg fw-bold border rounded-lg" data-bs-toggle="modal" data-bs-target="#verifModal">Done</button></div></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <!-- Pagination -->
        <div class="py-2">
            {{ $result->links() }}
        </div>
    </div>
    <!-- Pop up verification box -->
    <div class="modal fade" id="verifModal" tabindex="-1" aria-labelledby="verifModalLabel" aria-hidden="true">
        <form action="/finalisasi/{{$data->id}}" method="post">
            @csrf
            @method('put')
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header header-popup">
                        <h4 class="modal-title fw-bold">Akhiri Permintaan</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <h5 class="pt-3">Apakah anda yakin untuk mengakhiri permintaan KTM ini?</h5>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light button_popup shadow-sm" data-bs-dismiss="modal">Tidak</button>
                        <button type="submit" class="btn btn-danger button_popup shadow-sm">Iya</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection