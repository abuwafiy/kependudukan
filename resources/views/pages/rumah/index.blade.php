@extends('layouts.app')
@section('content')
<section class="panel">
  <header class="panel-heading">
    <div class="panel-actions">
      <a href="{{url('/admin/rumah/create')}}" class="panel-action"><i class="fa fa-plus"></i> New</a>
      <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
    </div>

    <h2 class="panel-title">Rumah dan Kartu Keluarga</h2>
  </header>
  <div class="panel-body">
    <div class="table-responsive">
      <table class="table table-bordered mb-none" id="datatable-default">
        <thead>
          <tr>
           <th width="20px">ID</th>
           <th>Alamat</th>
           <th>No/Blok</th>
           <th>Telp</th>
           <th>Status</th>  
           <th class="text-center" width="120">Aksi</th>  
         </tr>
       </thead>
       <tbody>
        @foreach($data as $d)
        <tr>
          <td>{{ $d->id_rumah }}</td>
          <td>{{ $d->alamat }}</td>
          <td>{{ $d->no_blok }}</td>
          <td>{{ $d->telp_rumah }}</td>
          <td>{{ $d->status_rumah }}</td>
          <td>
            <a href="{{route('detailanggota.edit',$d->id_rumah)}}" class="btn btn-success btn-xs" data-toggle="tooltip" title="Detail Kartu Anggota">
             <span class="glyphicon glyphicon-file"></span>
           </a>
            <a href="{{route('rumah.edit',$d->id_rumah)}}" class="btn btn-warning btn-xs" data-toggle="tooltip" title="Ubah Data">
             <span class="glyphicon glyphicon-pencil"></span>
           </a>
           {!! Form::open(['method' => 'DELETE', 'style' => 'display:inline', 'data-toggle' => 'tooltip', 'title' => 'Hapus Data' ,'route'=>['rumah.destroy', $d->id_rumah]]) !!}
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