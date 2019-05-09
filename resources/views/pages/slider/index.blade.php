@extends('layouts.app')
@section('content')
<section class="panel">
  <header class="panel-heading">
    <div class="panel-actions">
      <a href="{{url('/admin/slider/create')}}" class="panel-action"><i class="fa fa-plus"></i> New</a>
      <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
    </div>

    <h2 class="panel-title">Slider</h2>
  </header>
  <div class="panel-body">
    <div class="table-responsive">
      <table class="table table-bordered table-striped mb-none" id="datatable1">
        <thead>
          <tr>
          <th>Gambar</th>
          <th width="100px">Aksi</th>
         </tr>
       </thead>
       <tbody>
        @foreach($data as $d)
        <tr>
          <td><img  height="200px" src="{{ asset('foto_slider/'.$d->gambar) }}"></td>
         <td>
           {!! Form::open(['method' => 'DELETE', 'style' => 'display:inline', 'data-toggle' => 'tooltip', 'title' => 'Hapus Data' ,'route'=>['slider.destroy', $d->id_slider]]) !!}
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