@extends('layouts.profile')
@section('content')
<section class="panel">
  <header class="panel-heading">
    <div class="panel-actions">
      <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
    </div>

    <h2 class="panel-title">Agenda</h2>
  </header>
  <div class="panel-body">
    <div class="table-responsive">
      <table class="table table-bordered table-striped mb-none" id="datatable-default">
        <thead>
          <tr>
           <th width="20px">ID</th>
           <th>Nama Agenda</th>
           <th>Isi</th>
           <th>Tanggal</th>
           <th>Mulai</th>
           <th>Selesai</th>    
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
       </tr>
       @endforeach
     </tbody>
   </table>
 </div>
</div>
</section>
@stop