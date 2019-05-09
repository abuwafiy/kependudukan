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
    {!! Form::model($data,['method' => 'PATCH', 'enctype'=>'multipart/form-data', 'class' => 'form-horizontal', 'route'=>['kartuanggota.update',$data->id_kartu]]) !!}
    <div class="form-group">
      <label class="control-label col-md-2">Nama Kartu</label>
      <div class="col-md-6">
        <input type="text" class="form-control" name="nama_kartu" placeholder="Nama Kartu" value="{{ $data->nama_kartu }}">
      </div>
    </div>
    <div class="form-group">
      <div class="col-md-offset-2 col-md-6">
       {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
      
     </div>
   </div>
   {!! Form::close() !!}
 </div>
</section>
@endsection