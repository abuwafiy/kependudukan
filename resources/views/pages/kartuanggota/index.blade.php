@extends('layouts.app')
@section('content')
<section class="panel">
  <header class="panel-heading">
    <div class="panel-actions">
      <a href="{{url('/admin/kartuanggota/create')}}" class="panel-action"><i class="fa fa-plus"></i> New</a>
      <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
    </div>

    <h2 class="panel-title">Agenda</h2>
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
          <td>{{ $d->id_kartu }}</td>
          <td>{{ $d->nama_kartu }}</td>
          <td>
            <a href="{{route('kartuanggota.edit',$d->id_kartu)}}" class="btn btn-warning btn-xs" data-toggle="tooltip" title="Ubah Data">
             <span class="glyphicon glyphicon-pencil"></span>
           </a>&nbsp
           {!! Form::open(['method' => 'DELETE', 'style' => 'display:inline', 'data-toggle' => 'tooltip', 'title' => 'Hapus Data' ,'route'=>['kartuanggota.destroy', $d->id_kartu]]) !!}
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