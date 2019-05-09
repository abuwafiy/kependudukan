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
        {!! Form::open(['url' => 'admin/berita','files'=>true, 'class' => 'form-horizontal']) !!}
        @include('pages.berita._form')

        <div class="form-group">
            <div class="col-md-offset-2 col-md-6">
                {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!} &nbsp
                <a href="{{ url('admin/berita')}}" class="btn btn-warning">Back</a>
            </div>
        </div>
        {!! Form::close() !!}
    </div>
</section>
@endsection