@extends('layouts.app')
@section('content')
<style type="text/css">
img{
  max-height: 150px;
}
</style>
<section class="panel">
  <header class="panel-heading">
    <div class="panel-actions">
      <a href="{{url('/admin/galeri/create')}}" class="panel-action"><i class="fa fa-plus"></i> New</a>
      <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
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
                <div class="mg-toolbar">
                  <div class="mg-group pull-left">
                    <a href="{{ asset('foto_galeri/'.$d->foto_galeri) }}"><i class="fa fa-download"> Download</i></a>
                  </div>
                  <div class="mg-group pull-right">
                    {!! Form::open(['method' => 'DELETE', 'style' => 'display:inline', 'data-toggle' => 'tooltip', 'title' => 'Hapus Data' ,'route'=>['galeri.destroy', $d->id_galeri]]) !!}
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i> Delete', ['type' => 'submit','class' => 'btn btn-primary btn-xs delete-confirm']) !!}
                    {!! Form::close() !!}
                  </div>
                </div>
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