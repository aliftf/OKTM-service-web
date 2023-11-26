@extends('layouts.main')

@section('container')
<div class="p-5 mt-5" style="min-height: 70.4vh">
  <div class="d-flex justify-content-between">
    <h1 class="mb-5">List Pengajuan KTM</h1>
    @if (Session::has('success'))
      <div class="alert alert-success h-50" role="alert">
          {{ Session::get('success') }}
          <button type="button" class="btn-close float-end" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @elseif ($errors->any())
      <div class="alert alert-danger h-50">
          {{ $errors->first() }}
          <button type="button" class="btn-close float-end" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif
  </div>
  <div class="d-flex flex-row justify-content-between">
    <button type="button" class="btn btn-danger text-white" data-bs-toggle="modal" data-bs-target="#addModal">
      Tambah
    </button>
    <div class="input-group" style="width: 25%">
      <input type="text" name="search" id="search" placeholder="Search" class="form-control">
      <button class="btn btn-danger" type="button" id="button-addon2">
        <img src="{{ asset('svg/search.svg') }}" alt="">
      </button>
    </div>
  </div>
  <table class="table mt-5">
      <thead class="table-danger">
          <tr>
              <th scope="col">#</th>
              <th scope="col">NIM</th>
              <th scope="col">Tanggal Pengajuan</th>
              <th scope="col">Status</th>
              <th scope="col">Action</th>
          </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>0000000000</td>
          <td>1 Januari 2023</td>
          <td>Belum diproses</td>
          <td>
            <button type="button" class="border-0 badge bg-info" data-bs-toggle="modal" data-bs-target="#viewModal"><img src="{{ asset('svg/eye.svg') }}" alt=""></button>
            <button type="button" class="border-0 badge bg-warning" data-bs-toggle="modal" data-bs-target="#editModal"><img src="{{ asset('svg/pencil-square.svg') }}" alt=""></button>
            <button type="button" class="border-0 badge bg-danger" data-bs-toggle="modal" data-bs-target="#deleteModal"><img src="{{ asset('svg/trash.svg') }}" alt=""></button>
          </td>
        </tr>
      </tbody>
  </table>

  {{-- Start-Add --}}

  <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <form method="POST" action="/list-pengajuan-ktm" enctype="multipart/form-data">
      @csrf
      <div class="modal-content overflow-hidden">
        <div class="nav-overlay"></div>
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="addModalLabel">Tambah Pengajuan KTM</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <label for="addNIM">NIM</label>
          <input type="number" name="addNIM" id="addNIM" placeholder="NIM" class="form-control mb-3 @error('addNIM') is-invalid @enderror" value="{{ old('addNIM') }}">
          @error('addNIM')
              <div class="invalid-feedback">{{ $message }}</div>
          @enderror
  
          <label for="addNama">Nama Lengkap</label>
          <input type="text" name="addNama" id="addNama" placeholder="Nama Lengkap" class="form-control mb-3 @error('addNama') is-invalid @enderror" value="{{ old('addNama') }}">
          @error('addNama')
              <div class="invalid-feedback">{{ $message }}</div>
          @enderror

          <label for="addProdi">Program Studi</label>
          <input type="text" name="addProdi" id="addProdi" placeholder="Program Studi" class="form-control mb-3 @error('addProdi') is-invalid @enderror" value="{{ old('addProdi') }}">
          @error('addProdi')
              <div class="invalid-feedback">{{ $message }}</div>
          @enderror

          <label for="addTahun">Tahun</label>
          <input type="number" name="addTahun" id="addTahun" placeholder="Tahun" class="form-control mb-3 @error('addTahun') is-invalid @enderror" value="{{ old('addTahun') }}">
          @error('addTahun')
              <div class="invalid-feedback">{{ $message }}</div>
          @enderror
  
          <label for="addTipe">Tipe Pengajuan</label>
          <select name="addTipe" id="addTipe" class="form-select mb-3">
            <option selected disabled>Pilih tipe pengajuan</option>
            <option value="1">Pengajuan Penggantian KTM</option>
            <option value="2">Pengajuan Perbaikan KTM</option>
            <option value="3">Pengajuan KTM masih bermasalah</option>
          </select>

          <label for="addStatus">Status Pengajuan</label>
          <select name="addStatus" id="addStatus" class="form-select mb-3">
            <option selected disabled>Pilih status pengajuan</option>
            <option value="1">Belum diproses</option>
            <option value="2">Sedang diproses</option>
            <option value="3">Sudah diproses</option>
          </select>
  
          <label for="addTanggal">Tanggal</label>
          <input type="date" name="addTanggal" id="addTanggal" class="form-control mb-3">

          <label for="addKSM" id="labelAddKSM">Upload Kartu Studi Mahasiswa (KSM)</label>
          <input type="file" name="addKSM" id="addKSM" class="form-control mb-3 @error('addKSM') is-invalid @enderror" value="{{ old('addKSM') }}">
          @error('addKSM')
              <div class="invalid-feedback">{{ $message }}</div>
          @enderror

          <label for="addKTM" id="labelAddKTM">Upload Kartu Tanda Mahasiswa (KTM)</label>
          <input type="file" name="addKTM" id="addKTM" class="form-control mb-3 @error('addKTM') is-invalid @enderror" value="{{ old('addKTM') }}">
          @error('addKTM')
              <div class="invalid-feedback">{{ $message }}</div>
          @enderror

          <label for="addSurat" id="labelAddSurat">Upload Surat Kehilangan Kepolisian</label>
          <input type="file" name="addSurat" id="addSurat" class="form-control mb-3 @error('addSurat') is-invalid @enderror" value="{{ old('addSurat') }}">
          @error('addSurat')
              <div class="invalid-feedback">{{ $message }}</div>
          @enderror

          <label for="addBukti" id="labelAddBukti">Upload Bukti Pembayaran</label>
          <input type="file" name="addBukti" id="addBukti" class="form-control mb-3 @error('addBukti') is-invalid @enderror" value="{{ old('addBukti') }}">
          @error('addBukti')
              <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-danger">Add</button>
        </div>
      </div>
      </form>
    </div>
  </div>
  {{-- End-Add --}}
  

  {{-- Start-View --}}
  <div class="modal fade" id="viewModal" tabindex="-1" aria-labelledby="viewModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content overflow-hidden">
        <div class="nav-overlay"></div>
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="viewModalLabel">Lihat Pengajuan KTM</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <label for="viewNIM">NIM</label>
          <input type="number" name="viewNIM" id="viewNIM" placeholder="NIM" class="form-control mb-3" readonly>
  
          <label for="viewNama">Nama Lengkap</label>
          <input type="text" name="viewNama" id="viewNama" placeholder="Nama Lengkap" class="form-control mb-3" readonly>
  
          <label for="viewTipe">Tipe Pengajuan</label>
          <input type="text" name="viewTipe" id="viewTipe" class="form-control mb-3" value="Tipe pengajuan" readonly>
  
          <label for="viewStatus">Status Pengajuan</label>
          <input type="text" name="viewStatus" id="viewStatus" class="form-control mb-3" value="Status pengajuan" readonly>
  
          <label for="viewTanggal">Tanggal</label>
          <input type="text" name="viewTanggal" id="viewTanggal" class="form-control mb-3" value="1 Januari 2023" readonly>

          <label id="labelViewKSM">Upload Kartu Studi Mahasiswa (KSM)</label>
          <button type="button" class="btn btn-outline-dark d-block mb-3">
            Download
          </button>

          <label for="viewKTM" id="labelViewKTM">Upload Kartu Tanda Mahasiswa (KTM)</label>
          <button type="button" class="btn btn-outline-dark d-block mb-3">
            Download
          </button>

          <label for="viewSurat" id="labelViewSurat">Upload Surat Kehilangan Kepolisian</label>
          <button type="button" class="btn btn-outline-dark d-block mb-3">
            Download
          </button>

          <label for="viewBukti" id="labelViewBukti">Upload Bukti Pembayaran</label>
          <button type="button" class="btn btn-outline-dark d-block">
            Download
          </button>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  {{-- End-View --}}

  {{-- Start-Edit --}}
  <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content overflow-hidden">
        <div class="nav-overlay"></div>
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="editModalLabel">Edit Pengajuan KTM</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="">
            @csrf
            
            <label for="editNIM">NIM</label>
            <input type="number" name="editNIM" id="editNIM" placeholder="NIM" class="form-control mb-3">
    
            <label for="editNama">Nama Lengkap</label>
            <input type="text" name="editNama" id="editNama" placeholder="Nama Lengkap" class="form-control mb-3">
    
            <label for="editTipe">Tipe Pengajuan</label>
            <select name="editTipe" id="editTipe" class="form-select mb-3">
              <option selected disabled>Pilih tipe pengajuan</option>
              <option value="1">Pengajuan Penggantian KTM</option>
              <option value="2">Pengajuan Perbaikan KTM</option>
              <option value="3">Pengajuan KTM masih bermasalah</option>
            </select>

            <label for="editStatus">Status Pengajuan</label>
            <select name="editStatus" id="editStatus" class="form-select mb-3">
              <option selected disabled>Pilih status pengajuan</option>
              <option value="1">Belum diproses</option>
              <option value="2">Sedang diproses</option>
              <option value="3">Sudah diproses</option>
            </select>
    
            <label for="editTanggal">Tanggal</label>
            <input type="date" name="editTanggal" id="editTanggal" class="form-control mb-3">

            <label for="editKSM" id="labelEditKSM">Upload Kartu Studi Mahasiswa (KSM)</label>
            <div class="input-group mb-3">
              <button type="button" class="btn btn-outline-secondary">
                Download
              </button>
              <input type="file" name="editKSM" id="editKSM" class="form-control">
            </div>

            <label for="editKTM" id="labelEditKTM">Upload Kartu Tanda Mahasiswa (KTM)</label>
            <div class="input-group mb-3">
              <button type="button" class="btn btn-outline-secondary">
                Download
              </button>
              <input type="file" name="editKTM" id="editKTM" class="form-control">
            </div>

            <label for="editSurat" id="labelEditSurat">Upload Surat Kehilangan Kepolisian</label>
            <div class="input-group mb-3">
              <button type="button" class="btn btn-outline-secondary">
                Download
              </button>
              <input type="file" name="editSurat" id="editSurat" class="form-control">
            </div>

            <label for="editBukti" id="labelEditBukti">Upload Bukti Pembayaran</label>
            <div class="input-group mb-3">
              <button type="button" class="btn btn-outline-secondary">
                Download
              </button>
              <input type="file" name="editBukti" id="editBukti" class="form-control">
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-danger">Save changes</button>
        </div>
      </div>
    </div>
  </div>
  {{-- End-Edit --}}

  {{-- Start-Delete --}}
  <div class="modal fade" id="deleteModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content overflow-hidden">
        <div class="nav-overlay"></div>
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="deleteModalLabel">Hapus Pengajuan KTM</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <h2 class="fs-5 text-center text-black mb-3">Apakah anda yakin?</h2>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-danger">Delete</button>
        </div>
      </div>
    </div>
  </div>
  {{-- End-Delete --}}
</div>

<script>
  $(document).ready(function() {
    hideAddUpload();

    $('#addTipe').change(function() {
      var selected = $(this).val();

      hideAddUpload();

      if (selected == 1){
        $('#addKSM, #addSurat, #addBukti, #labelAddKSM, #labelAddSurat, #labelAddBukti').show();
      } else if (selected == 2 || selected == 3){
        $('#addKSM, #addKTM, #addBukti, #labelAddKSM, #labelAddKTM, #labelAddBukti').show();
      }

    });

    function hideAddUpload(){
      $('#addKSM, #addKTM, #addSurat, #addBukti, #labelAddKSM, #labelAddKTM, #labelAddSurat, #labelAddBukti').hide();
    }

  });
</script>
@endsection