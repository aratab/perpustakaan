@extends('layouts.main')

@section('content')
<script>document.title = "Dashboard - Perpustakaan"</script>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Dashboard</h1>
  </div>
  <div class="row">
        <div class="row justify-content-left">
        <div class="col-4">
          <div>
            <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="/img/anna.jpg" style="height: 100%; width: 100%; display: block;" src="/img/profile1.png" data-holder-rendered="true">
          </div>
        </div>
        <div class="col">
                <h3 class="h2 mb-0"><b>Selamat Datang {{$nama}}</b></h3>
                <br>
                <span class="text-primary"><b>Nim :</b> {{ $nim }}</span>
                <br>
                <ul class="list-unstyled mb-4">
                <li><b>Email :</b> {{ $email }} </li>
                <li><b>No Telepon :</b> {{ $no_telp }} </li>
                <li><b>Kota :</b> {{ $kota }} </li>
                <li><b>Alamat :</b></li>
                <a>{{ $alamat }}</a>
                </ul>
        </div>
    </div>
  <div class="table-responsive">
    <table class="table table-striped table-sm">
      <!-- Isi di sini -->
    </table>
  </div>
</main>
@endsection
