@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                <form class="form-horizontal" role="From" method="POST" action="{{url/login}}">
                    {!! Form::open(['url'=>'/register', 'class'=>'form-horizontal']) !!}
                    <div class="form-group{{$errors->has('name') ?' has-error :''}}">
                         {!! Form::label('name', 'Nama', ['class'=>'col-md-4 control-label']) !!}
                         <div class="col-md-6"></div>
                         {!! Form::text('name',['class'=>'form-control']) !!}
                         {!! $errors->first('name', '<p class="help-block">:message</p>' !!}
                        <div class="col-md-6"></div>
                    </div>
                </div>
                <div class="form-group{{$errors->has,('email') ? 'has-error': ''}}">
                         {!! Form::label('email','alamat email', ['class'=>'col-md-4 control-label']) !!}
                         <div class="col-md-6"></div>
                         {!! Form::email('email', null, ['class'=>'form-control']) !!}
                         {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group{{$errors->has('password_confirmation') ? ' has-error' :''}}"></div>
             {!! Form::label('password_confirmation','konfirmasi password', ['class'=>'col-md-4 control-label']) !!}
             <div class="col-md-6">
            {!! Form::password('password_confirmation', ['class'=>'form-control']) !!}
            {!! $errors->first('password_confirmation', '<p class="help-block">:message</p>' !!}
             </div>
        </div>
        <div class="form-group">
        <div class="col-md-6 col-md-offset-4">
        <button type="submit" class="btn btn-primary">
            <i class="fa fa-btn fa-user"></i> Daftar
        </button>
        </div>
    </div>
    {!! Form::close() !!}
</div>
@endsection
