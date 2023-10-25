@extends('layouts.main')

@section('container')
<div class="bg-pengajuan-perbaikan pt-5 pb-5">
    {{-- Information --}}
    <div class="px-5 mx-5">
        {{-- Title --}}
        <div class="py-4 pt-5">
            <h2 class=" fw-bold align-middle d-inline">Pengajuan Perbaikan KTM |</h2><span class="fs-2 fst-italic ps-3 align-middle">Informasi dan Syarat Pengajuan Perbaikan KTM</span>
        </div>
        {{-- Information Header --}}
        <div class="border border-secondary-subtle rounded-5 pb-3 mb-5 shadow bg-body-tertiary rounded">
            <div class="header-color ps-4 h-25 rounded-top-5">
                <div class="fs-5 fw-bold py-3 px-2">
                    <img src="{{ asset('images/icon-information.png') }}" alt="" width="26">
                    Information
                </div>
            </div>
            {{-- Information Content --}}
            <div class="pt-5 pb-2 px-5 mx-5">
                <div class="fs-4 fw-bold pb-3 mt-1">Ketentuan dapat mengajukan Perbaikan KTM</div>
                <ul class="list-unstyled">
                    <ul>
                        <li class="mb-1">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquam quia praesentium beatae totam veritatis distinctio natus explicabo cumque repellat voluptatem! Temporibus, corrupti? Odit nesciunt itaque illum corrupti architecto a blanditiis.</li>
                        <li class="mb-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium doloribus saepe aut voluptatem numquam obcaecati eius consequuntur, autem dignissimos quidem totam assumenda aspernatur blanditiis minima quas in, labore sint qui.</li>
                        <li class="mb-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat omnis blanditiis tenetur ex animi tempore laborum officiis excepturi nesciunt deserunt, eveniet cupiditate quaerat aliquid incidunt cum sunt, assumenda officia error.</li>
                    </ul>
                </ul>
                <div class="fs-4 fw-bold pb-3 mt-5">Persyaratan Lampiran</div>
                <ul class="list-unstyled">
                    <ul class="mb-5">
                        <li class="mb-1">Kartu Studi Mahasiswa (KSM)</li>
                        <li class="mb-1">Foto Kartu Tanda Mahasiswa (KTM)</li>
                        <li class="mb-1">Bukti Pembayaran</li>
                    </ul>
                </ul>
            </div>
        </div>
    </div>

    {{-- Filing Form --}}
    <div class="px-5 mx-5">
        {{-- Title --}}
        <div class="py-4 pt-5">
            <h3 class="fs-2 fw-bold mb-4 align-middle d-inline">Pengajuan Perbaikan KTM |</h3><span class="fs-2 fst-italic ps-3 align-middle">Form Pengajuan Perbaikan</span>
        </div>
        <div class="border border-secondary-subtle rounded-5 mb-5 shadow bg-body-tertiary rounded">
            {{-- Filing Form Header --}}
            <div class="header-color ps-4 h-25 rounded-top-5">
                <div class="fs-5 fw-bold py-3 px-2">
                    Filing Form
                </div>
            </div>
            {{-- Filing Form Content --}}
            {{-- Data Mahasiswa --}}
            <div class="py-3">
                <div class="mx-5 ps-5 pt-5 row">
                    <div class="col-3 text-left fs-5 fw-bold">
                        Nama Mahasiswa
                    </div>
                    <div class="col-3 text-left fs-5">
                        REGY RENANDA RAHMAN
                    </div>
                    <div class="col-3 text-center fs-5 fw-bold">
                        NIM
                    </div>
                    <div class="col-3 text-left fs-5">
                        0000000000
                    </div>
                </div>
            </div>
            {{-- Form --}}
            <div class="mt-4">
                <form action="" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row px-5 mx-5">
                        <!-- Tahun Ajar -->
                        <div class="w-75 row d-flex justify-content-between align-items-center mb-3 me-2">
                            <div class="col-sm-3 ">
                                <label for="formFile" class="form-label fs-6">Tahun Ajar</label>
                            </div>
                            <div class="col-sm-1">
                                <div class="fs-5">
                                    :
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <input type="text" readonly class="form-control-plaintext" id="tahun_ajar" value="2021">
                            </div>
                        </div>

                        <!-- Program Studi -->
                        <div class="w-75 row d-flex justify-content-between align-items-center mb-3">
                            <div class="col-sm-3">
                                <label for="formFile" class="form-label fs-6">Program Studi</label>
                            </div>
                            <div class="col-sm-1">
                                <div class="fs-5">
                                    :
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <input type="text" readonly class="form-control-plaintext" id="prodi" value="S1 Rekayasa Perangkat Lunak">
                            </div>
                        </div>

                        <!-- Input KSM -->
                        <div class="w-75 row d-flex justify-content-between align-items-center mb-3">
                            <div class="col-sm-3">
                                <label for="formFile" class="form-label fs-6">Upload KSM</label>
                            </div>
                            <div class="col-sm-1">
                                <div class="fs-5">
                                    :
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <input class="form-control" type="file" id="formFile">
                            </div>
                        </div>

                        <!-- Input KTM -->
                        <div class="w-75 row d-flex justify-content-between align-items-center mb-3">
                            <div class="col-sm-3">
                                <label for="formFile" class="form-label fs-6">Upload KTM</label>
                            </div>
                            <div class="col-sm-1">
                                <div class="fs-5">
                                    :
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <input class="form-control" type="file" id="formFile">
                            </div>
                        </div>

                        <!-- Input Pembayaran -->
                        <div class="w-75 row d-flex justify-content-between align-items-center mb-3">
                            <div class="col-sm-3">
                                <label for="formFile" class="form-label fs-6">Upload Bukti Pembayaran</label>
                            </div>
                            <div class="col-sm-1">
                                <div class="fs-5">
                                    :
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <input class="form-control" type="file" id="formFile">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 text-center my-5">
                        <button type="submit" class="btn btn-color px-5 fw-bold border border-danger">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
