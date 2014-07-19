@extends('layouts.master')

@section('content')

{{ Form::open(array('route' => 'users.store')) }}
	<div class="form-group">
		{{ Form::label('Names') }}
		{{ Form::text('names', null, array('class' => 'form-control')) }}
	</div>
	<div class="form-group">
		{{ Form::label('Date of Birth') }}<br>
		{{ Form::selectRange('dob[day]', 1, 31) }}
		{{ Form::selectMonth('dob[month]') }}
		{{ Form::selectRange('dob[year]', 1996, 1900) }}
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
		{{ Form::label('Phone Number') }}
		{{ Form::text('phone', null, array('class' => 'form-control')) }}
	</div>
	<div class="form-group">
		{{ Form::label('Country') }}
		{{ Form::text('country', null, array('class' => 'form-control')) }}
	</div>
	<div class="form-group">
		{{ Form::label('Marital Status') }}
		{{ Form::select('marital_status',$marital_status ,null, array('class' => 'form-control')) }}
	</div>
	<div class="form-group">
		{{Form::submit('Create my Profile', array('class' => 'btn btn-primary')) }}
	</div>
{{ Form::close() }}

@stop