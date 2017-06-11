@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
                <div class="panel-heading">Login</div>
                <div class="panel-body">
                    {!! Form::open(['url'=>'login', 'class'=>'form-horizontal']) !!}
                    <div class="form-group{{$errors->has('email') ? ' has-error' :
                    ''}}">
                     
                     {!! Form::label('email','Alamat email', ['class'=>'col-md-4 control-label']) !!}
                     <div class="col-md-6">
                         {!! Form::email('email', null, ['class'=>'form-control']) !!}
                         {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
                     </div>   
                    </div>
                    <div class="form-group{{$errors->has('password') ? ' has-error' :
                    ''}}"></div>
                         {!! Form::label('password', 'password',['class'=>'col-md-4 control-label']) !!}
                         <div class="col-md-6"></div>
                         {!! Form::label('password',['class'=>'form-control']) !!}
                         {!! $errors->first('password', '<p class="help-block">:message</p>') !!}
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                    <div class="chekbox">
                        <label>
                            {!! Form::chekbox('remember')!!} Ingat saya
                        </label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                    <button type="submit" class="btn btn-primary">
                        <i class="fa fa-btn fa sign-in"></i> Login
                    </button>
                    
                    <a class="btn btn-link" href="{{url('/password/reset')}}">lupa password</a>
                </div>
            </div>
            {!! From::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection