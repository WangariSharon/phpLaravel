@extends('layouts.master')

@section('content')
	<!-- Load form with user details -->
{{Form::model($user, array('route' => array('users.update', $user->id), 'method' => 'PUT')) }}
	<div class="form-group">
		{{ Form::label('Names') }}
		{{ Form::text('names', null, array('class' => 'form-control')) }}
	</div>
	<div class="form-group">
		{{ Form::label('Username') }}
		<div class="radio">
			<label>{{ Form::radio('username', 'Male') }} Male</label>
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
		{{Form::submit('Update my Profile', array('class' => 'btn btn-primary')) }}
	</div>
{{ Form::close() }}

@stop