@extends('layouts.app')
@section('content')
<section class="panel">
  <header class="panel-heading">
    <div class="panel-actions">
      <a href="{{url('/admin/kategori_berita/create')}}" class="panel-action"><i class="fa fa-plus"></i> New</a>
      <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
    </div>

    <h2 class="panel-title">Kategori Berita</h2>
  </header>
  <div class="panel-body">
    <div class="table-responsive">
     <table class="table table-bordered table-striped mb-none" id="datatable1">
        <thead>
          <tr>
           <th width="20px">ID</th>
           <th>Judul</th>
           <th class="text-center" width="100">Aksi</th>  
         </tr>
       </thead>
       <tbody>
        @foreach($data as $d)
        <tr>
          <td>{{ $d->id_kategori_berita }}</td>
          <td>{{ $d->nama_kategori }}</td>
          <td>
            <a href="{{route('kategori_berita.edit',$d->id_kategori_berita)}}" class="btn btn-warning btn-xs" data-toggle="tooltip" title="Ubah Data">
             <span class="glyphicon glyphicon-pencil"></span>
           </a>&nbsp
           {!! Form::open(['method' => 'DELETE', 'style' => 'display:inline', 'data-toggle' => 'tooltip', 'title' => 'Hapus Data' ,'route'=>['kategori_berita.destroy', $d->id_kategori_berita]]) !!}
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