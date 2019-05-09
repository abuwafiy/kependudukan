@extends('layouts.app')
@section('content')
{!! Form::open(['url' => 'admin/rumah','files'=>true, 'class' => 'form-horizontal']) !!}
<section class="panel">
    <header class="panel-heading">
      <div class="panel-actions">
        {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}

         <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
     </div>

     <h2 class="panel-title">Add Rumah dan Kartu Keluarga</h2>
 </header>
 <div class="panel-body">

    <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">No/Blok</label>
            <div class="col-sm-10">
              <input type="text" name="no_blok" class="form-control">
          </div>
      </div>
      <div class="form-group">
        <label for="inputPassword3" class="col-sm-2 control-label">Alamat</label>
        <div class="col-sm-10">
          <textarea class="form-control" name="alamats"></textarea>
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
      <input type="text" class="form-control" data-inputmask="&quot;mask&quot;: &quot;(999) 999-9999&quot;" data-mask="" name="telp_rumah">
  </div>
</div>
</div>
<div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Status</label>
    <div class="col-sm-10">
      <div class="radio">
        <label>
          <input type="radio" name="status_rumah" id="radio1" value="Isi" checked="">
          Isi
      </label>
  </div>
  <div class="radio">
    <label>
      <input type="radio" name="status_rumah" id="radio2" value="Kosong">
      Kosong
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
    <h5>Form Kartu Keluarga</h5 >
    <div class="row">
        <div class="col-md-12">
          <a style="margin-top: 15px;" href="#" type="button" id="addPeng">
            <i class="fa fa-plus"></i> Tambah Kartu Keluarga
        </a>
        <div id="lis" style="margin-top: 20px"></div>
    </div>
</div>
</div>
</section>
{!! Form::close() !!}
@endsection

