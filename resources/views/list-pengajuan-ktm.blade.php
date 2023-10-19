@extends('layouts.main')

@section('container')
<div class="p-5 mt-5" style="min-height: 70.4vh">
  <h1 class="mb-5">List Pengajuan KTM</h1>
  <div class="d-flex flex-row justify-content-between">
    <a href="#addPengajuan" class="text-decoration-none text-white">
      <button type="button" class="btn btn-danger">
        Tambah
      </button>
    </a>
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
            <a href="#viewPengajuan" class="badge bg-info"><img src="{{ asset('svg/eye.svg') }}" alt=""></a>
            <a href="#editPengajuan" class="badge bg-warning"><img src="{{ asset('svg/pencil-square.svg') }}" alt=""></a>
            <a href="#deletePengajuan" class="badge bg-danger"><img src="{{ asset('svg/trash.svg') }}" alt=""></a>
          </td>
        </tr>
      </tbody>
  </table>

  {{-- Start-Add --}}
  <div class="crud-overlay" id="addPengajuan">
    <div class="crud-wrapper">
      <div class="nav-overlay"></div>
      <div class="p-5">
        <div class="row mb-3">
          <div class="col col-9">
            <h4>Tambah Pengajuan KTM</h4>
          </div>
          <div class="col col-lg-3 col-md-4 d-flex justify-content-end">
            <a href="#" class="fs-3 fw-bold text-decoration-none text-black">&times;</a>
          </div>
        </div>
        <div class="crud-content">
          <form action="">
            @csrf
            
            <label for="addNIM">NIM</label>
            <input type="number" name="addNIM" id="addNIM" placeholder="NIM" class="form-control mb-3">
    
            <label for="addNama">Nama Lengkap</label>
            <input type="text" name="addNama" id="addNama" placeholder="Nama Lengkap" class="form-control mb-3">
    
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
            <input type="file" name="addKSM" id="addKSM" class="form-control mb-3">

            <label for="addKTM" id="labelAddKTM">Upload Kartu Tanda Mahasiswa (KTM)</label>
            <input type="file" name="addKTM" id="addKTM" class="form-control mb-3">

            <label for="addSurat" id="labelAddSurat">Upload Surat Kehilangan Kepolisian</label>
            <input type="file" name="addSurat" id="addSurat" class="form-control mb-3">

            <label for="addBukti" id="labelAddBukti">Upload Bukti Pembayaran</label>
            <input type="file" name="addBukti" id="addBukti" class="form-control mb-3">

            <div class="d-flex flex-row-reverse mt-5">
              <button type="button" class="btn btn-danger">
                Tambah
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  {{-- End-Add --}}

  {{-- Start-View --}}
  <div class="crud-overlay" id="viewPengajuan">
    <div class="crud-wrapper">
      <div class="nav-overlay"></div>
      <div class="p-5">
        <div class="row mb-3">
          <div class="col col-9">
            <h4>Lihat Pengajuan KTM</h4>
          </div>
          <div class="col col-lg-3 col-md-4 d-flex justify-content-end">
            <a href="#" class="fs-3 fw-bold text-decoration-none text-black">&times;</a>
          </div>
        </div>
        <div class="crud-content">

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
      </div>
    </div>
  </div>
  {{-- End-View --}}

  {{-- Start-Edit --}}
  <div class="crud-overlay" id="editPengajuan">
    <div class="crud-wrapper">
      <div class="nav-overlay"></div>
      <div class="p-5">
        <div class="row mb-3">
          <div class="col col-9">
            <h4>Edit Pengajuan KTM</h4>
          </div>
          <div class="col col-lg-3 col-md-4 d-flex justify-content-end">
            <a href="#" class="fs-3 fw-bold text-decoration-none text-black">&times;</a>
          </div>
        </div>
        <div class="crud-content">
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

            <div class="d-flex flex-row-reverse mt-5">
              <button type="button" class="btn btn-danger">
                Edit
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  {{-- End-Edit --}}

  {{-- Start-Delete --}}
  <div class="crud-overlay" id="deletePengajuan">
    <div class="crud-wrapper" style="width: 18%">
      <div class="nav-overlay"></div>
      <div class="py-3 px-3">
      <p class="text-center text-black mb-3">Apakah anda yakin?</p>
        <form action="">
          @csrf
          <div class="d-flex flex-row justify-content-between">
            <a href="#" class="btn btn-outline-danger text-decoration-none">
              Cancel
            </a>
            <button type="submit" class="btn btn-danger">Delete</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  {{-- Start-Delete --}}
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