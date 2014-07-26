@extends('layouts.master')

@section('content')

<div class="page-header">
	<div class="pull-right">
		<div class="btn-group">
			<!-- Back to all users -->
			<a href="{{route('users.index')}}" class="btn btn-default">Back</a>
			<!-- Link to edit profile -->
			<a href="{{ route('users.edit', array($user->id))}}" class="btn btn-default">Edit Profile</a>
	
	           {{ Form::open(array('method' => 'DELETE', 'route' => array('users.destroy', $user->id))) }}                       
	           {{ Form::submit('Delete', array('class'=> 'btn btn-danger')) }}
	           {{ Form::close() }}
			  


		</div>
	</div>
	<h2>Show Profile</h2>
</div>
<!-- Info goes in here -->
<p class="lead">Name:{{ $user->names }}</p>
<p class="lead">Username:{{ $user->username }}</p>
<p class="lead">Phone Gender:{{ $user->gender }}</p>
<p class="lead">Country:{{ $user->country }}</p>
<p class="lead">{{ $user->photo }}</p>

@stop