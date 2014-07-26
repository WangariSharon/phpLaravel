@extends('layouts.master')

@section('content')

{{ Form::open(array('route' => 'users.store', 'files' => true, 'enctype' => 'multipart/form-data')) }}
	<div class="form-group">
		{{ Form::label('Names') }}
		{{ Form::text('name', null, array('class' => 'form-control')) }}
	</div>
		<div class="form-group">
		{{ Form::label('UserName') }}
		{{ Form::text('username', null, array('class' => 'form-control')) }}
	</div>
	<div class="form-group">
		{{ Form::label('Gender') }}
		<div class="radio">
			<label>{{ Form::radio('gender', 'Male') }} Male</label>
		</div>
		<div class="radio">
			<label>{{ Form::radio('gender', 'Female', true) }} Female</label>
		</div>		
</div>
	<div class="form-group">
		{{ Form::label('Country') }}
		{{ Form::text('country', null, array('class' => 'form-control')) }}
	</div>
	<div class="form-group">
		{{ Form::label('Image') }}
		{{ Form::file('photo', null, array('class' => 'form-control')) }}
	</div>
	<div class="form-group">
		{{Form::submit('Next Level', array('class' => 'btn btn-primary')) }}
	</div>
{{ Form::close() }}

@stop