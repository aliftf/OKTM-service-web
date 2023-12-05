@extends('layouts.main')

@section('container')
<div class="p-5 mt-5 position-relative" style="min-height: 93.8vh">

  {{-- Start-List --}}
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
    <div class="d-flex gap-3">
      <button type="button" class="btn primary-btn-color fw-bold" data-bs-toggle="modal" data-bs-target="#addModal">
        Tambah
      </button>
      <div class="dropdown">
        <a class="btn primary-btn-color dropdown-toggle fw-bold" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Filter Jenis Pengajuan
        </a>
        <ul class="dropdown-menu primary-border-color">
          <li><a class="dropdown-item" href="#">Perbaikan KTM</a></li>
          <li><a class="dropdown-item" href="#">Penggantian KTM</a></li>
          <li><a class="dropdown-item" href="#">KTM Masih Bermasalah</a></li>
        </ul>
      </div>
      
      <div class="dropdown">
        <a class="btn primary-btn-color dropdown-toggle fw-bold" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Filter Status
        </a>
        <ul class="dropdown-menu primary-border-color">
          <li><a class="dropdown-item" href="#">Permintaan Diproses</a></li>
          <li><a class="dropdown-item" href="#">Menunggu Permintaan Disetujui</a></li>
          <li><a class="dropdown-item" href="#">Permintaan Tidak Disetujui</a></li>
          <li><a class="dropdown-item" href="#">Selesai</a></li>
        </ul>
      </div>
    </div>
    <div class="input-group w-25">
      <input type="text" name="search" id="search" placeholder="Search" class="form-control">
      <button class="btn primary-btn-color" type="button" id="button-addon2">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-search" viewBox="0 0 16 16">
          <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
        </svg>
      </button>
    </div>
  </div>
  <table class="table mt-5 table-sortable">
      <thead class="table-danger">
          <tr>
              <th scope="col">#</th>
              <th scope="col">NIM</th>
              <th scope="col">Nama</th>
              <th scope="col">Tanggal Pengajuan</th>
              <th scope="col">Tipe</th>
              <th scope="col">Status</th>
              <th scope="col">Action</th>
          </tr>
      </thead>
      <tbody>
        @foreach ($forms as $form)
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $form->mahasiswa->nim }}</td>
            <td>{{ $form->mahasiswa->nama }}</td>
            <td>{{ $form->formatted_updated_at }}</td>
            <td>{{ $form->tipe }}</td>
            <td>{{ $form->status }}</td>
            <td>
              <button type="button" class="border-0 badge bg-info view-btn" data-bs-toggle="modal" data-bs-target="#viewModal" data-nim="{{ $form->nim }}"><img src="{{ asset('svg/eye.svg') }}" alt=""></button>
              <button type="button" class="border-0 badge bg-warning edit-btn" data-bs-toggle="modal" data-bs-target="#editModal" data-nim="{{ $form->nim }}"><img src="{{ asset('svg/pencil-square.svg') }}" alt=""></button>
              <button type="button" class="border-0 badge bg-danger" data-bs-toggle="modal" data-bs-target="#deleteModal"><img src="{{ asset('svg/trash.svg') }}" alt=""></button>
            </td>
          </tr>
        @endforeach
      </tbody>
  </table>

  <div class="d-flex position-absolute" style="right: 3rem; bottom: 3rem;">
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
  {{-- End-List --}}

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
            <option value="Pengajuan Penggantian KTM">Pengajuan Penggantian KTM</option>
            <option value="Pengajuan Perbaikan KTM">Pengajuan Perbaikan KTM</option>
            <option value="Pengajuan KTM Masih Bermasalah">Pengajuan KTM Masih Bermasalah</option>
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
            <button type="submit" class="btn primary-btn-color fw-bold">Tambah</button>
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
          <button id="viewKSM" type="button" class="btn btn-outline-dark mb-3" style="display: block;">Download</button>

          <label id="labelViewKTM">Upload Kartu Tanda Mahasiswa (KTM)</label>
          <button type="button" id="viewKTM" class="btn btn-outline-dark mb-3" style="display: block;">
            Download
          </button>

          <label id="labelViewSurat">Upload Surat Kehilangan Kepolisian</label>
          <button type="button" id="viewSurat" class="btn btn-outline-dark mb-3" style="display: block;">
            Download
          </button>

          <label id="labelViewBukti">Upload Bukti Pembayaran</label>
          <button type="button" id="viewBukti" class="btn btn-outline-dark" style="display: block;">
            Download
          </button>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn primary-btn-color fw-bold" data-bs-dismiss="modal">Close</button>
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
              <option value="Pengajuan Penggantian KTM">Pengajuan Penggantian KTM</option>
              <option value="Pengajuan Perbaikan KTM">Pengajuan Perbaikan KTM</option>
              <option value="Pengajuan KTM Masih Bermasalah">Pengajuan KTM Masih Bermasalah</option>
            </select>

            <label for="editStatus">Status Pengajuan</label>
            <select name="editStatus" id="editStatus" class="form-select mb-3">
              <option selected disabled>Pilih status pengajuan</option>
              <option value="Menunggu Permintaan Disetujui">Menunggu Permintaan Disetujui</option>
              <option value="Permintaan Diproses">Permintaan Diproses</option>
              <option value="Permintaan Ditolak">Permintaan Ditolak</option>
              <option value="Selesai">Selesai</option>
            </select>
    
            <label for="editTanggal">Tanggal</label>
            <input type="date" name="editTanggal" id="editTanggal" class="form-control mb-3">

            <label for="editKSM" id="labelEditKSM">Upload Kartu Studi Mahasiswa (KSM)</label>
            <div class="input-group mb-3" id="divKSM">
              <button type="button" class="btn btn-outline-secondary" id="editDownloadKSM">
                Download
              </button>
              <input type="file" name="editKSM" id="editKSM" class="form-control">
            </div>

            <label for="editKTM" id="labelEditKTM">Upload Kartu Tanda Mahasiswa (KTM)</label>
            <div class="input-group mb-3" id="divKTM">
              <button type="button" class="btn btn-outline-secondary" id="editDownloadKTM">
                Download
              </button>
              <input type="file" name="editKTM" id="editKTM" class="form-control">
            </div>

            <label for="editSurat" id="labelEditSurat">Upload Surat Kehilangan Kepolisian</label>
            <div class="input-group mb-3" id="divSurat">
              <button type="button" class="btn btn-outline-secondary" id="editDownloadSurat">
                Download
              </button>
              <input type="file" name="editSurat" id="editSurat" class="form-control">
            </div>

            <label for="editBukti" id="labelEditBukti">Upload Bukti Pembayaran</label>
            <div class="input-group mb-3" id="divBukti">
              <button type="button" class="btn btn-outline-secondary" id="editDownloadBukti">
                Download
              </button>
              <input type="file" name="editBukti" id="editBukti" class="form-control">
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn secondary-btn-color" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn primary-btn-color">Save changes</button>
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
          <button type="button" class="btn secondary-btn-color fw-bold" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn primary-btn-color fw-bold">Delete</button>
        </div>
      </div>
    </div>
  </div>
  {{-- End-Delete --}}
