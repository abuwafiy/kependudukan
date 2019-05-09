@extends('layouts.profile')
@section('content')
<section class="panel">
  <header class="panel-heading">
    <div class="panel-actions">
      <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
    </div>

    <h2 class="panel-title">Prestasi</h2>
  </header>
  <div class="panel-body">
    <div class="table-responsive">
      <table class="table table-bordered table-striped mb-none" id="datatable-default">
        <thead>
          <tr>
           <th width="80px">ID Prestasi</th>
          <th>Nama Kegiatan</th>
          <th>Penyelenggara</th>
          <th>Prestasi</th>
          <th>Skala</th>
          <th>Tanggal</th>
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
       </tr>
       @endforeach
     </tbody>
   </table>
 </div>
</div>
</section>
@stop