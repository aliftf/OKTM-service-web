@extends('layouts.main')

@section('container')

<form action="/verifikasi-pengajuan-ktm/{{$form->nim}}" method="post">
    @csrf
    @method('PUT')
    <div class="container pt-5 px-5">
        <h2 class="pt-5 fw-bold">Verifikasi Pengajuan KTM</h2>
        <!-- Semua form -->
        <div class="px-0">
            <!-- Form KSM -->
            <div class="py-5">
                <div class="shadow p-0 border border-2 rounded-4 bg-light">
                    <!-- Header form -->
                    <div class="text-white px-5 pt-3 pb-1 rounded-top-4" style="background-color: #9F0000">
                        <h5 class="fw-bold">KSM - {{$mhs->nama}}</h5>
                    </div>
                    <div class="row p-5">
                        <!-- Foto preview untuk isi file yang di submit -->
                        <div class="col-sm my-auto">
                            <img src="data:{{'image.jpg'}};base64,{{base64_encode($form->ksm)}}" class="img-fluid w-100" alt="Ini KSM">
                        </div>
                        <!-- Form -->
                        <div class="col-sm my-auto border-start border-3 px-5">
                            <h3 class="fw-bold">Status</h3>
                            {{-- Diisi pake java script --}}
                            <p id="ketStatusKsm" class="fs-4"></p>
                            <!-- Text box untuk note -->
                            <div class="p-3 bg-light border border-secondary">
                                <div class="form-group">
                                    <label for="noteForm" class="fs-4">Note:</label>
                                    <hr class="border border-black">
                                    <textarea class="form-control" id="noteForm" name="noteksm" rows="3">{{$form->komen_ksm}}</textarea>
                                </div>
                            </div>
                            <!-- Button persetujuan -->
                            <h3 class="fw-bold pt-3">Persetujuan Pengajuan</h3>
                            <input type="hidden" name="ksmpersetujuan" id="ksm" value="{{$form->status_ksm}}">
                            <button type="button" class="shadow-sm btn btn-light btn-lg fw-bold rounded-lg" onclick="persetujuanKSM(0)">Tidak disetujui</button>
                            <button type="button" class="shadow-sm btn btn-danger btn-lg fw-bold border rounded-lg" onclick="persetujuanKSM(1)">Disetujui</button>
                        </div>
                    </div>
                </div>
            </div>  
            <!-- Form KTM -->
            <div class="py-5"  id="Doc2">
                <div class="shadow p-0 border border-2 rounded-4 bg-light">
                    <!-- Header form -->
                    <div class="text-white px-5 pt-3 pb-1 rounded-top-4" style="background-color: #9F0000">
                        <h5 class="fw-bold">{{$bihead}} - {{$mhs->nama}}</h5>
                    </div>
                    <div class="row p-5">
                        <!-- Foto preview untuk isi file yang di submit -->
                        <div class="col-sm my-auto">
                            <img src="data:{{'image.jpg'}};base64,{{base64_encode($form->ktm)}}" class="img-fluid w-100" alt="Ini KSM">
                        </div>
                        <!-- Form -->
                        <div class="col-sm my-auto border-start border-3 px-5">
                            <h3 class="fw-bold">Status</h3>
                            <p id="ketBiStatus" class="fs-4"></p>
                            <!-- Text box untuk note -->
                            <div class="p-3 bg-light border border-secondary">
                                <div class="form-group">
                                    <label for="noteForm" class="fs-4">Note:</label>
                                    <hr class="border border-black">
                                    <textarea class="form-control" id="noteForm" name="binote" rows="3">{{$bikomen}}</textarea>
                                </div>
                            </div>
                            <!-- Button persetujuan -->
                            <h3 class="fw-bold pt-3">Persetujuan Pengajuan</h3>
                            <input type="hidden" name="bistatus" id="bistatus" value="{{$biStat}}">
                            <button type="button" class="shadow-sm btn btn-light btn-lg fw-bold rounded-lg" onclick="duaPersetujuan(0)">Tidak disetujui</button>
                            <button type="button" class="shadow-sm btn btn-danger btn-lg fw-bold border rounded-lg" onclick="duaPersetujuan(1)">Disetujui</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Form Bukti Pembayaran -->
            <div class="py-5"  id="Doc3">
                <div class="shadow p-0 border border-2 rounded-4 bg-light">
                    <!-- Header form -->
                    <div class="text-white px-5 pt-3 pb-1 rounded-top-4" style="background-color: #9F0000">
                        <h5 class="fw-bold">Bukti Pembayaran - {{$mhs->nama}}</h5>
                    </div>
                    <div class="row p-5">
                        <!-- Foto preview untuk isi file yang di submit -->
                        <div class="col-sm my-auto">
                            <img src="data:{{'image.jpg'}};base64,{{base64_encode($form->bukti_pembayaran)}}" class="img-fluid w-100" alt="Ini KSM">
                        </div>
                        <!-- Form -->
                        <div class="col-sm my-auto border-start border-3 px-5">
                            <h3 class="fw-bold">Status</h3>
                            <p id="ketStatusBukti" class="fs-4"></p>
                            <!-- Text box untuk note -->
                            <div class="p-3 bg-light border border-secondary">
                                <div class="form-group">
                                    <label for="noteForm" class="fs-4">Note:</label>
                                    <hr class="border border-black">
                                    <textarea class="form-control" id="noteForm" name="notebukti" rows="3">{{$form->komen_bukti_pembayaran}}</textarea>
                                </div>
                            </div>
                            <!-- Button persetujuan -->
                            <h3 class="fw-bold pt-3">Persetujuan Pengajuan</h3>
                                <input type="hidden" name="persetujuanbukti" id="bukti" value="{{$form->status_bukti_pembayaran}}">
                                <button type="button" class="shadow-sm btn btn-light btn-lg fw-bold rounded-lg" onclick="persetujuanBukti(0)">Tidak disetujui</button>
                                <button type="button" class="shadow-sm btn btn-danger btn-lg fw-bold border rounded-lg" onclick="persetujuanBukti(1)">Disetujui</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Selesai verifikasi -->
        <div>
            <hr class="border border-black">
            <label for="noteForm" class="fs-4 fw-bold">Dengan menekan submit, request akan di update</label>
        </div>
        <div class="pt-3 pb-5" id="submitpengajuan">
            <button type="submit" class="shadow-sm btn btn-danger btn-lg fw-bold border rounded-lg">Submit</button>
        </div>
    </div>
