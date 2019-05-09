@extends('layouts.app')
@section('content')
<section class="panel">
  <header class="panel-heading">
    <div class="panel-actions">
      <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
    </div>

    <h2 class="panel-title">Edit Prestasi</h2>
  </header>
  <div class="panel-body">
    {!! Form::model($data,['method' => 'PATCH', 'enctype'=>'multipart/form-data', 'class' => 'form-horizontal', 'route'=>['prestasi.update',$data->id_prestasi]]) !!}
    <div class="form-group">
      <label class="control-label col-md-2">Nama Kegiatan</label>
      <div class="col-md-6">
        <input type="text" class="form-control" name="nama_kegiatan" placeholder="Nama Kegiatan" value="{{ $data->nama_kegiatan }}">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-md-2">Penyelenggara</label>
      <div class="col-md-6">
        <input type="text" class="form-control" name="penyelenggara" placeholder="Penyelenggara" value="{{ $data->penyelenggara }}">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-md-2">Nama Prestasi</label>
      <div class="col-md-6">
        <input type="text" class="form-control" name="nama_prestasi" placeholder="Nama Prestasi" value="{{ $data->nama_prestasi }}">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-md-2">Skala</label>
      <div class="col-md-6">
        <input type="text" class="form-control" name="skala" placeholder="Skala" value="{{ $data->skala }}">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-md-2">Tanggal</label>
      <div class="col-md-4">
        <input type="date" class="form-control" name="tgl_prestasi" value="{{ $data->tgl_prestasi }}">
      </div>
    </div>
    <div class="form-group">
      <div class="col-md-offset-2 col-md-6">
       {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
       <a href="{{ url('food')}}" class="btn btn-warning">Back</a>
     </div>
   </div>
   {!! Form::close() !!}
 </div>
</section>
@endsection