</div>

<script>

  // Parse date string to Date object
  function parseDate(dateString) {
    const [day, month, year] = dateString.split(' ');
    const monthIndex = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'].indexOf(month);

    return new Date(`${year}-${monthIndex + 1}-${day}`);
  }

  // Sort table by column
  function sortTableByColumn(table, column, asc = true) {
    const dirModifier = asc ? 1 : -1;
    const tBody = table.tBodies[0];
    const rows = Array.from(tBody.querySelectorAll("tr"));

    // Sort each row
    const sortedRows = rows.sort((a, b) => {
      const aColText = a.querySelector(`td:nth-child(${column + 1})`).textContent.trim();
      const bColText = b.querySelector(`td:nth-child(${column + 1})`).textContent.trim();

      const aDate = parseDate(aColText);
      const bDate = parseDate(bColText);

      if (column == 2){
        return aDate > bDate ? (1 * dirModifier) : (-1 * dirModifier);
      } else {
        return aColText > bColText ? (1 * dirModifier) : (-1 * dirModifier);
      }
    });
 
    // Remove all existing TRs from the table
    while (tBody.firstChild) {
      tBody.removeChild(tBody.firstChild);
    }

    // Re-add the newly sorted rows
    tBody.append(...sortedRows);

    // Remember how the column is currently sorted
    table.querySelectorAll("th").forEach(th => th.classList.remove("th-sort-asc", "th-sort-desc"));
    table.querySelector(`th:nth-child(${column + 1})`).classList.toggle("th-sort-asc", asc);
    table.querySelector(`th:nth-child(${column + 1})`).classList.toggle("th-sort-desc", !asc);
  }

  // Add event listener for table header
  document.querySelectorAll(".table-sortable th").forEach(headerCell => {
    headerCell.addEventListener("click", () => {
      const tableElement = headerCell.parentElement.parentElement.parentElement;
      const headerIndex = Array.prototype.indexOf.call(headerCell.parentElement.children, headerCell);
      const currentIsAscending = headerCell.classList.contains("th-sort-asc");
      
      if(headerIndex != 4){
        sortTableByColumn(tableElement, headerIndex, !currentIsAscending);
      }

    });
  });

  // Load data to view modal
  document.addEventListener('DOMContentLoaded', function () {
    const viewButtons = document.querySelectorAll('.view-btn');
    const editButtons = document.querySelectorAll('.edit-btn');

    viewButtons.forEach(function (button) {
      button.addEventListener('click', function () {
        const nim = button.getAttribute('data-nim');

        fetch(`/list-pengajuan-ktm/${nim}`)
          .then(response => {
            if (!response.ok) {
              throw new Error(`HTTP error! Status: ${response.status}`);
            }
            return response.json();
          })
          .then(data => {
            document.getElementById('viewNIM').value = nim;
            document.getElementById('viewNama').value = data.nama;
            document.getElementById('viewTipe').value = data.tipe;
            document.getElementById('viewStatus').value = data.status;
            document.getElementById('viewTanggal').value = data.tanggal_format;

            $('#viewKTM, #labelViewKTM, #viewSurat, #labelViewSurat').show();

            if (data.tipe == "Pengajuan Penggantian KTM"){
              $('#viewKTM, #labelViewKTM').hide();
            } else if (data.tipe == "Pengajuan Perbaikan KTM" || data.tipe == "Pengajuan KTM Masih Bermasalah"){
              $('#viewSurat, #labelViewSurat').hide();
            }

          })
          .catch(error => console.error('Error fetching data:', error));
      });
    });

    editButtons.forEach(function (button) {
      button.addEventListener('click', function () {
        const nim = button.getAttribute('data-nim');

        fetch(`/list-pengajuan-ktm/${nim}`)
          .then(response => {
            if (!response.ok) {
              throw new Error(`HTTP error! Status: ${response.status}`);
            }
            return response.json();
          })
          .then(data => {
            document.getElementById('editNIM').value = nim;
            document.getElementById('editNama').value = data.nama;
            document.getElementById('editTanggal').value = data.tanggal.substring(0, 10);

            var editTipeSelect = document.getElementById('editTipe');
            for (var i = 0; i < editTipeSelect.options.length; i++) {
              if (editTipeSelect.options[i].value == data.tipe) {
                editTipeSelect.options[i].selected = true;
                break;
              }
            }

            var editStatusSelect = document.getElementById('editStatus');
            for (var i = 0; i < editStatusSelect.options.length; i++) {
              if (editStatusSelect.options[i].value == data.status) {
                editStatusSelect.options[i].selected = true;
                break;
              }
            }

            $('#editKTM, #labelEditKTM, #divKTM, #editSurat, #labelEditSurat, #divSurat').show();

            if (data.tipe == "Pengajuan Penggantian KTM"){
              $('#editKTM, #labelEditKTM, #divKTM').hide();
            } else if (data.tipe == "Pengajuan Perbaikan KTM" || data.tipe == "Pengajuan KTM Masih Bermasalah"){
              $('#editSurat, #labelEditSurat, #divSurat').hide();
            }

          })
          .catch(error => console.error('Error fetching data:', error));
      });
    });
  });

  $(document).ready(function() {
    hideAddUpload();

    $('#addTipe').change(function() {
      var selected = $(this).val();

      hideAddUpload();

      if (selected == "Pengajuan Penggantian KTM"){
        $('#addKSM, #addSurat, #addBukti, #labelAddKSM, #labelAddSurat, #labelAddBukti').show();
      } else if (selected == "Pengajuan Perbaikan KTM" || selected == "Pengajuan KTM Masih Bermasalah"){
        $('#addKSM, #addKTM, #addBukti, #labelAddKSM, #labelAddKTM, #labelAddBukti').show();
      }

    });



    function hideAddUpload(){
      $('#addKSM, #addKTM, #addSurat, #addBukti, #labelAddKSM, #labelAddKTM, #labelAddSurat, #labelAddBukti').hide();
    }

  });
  

</script>
@endsection