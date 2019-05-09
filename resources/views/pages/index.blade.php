@extends('layouts.app')
@section('content')
<div class="row">
  <div class="col-md-12">
    <section class="panel">
      <header class="panel-heading" style="background-color: ">
        <div class="panel-actions">
        </div>
        <h2 class="panel-title text-center">APLIKASI PENDAFTARAN KEPENDUDUKAN</h2>
      </header>
    </section>
  </div>
  </div>
<div class="row">
  <div class="col-md-4">
    <section class="panel">
      <header class="panel-heading">
        <div class="panel-actions">
          <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
        </div>
        <h2 class="panel-title">Rumah dan Kartu Keluarga</h2>
      </header>
      <a class="hov" href="{{ url('admin/rumah') }}">
        <div class="panel-body">
          <center>
            <img height="190" src="{{ asset('gambar/kelahiran.png') }}">

          </center>
          <div class="col-md-12 text-center"> 
            <h4 class="text-center">Klik tautan ini untuk pendaftaran rumah</h4>
          </div>
          <div class="col-md-12 text-center"> 
            <a href="{{ url('admin/rumah') }}" class="btn btn-primary align-center">SELENGKAPNYA</a>
          </div>
        </div>
      </a>
    </section>
  </div>
  <div class="col-md-4">
    <section class="panel">
      <header class="panel-heading">
        <div class="panel-actions">
          <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
        </div>

        <h2 class="panel-title">Berita</h2>
      </header>
      <a class="hov" href="{{ url('admin/berita') }}">
        <div class="panel-body">
          <center>
            <img height="190"  src="{{ asset('gambar/berita.png') }}">

          </center>
          <div class="col-md-12 text-center"> 
            <h4 class="text-center">Klik tautan ini untuk kelola berita</h4>
          </div>
          <div class="col-md-12 text-center"> 
            <a href="{{ url('admin/berita') }}" class="btn btn-primary align-center">SELENGKAPNYA</a>
          </div>
        </div>
      </a>
    </section>
  </div>
  <div class="col-md-4">
    <section class="panel">
      <header class="panel-heading">
        <div class="panel-actions">
          <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
        </div>

        <h2 class="panel-title">Galeri</h2>
      </header>
      <a class="hov" href="{{ url('admin/galeri') }}">
        <div class="panel-body">
          <center>
            <img height="190" src="{{ asset('gambar/galeri.png') }}">

          </center>
          <div class="col-md-12 text-center"> 
            <h4 class="text-center">Klik tautan ini untuk kelola galeri</h4>
          </div>
          <div class="col-md-12 text-center"> 
            <a href="{{ url('admin/galeri') }}" class="btn btn-primary align-center">SELENGKAPNYA</a>
          </div>
        </div>
      </a>
    </section>
  </div>
</div>

<style type="text/css">
.table-borderless > tbody > tr > td,
.table-borderless > tbody > tr > th,
.table-borderless > tfoot > tr > td,
.table-borderless > tfoot > tr > th,
.table-borderless > thead > tr > td,
.table-borderless > thead > tr > th {
  border: none;
}

.panel-body:hover{
  background-color: #f7f2f2;
}
</style>
@stop