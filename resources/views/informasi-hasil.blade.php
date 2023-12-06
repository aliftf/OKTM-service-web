@extends('layouts.main')

@section('container')
    <div class="bg-hasil hasil-min-height py-5">
        <div class="container">
            <h3 class="fw-bold pb-4 pt-5">Informasi Hasil</h3>
            <div class="d-flex mb-4 gap-4 flex-column flex-sm-row">
                <div class="dropdown">
                    <a class="btn border border-danger dropdown-toggle rounded-3 primary-btn-color fw-bold" href="#" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Filter Jenis Pengajuan
                    </a>

                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Perbaikan KTM</a></li>
                        <li><a class="dropdown-item" href="#">Penggantian KTM</a></li>
                        <li><a class="dropdown-item" href="#">KTM Masih Bermasalah</a></li>
                    </ul>
                </div>
                <div class="dropdown">
                    <a class="btn border border-danger dropdown-toggle rounded-3 primary-btn-color fw-bold" href="#" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Filter Progress
                    </a>

                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Permintaan Diproses</a></li>
                        <li><a class="dropdown-item" href="#">Menunggu Permintaan Disetujui</a></li>
                        <li><a class="dropdown-item" href="#">Permintaan Tidak Disetujui</a></li>
                        <li><a class="dropdown-item" href="#">Selesai</a></li>
                    </ul>
                </div>
            </div>
            <div class="table-responsive mb-4">
                <table class="table table-borderless text-center hasil-table shadow-sm bg-body-tertiary rounded">
                    <thead class="align-middle">
                        <tr>
                            <th>Nama Mahasiswa</th>
                            <th>Tanggal Pengajuan</th>
                            <th>Jenis Pengajuan</th>
                            <th>Progress</th>
                            <th>Note</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="px-0">
                                <div class="border-end border-2 p-4" style="height: 100px;">Regy Renanda Rahman</div>
                            </td>
                            <td class="px-0">
                                <div class="border-end border-2 p-4" style="height: 100px;">01-12-2025</div>
                            </td>
                            <td class="px-0">
                                <div class="border-end border-2 p-4" style="height: 100px;">Penggantian</div>
                            </td>
                            <td class="px-0">
                                <div class="border-end border-2 p-4" style="height: 100px;">Menunggu Permintaan Disetujui</div>
                            </td>
                            <td class="px-0">
                                <div class="p-4">Note1</div>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-0">
                                <div class="border-end border-2 p-4" style="height: 100px;">Regy Renanda Rahman</div>
                            </td>
                            <td class="px-0">
                                <div class="border-end border-2 p-4" style="height: 100px;">12-12-2025</div>
                            </td>
                            <td class="px-0">
                                <div class="border-end border-2 p-4" style="height: 100px;">Perbaikan</div>
                            </td>
                            <td class="px-0">
                                <div class="border-end border-2 p-4" style="height: 100px;">Menunggu Permintaan Disetujui</div>
                            </td>
                            <td class="px-0">
                                <div class="p-4">Note2</div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="d-flex justify-content-end">
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                      <li class="page-item">
                        <a class="page-link primary-text-color" href="#" aria-label="Previous">
                          <span aria-hidden="true">&laquo;</span>
                        </a>
                      </li>
                      <li class="page-item"><a class="page-link primary-text-color" href="#">1</a></li>
                      <li class="page-item"><a class="page-link primary-text-color" href="#">2</a></li>
                      <li class="page-item"><a class="page-link primary-text-color" href="#">3</a></li>
                      <li class="page-item">
                        <a class="page-link primary-text-color" href="#" aria-label="Next">
                          <span aria-hidden="true">&raquo;</span>
                        </a>
                      </li>
                    </ul>
                  </nav>
            </div>
        </div>
    </div>
@endsection
