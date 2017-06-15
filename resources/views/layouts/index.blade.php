@extends('layouts.app')

@section('conten')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<ul class="breadcrumb">
				<li><a href="{{url('/home') }}">Dashboard</a></li>
				<li class="active">penulis</li>
			</ul>
			<div class="panel panel-default">
				<div class="panel-heading">
					<h2 class="panel-title">penulis</h2>
				</div>
				<div class="panel-body">
					Diisi dengan Data Table
				</div>
			</div>
		</div>
	</div>
</div>
@endsection