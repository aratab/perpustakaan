@extends('layouts.main')

@section('content')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Peminjaman</h1>
  </div>

  <div class="table-responsive">
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">NIM</th>
          <th scope="col">Nama</th>
          <th scope="col">Buku Pertama</th>
          <th scope="col">Buku Kedua</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        {{-- @foreach ($allBuku as $buku)
        <tr>
          <td>
            <button type="button" class="btn btn-sm btn-outline-secondary">Delete</button>
          </td>
        </tr>
        @endforeach --}}
      </tbody>
    </table>
  </div>
</main>
@endsection
