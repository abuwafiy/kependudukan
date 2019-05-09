<div class="form-group {{ $errors->has('username') ? 'has-error has-feedback' : '' }}">
    {!! Form::label('username', 'Username :', ['class' => 'col-md-2 control-label']) !!}
    <div class="col-md-8">
        <div class="input-group">
            {!! Form::text('username',null,['class'=>'form-control']) !!}
            {!! $errors->first('email', '<span class="glyphicon glyphicon-remove form-control-feedback"></span><span class="help-block">:message</span>'); !!}
        </div>
    </div>
</div>

<div class="form-group {{ $errors->has('password') ? 'has-error has-feedback' : '' }}">
    {!! Form::label('password', 'Password :', ['class' => 'col-md-2 control-label']) !!}
    <div class="col-md-8">
        <div class="input-group">
            {!! Form::password('password', array('placeholder'=>'Password','class' => 'form-control')); !!}
            {!! $errors->first('password', '<span class="glyphicon glyphicon-remove form-control-feedback"></span><span class="help-block">:message</span>'); !!}
        </div>
    </div>
</div>

<div class="form-group {{ $errors->has('nama_kedai') ? 'has-error has-feedback' : '' }}">
    {!! Form::label('name', 'Nama :', ['class' => 'col-md-2 control-label']) !!}
    <div class="col-md-8">
        <div class="input-group">
            {!! Form::text('name',null,['class'=>'form-control']) !!}
            {!! $errors->first('name', '<span class="glyphicon glyphicon-remove form-control-feedback"></span><span class="help-block">:message</span>'); !!}
        </div>
    </div>
</div>