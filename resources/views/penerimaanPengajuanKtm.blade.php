@extends('layouts.main')

@section('container')

<div class="container pt-5 px-5">
    <h2 class="py-5 fw-bold">Verifikasi Pengajuan KTM</h2>
    <!-- Table -->
    <div class="pt-2">
        <table id="dataTable" class="table-list table-sortable table-responsive table table-header text-center table-borderless hasil-table shadow">
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
                        <td><div class="py-3 px-2"><a href="/verifikasi-pengajuan-ktm/{{$data->nim}}/edit"><button type="button" class="shadow-sm btn btn-danger btn-lg fw-bold border rounded-lg">Process</button></a></div></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <!-- Pagination -->
        <div class="py-2">
            {{ $result->links() }}
        </div>
    </div>
</div>

<script>
    function sortTableByColumn(table, column, asc = true) {
        const dirModifier = asc ? 1 : -1;
        const tBody = table.tBodies[0];
        const rows = Array.from(tBody.querySelectorAll("tr"));

        const sortedRows = rows.sort((a, b) => {
            const aColText = a.querySelector(`td:nth-child(${column + 1})`).textContent.trim();
            const bColText = b.querySelector(`td:nth-child(${column + 1})`).textContent.trim();
            return aColText > bColText ? (1 * dirModifier) : (-1 * dirModifier);
        });

        while (tBody.firstChild) {
            tBody.removeChild(tBody.firstChild);
        }

        tBody.append(...sortedRows);

        table.querySelectorAll("th").forEach(th => th.classList.remove("th-asc", "th-desc"));
        table.querySelector(`th:nth-child(${column + 1})`).classList.toggle("th-asc", asc);
        table.querySelector(`th:nth-child(${column + 1})`).classList.toggle("th-desc", !asc);
    }

    document.querySelectorAll(".table-sortable th").forEach(headerCell => {
        headerCell.addEventListener("click", () => {
            const tableElement = headerCell.parentElement.parentElement.parentElement;
            const headerIndex = Array.prototype.indexOf.call(headerCell.parentElement.children, headerCell);
            const currentIsAscending = headerCell.classList.contains("th-asc");
            if(headerIndex != 3){
                sortTableByColumn(tableElement, headerIndex, !currentIsAscending);
            }
        });
    });
</script>

@endsection