@extends('layouts.app')
@section('content')
<section class="panel">
  <header class="panel-heading">
    <div class="panel-actions">
      <a href="{{url('/admin/berita/create')}}" class="panel-action"><i class="fa fa-plus"></i> New</a>
      <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
    </div>

    <h2 class="panel-title">Berita</h2>
  </header>
  <div class="panel-body">
    <div class="table-responsive">
      <table class="table table-bordered table-striped mb-none" id="datatable">
        <thead>
          <tr>
           <th width="20px">ID</th>
           <th>Judul</th>
           <th>Isi</th>
           <th>Tanggal</th>
           <th>Foto</th>
           <th>Kategori</th>    
           <th class="text-center" width="100">Aksi</th>  
         </tr>
       </thead>
       <tbody>
        @foreach($data as $d)
        <tr>
          <td>{{ $d->id_berita }}</td>
          <td>{{ $d->judul_berita }}</td>
          <td>{!! substr($d->isi_berita,0,200) !!}</td>
          <td>{{ $d->tgl_berita }}</td>
          <td><img width="50px" height="50px" src="{{ asset('foto_berita/'.$d->foto_berita) }}"></td>
          <td>{{ $d->nama_kategori }}</td>
          <td>
            <a href="{{route('berita.edit',$d->id_berita)}}" class="btn btn-warning btn-xs" data-toggle="tooltip" title="Ubah Data">
             <span class="glyphicon glyphicon-pencil"></span>
           </a>&nbsp
           {!! Form::open(['method' => 'DELETE', 'style' => 'display:inline', 'data-toggle' => 'tooltip', 'title' => 'Hapus Data' ,'route'=>['berita.destroy', $d->id_berita]]) !!}
           {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit','class' => 'btn btn-danger btn-xs delete-confirm']) !!}
           {!! Form::close() !!}
         </td>
       </tr>
       @endforeach
     </tbody>
   </table>
 </div>
</div>
</section>
@stop