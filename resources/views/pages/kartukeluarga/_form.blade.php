<div class="form-group {{ $errors->has('username') ? 'has-error has-feedback' : '' }}">
    {!! Form::label('tipe', 'Standart ID :', ['class' => 'col-md-2 control-label']) !!}
    <div class="col-md-8">
        <div class="input-group">
            {!! Form::text('standartid',null,['class'=>'form-control']) !!}
            {!! $errors->first('email', '<span class="glyphicon glyphicon-remove form-control-feedback"></span><span class="help-block">:message</span>'); !!}
        </div>
    </div>
</div>

<div class="form-group {{ $errors->has('username') ? 'has-error has-feedback' : '' }}">
    {!! Form::label('tipe', 'Standart Name :', ['class' => 'col-md-2 control-label']) !!}
    <div class="col-md-8">
        <div class="input-group">
            {!! Form::text('standartname',null,['class'=>'form-control']) !!}
            {!! $errors->first('email', '<span class="glyphicon glyphicon-remove form-control-feedback"></span><span class="help-block">:message</span>'); !!}
        </div>
    </div>
</div>

<div class="form-group {{ $errors->has('username') ? 'has-error has-feedback' : '' }}">
    {!! Form::label('tipe', 'Deskripsi :', ['class' => 'col-md-2 control-label']) !!}
    <div class="col-md-8">
        <div class="input-group">
            {!! Form::textarea('deskripsi',null,['class'=>'form-control']) !!}
            {!! $errors->first('email', '<span class="glyphicon glyphicon-remove form-control-feedback"></span><span class="help-block">:message</span>'); !!}
        </div>
    </div>
</div>