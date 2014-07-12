@extends('layouts.master')

@section('content')

{{ Form::open(array('route' => 'users.store')) }}
	<div class="form-group">
	{{ Form::text('names', null, array('class' => 'form-control')) }}
	</div>
	<div class="form-group">
	{{ Form::text('dob', null, array('class' => 'form-control')) }}
	</div>
	<div class="form-group">
	{{ Form::text('gender', null, array('class' => 'form-control')) }}
	</div>
	<div class="form-group">
	{{ Form::text('phone', null, array('class' => 'form-control')) }}
	</div>
	<div class="form-group">
	{{ Form::text('country', null, array('class' => 'form-control')) }}
	</div>
	<div class="form-group">
	{{ Form::text('marital_status', null, array('class' => 'form-control')) }}
	</div>
	<div class="form-group">
	{{Form::submit('Create Profile', array('class' => 'btn btn-primary')) }}
	</div>
{{ Form::close() }}

@stop