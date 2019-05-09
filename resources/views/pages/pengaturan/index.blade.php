@extends('layouts.app')
@section('content')
@if (\Session::has('msg'))
    <div class="alert alert-danger">
        <ul>
            <li>{!! \Session::get('msg') !!}</li>
        </ul>
    </div>
@endif
<section class="panel">
  <header class="panel-heading">
    <div class="panel-actions">
      <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
    </div>

    <h2 class="panel-title">Pengaturan</h2>
  </header>
  <div class="panel-body">
    {!! Form::open(['url' => 'admin/pengaturan','files'=>true, 'class' => 'form-horizontal']) !!}
    <div class="form-group">
      <label class="control-label col-md-2">Nama RT</label>
      <div class="col-md-6">
        <input type="text" class="form-control" name="nama_rt" placeholder="Nama RT" value="{{ $data->nama_rt }}">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-md-2">Deskripsi</label>
      <div class="col-md-6">
        <input type="text" class="form-control" name="deskripsi" placeholder="Deskripsi" value="{{ $data->deskripsi }}">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-md-2">Alamat</label>
      <div class="col-md-6">
        <textarea class="form-control" name="alamat">{{ $data->alamat }}</textarea>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-md-2">Email</label>
      <div class="col-md-6">
        <input type="text" class="form-control" name="email" placeholder="Email" value="{{ $data->email }}">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-md-2">Telepon</label>
      <div class="col-md-6">
        <input type="text" class="form-control" name="telepon" placeholder="Telepon" value="{{ $data->telepon }}">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-md-2">Username</label>
      <div class="col-md-6">
        <input type="text" class="form-control" name="username" placeholder="Username" value="{{ $data->username }}">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-md-2">Password</label>
      <div class="col-md-6">
        <input type="password" class="form-control" name="password" placeholder="Password" value="">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-md-2">Ulangi Password</label>
      <div class="col-md-6">
        <input type="password" class="form-control" name="cpassword" placeholder="Ulangi Password" value="">
      </div>
    </div>
    <div class="form-group">
      <div class="col-md-offset-2 col-md-6">
        {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!} &nbsp
      </div>
    </div>
    {!! Form::close() !!}
  </div>
</section>
@stop