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
    {!! Form::model($data,['method' => 'PATCH', 'enctype'=>'multipart/form-data', 'class' => 'form-horizontal', 'route'=>['berita.update',$data->id_berita]]) !!}
    
    <div class="form-group">
      <label class="control-label col-md-2">Judul Berita</label>
      <div class="col-md-10">
        <input type="text" class="form-control" name="judul_berita" placeholder="Judul Berita" value="{{ $data->judul_berita }}">

    </div>
</div>
<div class="form-group">
  <label class="control-label col-md-2">Foto Berita</label>
  <div class="col-md-10">
      <input type="hidden" name="id_berita" value="">
      <input type="file" name="foto_berita" accept="image/*">
      <small>Max Upload 1MB (25cm x 15cm)</small><br>
      <img height="100px" src="{{ asset('foto_berita/'.$data->foto_berita) }}">
  </div>
</div>

<div class="form-group">
  <label class="control-label col-md-2">Kategori Berita</label>
  <div class="col-md-4">
    <select class="form-control" name="id_kategori_berita">
        @foreach($kategori as $k)
        <option @if($k->id_kategori_berita==$data->id_kategori_berita) selected @endif value="{{ $k->id_kategori_berita }}">
            {{ $k->nama_kategori }}
        </option>
        @endforeach
    </select>
</div>
</div>
<div class="form-group">
   <label class="control-label col-md-2">Kategori Berita</label>
   <div class="col-md-10">
      <textarea class="summernote" name="isi_berita" data-plugin-summernote data-plugin-options='{ "height": 700, "codemirror": { "theme": "ambiance" } }'>{{ $data->isi_berita }}</textarea>                                                
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