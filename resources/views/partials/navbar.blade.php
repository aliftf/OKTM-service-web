<nav class="navbar navbar-expand-lg fixed-top" style="background-color: #9D0000;" data-bs-theme="dark">
  <div class="container-fluid">
    <span>
			<svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 35 35" fill="none">
				<circle cx="17.5" cy="17.5" r="17.5" fill="white" fill-opacity="0.99"/>
			</svg>
		</span>
    {{-- @auth --}}
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item">
            <a class="nav-link {{ Request::is('/') ? 'active fw-bold' : '' }} text-white" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('pengajuan-ktm') ? 'active fw-bold' : '' }} text-white" href="/pengajuan-ktm">Pengajuan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('hasil') ? 'active fw-bold' : '' }} text-white" href="/hasil">Hasil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('pengajuan-ktm-bermasalah') ? 'active fw-bold' : '' }} text-white" href="/pengajuan-ktm-bermasalah">Masalah</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('verifikasi-pengajuan-ktm') ? 'active fw-bold' : '' }} text-white" href="/verifikasi-pengajuan-ktm">Verifikasi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('finalisasi-pengajuan-ktm') ? 'active fw-bold' : '' }} text-white" href="/finalisasi-pengajuan-ktm">Finalisasi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('list-pengajuan-ktm') ? 'active fw-bold' : '' }} text-white" href="/list-pengajuan-ktm">List</a>
          </li>
        </ul>
        <a href="" class="navbar-text d-flex justify-content-between" style="text-decoration: none;">
          <span class="text-white me-4">Regy Renanda Rahman</span>
          <img src="{{ asset('images/default-profile.png') }}" alt="" width="23">
        </a>
      </div>
    {{-- @endauth --}}
  </div>
</nav>