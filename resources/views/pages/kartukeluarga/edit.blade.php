@extends('layouts.app')
@section('content')
@foreach($data as $d)
{!! Form::model($data,['method' => 'PATCH', 'enctype'=>'multipart/form-data', 'class' => 'form-horizontal', 'route'=>['kartukeluarga.update',$d->nik]]) !!}
<section class="panel">
        <header class="panel-heading">
          <div class="panel-actions">
            {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
            <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
          </div>

          <h2 class="panel-title">Edit Data Anggota Keluarga</h2>
        </header>
        <div class="panel-body">
    <div class="row">
    <div class="col-md-6">
      <div class="form-group">
        <label for="inputPassword3" class="col-sm-2 control-label">NIK</label>
        <div class="col-sm-10">
          <input type="number" name="nik" class="form-control" readonly value="{{ $d->nik }}">
          <input type="hidden" name="no_kk" class="form-control" readonly value="{{ $d->no_kk }}">
        </div>
      </div>
      <div class="form-group">
        <label for="inputPassword3" class="col-sm-2 control-label">Nama Lengkap</label>
        <div class="col-sm-10">
          <input type="text" name="nama_lengkap" class="form-control" value="{{ $d->nama_lengkap }}">
        </div>
      </div>
      <div class="form-group">
        <label for="inputPassword3" class="col-sm-2 control-label">Jenis Kelamin</label>
        <div class="col-sm-10">
          <div class="radio">
            <label>
              <input type="radio" name="jkel" value="Laki-Laki" @if($d->jkel=='Laki-Laki') checked @endif>
              Laki-Laki
            </label>
          </div>
          <div class="radio">
            <label>
              <input type="radio" name="jkel" value="Perempuan" @if($d->jkel=='Perempuan') checked @endif>
              Perempuan
            </label>
          </div>
        </div>
      </div>
      <div class="form-group">
        <label for="inputPassword3" class="col-sm-2 control-label">Tempat Lahir</label>
        <div class="col-sm-10">
         <input type="text" name="tempat_lahir" class="form-control" value="{{ $d->tempat_lahir }}">
       </div>
     </div>
     @php($tgl = explode('-', $d->tanggal_lahir))
     <div class="form-group">
      <label for="inputPassword3" class="col-sm-2 control-label">Tanggal Lahir</label>
      <div class="col-sm-3">
        <select class="form-control" name="tanggal">
        @php($x = '') @for($i = 1; $i <= 31; $i++) @if($i < 10) @php( $x = '0'.$i) @else @php($x = $i) @endif
         <option @if($tgl[2]==$x) selected @endif>{{ $x }}</option>
         @endfor
       </select>
     </div>
     <div class="col-sm-3">
      <select class="form-control" name="bulan">
        @php($x = '') @for($i = 1; $i <= 12; $i++) @if($i < 10) @php( $x = '0'.$i) @else @php($x = $i) @endif
        <option @if($tgl[1]==$x) selected @endif>{{ $x }}</option>
        @endfor
      </select>
    </div>
    <div class="col-sm-4">
      <select class="form-control" name="tahun">
        @for($i=date('Y');$i>=1700;$i--)
        <option @if($tgl[0]==$x) selected @endif>{{ $i }}</option>
        @endfor
      </select>
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Agama</label>
    <div class="col-sm-10">
      <select name="agama" class="form-control">
        @foreach($agama as $a)
        <option @if($d->agama==$a->nama) selected @endif>{{ $a->nama }}</option>
        @endforeach
      </select>
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Pendidikan</label>
    <div class="col-sm-10">
      <select name="pendidikan" class="form-control">
       @foreach($pendidikan as $a)
       <option @if($d->pendidikan==$a->nama) selected @endif>{{ $a->nama }}</option>
       @endforeach
     </select>
   </div>
 </div>
</div>
<div class="col-md-6">
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Pekerjaan</label>
    <div class="col-sm-10">
      <input type="text" name="pekerjaan" class="form-control" value="{{ $d->pekerjaan }}">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Status</label>
    <div class="col-sm-10">
      <label>
        <input type="radio" name="status_kawin" value="Kawin" @if($d->status)kawin=='Kawin') checked @endif>
        Kawin
      </label>
    </br>
    <label>
      <input type="radio" name="status_kawin" value="Belum Kawin" @if($d->status_kawin=='Belum Kawin') checked @endif>
      Belum Kawin
    </label>

  </div>
</div>
<div class="form-group">
  <label for="inputPassword3" class="col-sm-2 control-label">Status Keluarga</label>
  <div class="col-sm-10">
    <select class="form-control" name="status_keluarga">
     @foreach($status as $a)
     <option @if($d->status_keluarga==$a->nama_keluarga) selected @endif>{{ $a->nama_keluarga }}</option>
     @endforeach
   </select>
 </div>
</div>
<div class="form-group">
  <label for="inputPassword3" class="col-sm-2 control-label">Paspor</label>
  <div class="col-sm-10">
    <input type="text" name="paspor" class="form-control" value="{{ $d->paspor }}">
  </div>
</div>
<div class="form-group">
  <label for="inputPassword3" class="col-sm-2 control-label">Kitas</label>
  <div class="col-sm-10">
    <input type="text" name="kitas" class="form-control" value="{{ $d->kitas }}" >
  </div>
</div>
<div class="form-group">
  <label for="inputPassword3" class="col-sm-2 control-label">Ayah</label>
  <div class="col-sm-10">
    <input type="text" name="ayah" class="form-control" value="{{ $d->ayah }}">
  </div>
</div>
<div class="form-group">
  <label for="inputPassword3" class="col-sm-2 control-label">Ibu</label>
  <div class="col-sm-10">
    <input type="text" name="ibu" class="form-control" value="{{ $d->ibu }}">
  </div>
</div>
</div>
</div>
    {!! Form::close() !!}
    </div>
</section>
@endforeach
@endsection