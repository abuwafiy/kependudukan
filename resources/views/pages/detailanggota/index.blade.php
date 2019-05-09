@extends('layouts.app')
@section('content')
{!! Form::model($data,['method' => 'PATCH', 'enctype'=>'multipart/form-data', 'class' => 'form-horizontal', 'route'=>['detailanggota.update',$data->id_rumah]]) !!}
<section class="panel">
  <header class="panel-heading">
    <div class="panel-actions">
      {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!} &nbsp
      <button type="button" onclick="window.location='{{ url('admin/rumah') }}'" class="btn btn-warning">Back</button>
    </div>

    <h2 class="panel-title">Edit Kartu Anggota</h2>
  </header>
  <div class="panel-body">
    <div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <label for="inputPassword3" class="col-sm-2 control-label">No/Blok</label>
          <div class="col-sm-10">
            <input type="hidden" readonly name="id_rumah" class="form-control" value="{{ $data->id_rumah }}">
            <input type="text" readonly name="no_blok" class="form-control" value="{{ $data->no_blok }}">
          </div>
        </div>
        <div class="form-group">
          <label for="inputPassword3" class="col-sm-2 control-label">Alamat</label>
          <div class="col-sm-10">
            <textarea class="form-control" readonly name="alamats">{{ $data->alamat }}</textarea>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <label for="inputPassword3" class="col-sm-2 control-label">Telp</label>
          <div class="col-sm-10">
            <div class="input-group">
              <div class="input-group-addon">
                <i class="fa fa-phone"></i>
              </div>
              <input type="text" class="form-control" data-inputmask="&quot;mask&quot;: &quot;(999) 999-9999&quot;" data-mask="" readonly name="telp_rumah" value="{{ $data->telp_rumah }}">
            </div>
          </div>
        </div>
        <div class="form-group">
          <label for="inputPassword3" class="col-sm-2 control-label">Status</label>
          <div class="col-sm-10">
            <div class="radio">
              <label>
                <input type="radio" name="status_rumah" readonly id="radio1" value="{{ $data->status_rumah }}" checked>
                Isi
              </label>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="panel" id="kk">
 <div class="panel-body">
  <h5>Detail Kartu Anggota</h5 >

  <div class="row">
    <div class="col-md-12">
      @foreach($anggota as $a)
      <div class="checkbox">
        <label><input type="checkbox" name="detail[]" value="{{ $a->id }}" {{ $a->stat }}>{{ $a->nama_kartu }}</label>
      </div>
      @endforeach
    </div>
  </div>
</div>
</section>
{!! Form::close() !!}
@endsection