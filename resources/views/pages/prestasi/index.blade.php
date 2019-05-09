@extends('layouts.app')
@section('content')
<section class="panel">
  <header class="panel-heading">
    <div class="panel-actions">
      <a href="{{url('/admin/prestasi/create')}}" class="panel-action"><i class="fa fa-plus"></i> New</a>
      <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
    </div>

    <h2 class="panel-title">Agenda</h2>
  </header>
  <div class="panel-body">
    <div class="table-responsive">
      <table class="table table-bordered table-striped mb-none" id="datatable">
        <thead>
          <tr>
           <th width="80px">ID Prestasi</th>
          <th>Nama Kegiatan</th>
          <th>Penyelenggara</th>
          <th>Prestasi</th>
          <th>Skala</th>
          <th>Tanggal</th>
          <th width="100px">Aksi</th>
         </tr>
       </thead>
       <tbody>
        @foreach($data as $d)
        <tr>
          <td>{{ $d->id_prestasi }}</td>
          <td>{{ $d->nama_kegiatan }}</td>
          <td>{{ $d->penyelenggara }}</td>
          <td>{{ $d->nama_prestasi }}</td>
          <td>{{ $d->skala }}</td>
          <td>{{ $d->tgl_prestasi }}</td>
         <td>
            <a href="{{route('prestasi.edit',$d->id_prestasi)}}" class="btn btn-warning btn-xs" data-toggle="tooltip" title="Ubah Data">
             <span class="glyphicon glyphicon-pencil"></span>
           </a>&nbsp
           {!! Form::open(['method' => 'DELETE', 'style' => 'display:inline', 'data-toggle' => 'tooltip', 'title' => 'Hapus Data' ,'route'=>['prestasi.destroy', $d->id_prestasi]]) !!}
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