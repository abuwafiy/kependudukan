@extends('layouts.app')
@section('content')
<section class="panel">
  <header class="panel-heading">
    <div class="panel-actions">
      <a href="{{url('/admin/agenda/create')}}" class="panel-action"><i class="fa fa-plus"></i> New</a>
      <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
    </div>

    <h2 class="panel-title">Agenda</h2>
  </header>
  <div class="panel-body">
    <div class="table-responsive">
      <table class="table table-bordered table-striped mb-none" id="datatable">
        <thead>
          <tr>
           <th width="20px">ID</th>
           <th>Nama Agenda</th>
           <th>Isi</th>
           <th>Tanggal</th>
           <th>Mulai</th>
           <th>Selesai</th>    
           <th class="text-center" width="100">Aksi</th>  
         </tr>
       </thead>
       <tbody>
        @foreach($data as $d)
        <tr>
          <td>{{ $d->id_agenda }}</td>
          <td>{{ $d->nama_agenda }}</td>
          <td>{!! $d->isi_agenda !!}</td>
          <td>{{ $d->tgl_agenda }}</td>
          <td>{{ $d->mulai }}</td>
          <td>{{ $d->selesai }}</td>
          <td>
            <a href="{{route('agenda.edit',$d->id_agenda)}}" class="btn btn-warning btn-xs" data-toggle="tooltip" title="Ubah Data">
             <span class="glyphicon glyphicon-pencil"></span>
           </a>&nbsp
           {!! Form::open(['method' => 'DELETE', 'style' => 'display:inline', 'data-toggle' => 'tooltip', 'title' => 'Hapus Data' ,'route'=>['agenda.destroy', $d->id_agenda]]) !!}
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