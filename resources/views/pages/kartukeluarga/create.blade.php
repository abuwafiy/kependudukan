@extends('layouts.app')
@section('content')
 <section class="panel">
        <header class="panel-heading">
          <div class="panel-actions">
            <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
          </div>

          <h2 class="panel-title">Add Standart LKPP</h2>
        </header>
        <div class="panel-body">
        {!! Form::open(['url' => 'standartlkpp','files'=>true, 'class' => 'form-horizontal']) !!}
        @include('pages.standartlkpp._form')

        <div class="form-group">
            <div class="col-md-offset-2 col-md-6">
                {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                <a href="{{ url('user')}}" class="btn btn-warning">Back</a>
            </div>
        </div>
        {!! Form::close() !!}
    </div>
</section>
@endsection