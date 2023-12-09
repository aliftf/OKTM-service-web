@extends('layouts.main')

@section('container')
    <div class="bg-hasil hasil-min-height py-5">
        <div class="container">
            <h3 class="fw-bold pb-4 pt-5">Informasi Hasil</h3>
            <div class="d-flex mb-4 gap-4 flex-column flex-sm-row">
                <div class="dropdown">
                    <a class="btn border border-danger dropdown-toggle rounded-3 primary-btn-color fw-bold" href="#"
                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        {{ $tipe }}
                    </a>

                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item filter-option" href="{{ route('informasi-hasil') }}">Hapus Filter Tipe
                                Pengajuan</a></li>
                        <li><a class="dropdown-item filter-option"
                                href="{{ route('informasi-hasil', ['tipe' => 'Pengajuan Perbaikan KTM']) }}">Perbaikan
                                KTM</a></li>
                        <li><a class="dropdown-item filter-option"
                                href="{{ route('informasi-hasil', ['tipe' => 'Pengajuan Penggantian KTM']) }}">Penggantian
                                KTM</a></li>
                        <li><a class="dropdown-item filter-option"
                                href="{{ route('informasi-hasil', ['tipe' => 'Pengajuan KTM Masih Bermasalah']) }}">KTM
                                Masih Bermasalah</a></li>
                    </ul>
                </div>
                <div class="dropdown">
                    <a class="btn border border-danger dropdown-toggle rounded-3 primary-btn-color fw-bold" href="#"
                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        {{ $status }}
                    </a>

                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item filter-option" href="{{ route('informasi-hasil') }}">Hapus Filter
                                Status</a></li>
                        <li><a class="dropdown-item filter-option"
                                href="{{ route('informasi-hasil', ['status' => 'Permintaan Diproses']) }}">Permintaan
                                Diproses</a></li>
                        <li><a class="dropdown-item filter-option"
                                href="{{ route('informasi-hasil', ['status' => 'Menunggu Permintaan Disetujui']) }}">Menunggu
                                Permintaan Disetujui</a></li>
                        <li><a class="dropdown-item filter-option"
                                href="{{ route('informasi-hasil', ['status' => 'Permintaan Tidak Disetujui']) }}">Permintaan
                                Tidak Disetujui</a></li>
                        <li><a class="dropdown-item filter-option"
                                href="{{ route('informasi-hasil', ['status' => 'Selesai']) }}">Selesai</a></li>
                    </ul>
                </div>
            </div>
            <div class="table-responsive mb-4">
                <table class="table table-borderless text-center hasil-table shadow-sm bg-body-tertiary rounded">
                    <thead class="align-middle">
                        <tr>
                            <th>Nama Mahasiswa</th>
                            <th>Tanggal Pengajuan</th>
                            <th>Tipe Pengajuan</th>
                            <th>Status</th>
                            <th>Note</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($forms as $form)
                            <tr>
                                <td class="px-0">
                                    <div class="border-end border-2 p-4" style="height: 100px;">
                                        {{ $form->mahasiswa->nama }}
                                    </div>
                                </td>
                                <td class="px-0">
                                    <div class="border-end border-2 p-4" style="height: 100px;">{{ $form->tanggal }}</div>
                                </td>
                                <td class="px-0">
                                    <div class="border-end border-2 p-4" style="height: 100px;">{{ $form->tipe }}</div>
                                </td>
                                <td class="px-0">
                                    <div class="border-end border-2 p-4" style="height: 100px;">{{ $form->status }}</div>
                                </td>
                                <td class="px-0">
                                    <div class="p-4">{{ $form->komentar }}</div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div>
                {{ $forms->links() }}
            </div>
        </div>
    </div>

    <script>
        // Filter
        document.querySelectorAll('.filter-option').forEach(function(option) {
            option.addEventListener('click', function(event) {
                event.preventDefault();
                window.location.href = this.getAttribute('href');
            });
        });
    </script>
@endsection