</form>

<script>
    
    //bagian operasi keterangan status
    
    //Inisiasi variable
    var tipe = '{{$form->tipe}}';
    setuju = 'Disetujui';
    tidak = 'Tidak Disetujui';

    document.getElementById("ketStatusKsm").innerText = tidak;
    document.getElementById("ketBiStatus").innerText = tidak;
    document.getElementById("ketStatusBukti").innerText = tidak;
    
    if({{$form->status_ksm}} == 1){
        document.getElementById("ketStatusKsm").innerText = setuju;
    }
    if({{$form->status_bukti_pembayaran}} == 1){
        document.getElementById("ketStatusBukti").innerText = setuju;
    }
    if('{{$form->tipe}}' == "perbaikan"){
        if({{$form->status_ktm}} == 1){
            document.getElementById("ketBiStatus").innerText = setuju;
        }
    }else{
        if({{$form->status_surat_kehilangan}} == 1){
            document.getElementById("ketBiStatus").innerText = setuju;
        }
    }

    //bagian fungsi button status
    function persetujuanKSM(status) {
        // Mengubah nilai input tersembunyi sesuai dengan tombol yang ditekan
        document.getElementById('ksm').value = status;
        document.getElementById("ketStatusKsm").innerText = tidak;
        if(status == 1){
            document.getElementById("ketStatusKsm").innerText = setuju;
        }
    };
    function duaPersetujuan(status) {
        // Mengubah nilai input tersembunyi sesuai dengan tombol yang ditekan
        document.getElementById('bistatus').value = status;
        document.getElementById("ketBiStatus").innerText = tidak;
        if(status == 1){
            document.getElementById("ketBiStatus").innerText = setuju;
        }
    };
    function persetujuanBukti(status) {
        // Mengubah nilai input tersembunyi sesuai dengan tombol yang ditekan
        document.getElementById('bukti').value = status;
        document.getElementById("ketStatusBukti").innerText = tidak;
        if(status == 1){
            document.getElementById("ketStatusBukti").innerText = setuju;
        }
    };
    
    
</script>
        

@endsection