@extends('layouts.master')

@section('content')
	<!-- Load form with user details -->
{{Form::open(array('route'=>'users.destroy')) }}

{{ Form::close() }}
	
@stop