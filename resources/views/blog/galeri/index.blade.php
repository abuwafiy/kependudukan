@extends('layouts.profile')
@section('content')
<style type="text/css">
img{
  max-height: 150px;
}
</style>
<section class="panel">
  <header class="panel-heading">
    <div class="panel-actions">
    </div>

    <h2 class="panel-title">Galeri</h2>
  </header>
  <div class="panel-body">
    <section class="content-with-menu-has-toolbar media-gallery">
      <div class="row mg-files" data-sort-destination data-sort-id="media-gallery">
        @foreach($data as $d)
        <div class="isotope-item document col-sm-6 col-md-4 col-lg-3">
          <div class="thumbnail">
            <div class="thumb-preview">
              <a class="thumb-image" href="{{ asset('foto_galeri/'.$d->foto_galeri) }}">
                <img  src="{{ asset('foto_galeri/'.$d->foto_galeri) }}">
              </a>
              <div class="mg-thumb-options">
                <div class="mg-zoom"><i class="fa fa-search"></i></div>
              </div>
            </div>
            <h5 class="mg-title text-weight-semibold">{{ $d->nama_galeri }}</h5>
            <div class="mg-description">
              <small class="pull-left text-muted">{{ $d->foto_galeri }}</small>
              <small class="pull-right text-muted">{{ $d->tanggal_upload }}</small>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </section>
  </div>
</section>
@stop