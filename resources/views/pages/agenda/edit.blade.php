@extends('layouts.app')
@section('content')
<section class="panel">
  <header class="panel-heading">
    <div class="panel-actions">
      <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
    </div>

    <h2 class="panel-title">Add Berita</h2>
  </header>
  <div class="panel-body">
    {!! Form::model($data,['method' => 'PATCH', 'enctype'=>'multipart/form-data', 'class' => 'form-horizontal', 'route'=>['agenda.update',$data->id_agenda]]) !!}
    <div class="form-group">
      <label class="control-label col-md-2">Nama Agenda</label>
      <div class="col-md-10">
        <input type="text" class="form-control" name="nama_agenda" placeholder="Nama Agenda" value="{{ $data->nama_agenda }}">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-md-2">Tanggal</label>
      <div class="col-md-4">
        <input type="date" class="form-control" name="tgl_agenda" value="{{ $data->tgl_agenda }}">
      </div>
    </div>

    <div class="form-group">
      <label class="col-md-2 control-label">Mulai</label>
      <div class="col-md-3">
        <div class="input-group">
          <span class="input-group-addon">
            <i class="fa fa-clock-o"></i>
          </span>
          <input type="text" name="mulai" data-plugin-timepicker class="form-control" value="{{ $data->mulai }}" data-plugin-options='{ "showMeridian": false }'>
        </div>
      </div>
    </div>
    <div class="form-group">
      <label class="col-md-2 control-label">Selesai</label>
      <div class="col-md-3">
        <div class="input-group">
          <span class="input-group-addon">
            <i class="fa fa-clock-o"></i>
          </span>
          <input type="text" name="selesai" data-plugin-timepicker class="form-control" data-plugin-options='{ "showMeridian": false }' value="{{ $data->selesai }}">
        </div>
      </div>
    </div>
    <div class="form-group">
     <label class="control-label col-md-2">Isi Agenda</label>
     <div class="col-md-10">
      <textarea cols="20" class="summernote" name="isi_agenda" data-plugin-summernote data-plugin-options='{ "height": 200, "codemirror": { "theme": "ambiance" } }'>{{ $data->isi_agenda }}</textarea>                                                
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