@extends('layouts.app')

<!-- Main Content -->
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Reset Password</div>
                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    {!! Form::open(['url'=>'login', 'class'=>'form-horizontal']) !!}
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection
