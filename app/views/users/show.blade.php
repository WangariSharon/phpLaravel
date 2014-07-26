@extends('layouts.master')

@section('content')

<div class="page-header">
	<div class="pull-right">
		<div class="btn-group">
			<!-- Back to all users -->
			<a href="{{route('users.index')}}" class="btn btn-default">Back</a>
			<!-- Link to edit profile -->
			<a href="{{ route('users.edit', array($user->id))}}" class="btn btn-default">Edit Profile</a>
	
<<<<<<< HEAD
	           {{ Form::open(array('method' => 'DELETE', 'route' => array('users.destroy', $user->id))) }}                       
	           {{ Form::submit('Delete', array('class'=> 'btn btn-danger')) }}
	           {{ Form::close() }}
=======
           		{{ Form::open(array('method' => 'DELETE', 'route' => array('users.destroy', $user->id))) }}                       
        	 	{{ Form::submit('Delete', array('class'=> 'btn btn-danger')) }}
           		{{ Form::close() }}
>>>>>>> origin/master
			  


		</div>
	</div>
	<h2>Show Profile</h2>
</div>
<!-- Info goes in here -->
<p class="lead">Name:{{ $user->names }}</p>
<<<<<<< HEAD
<p class="lead">Username:{{ $user->username }}</p>
<p class="lead">Phone Gender:{{ $user->gender }}</p>
<p class="lead">Country:{{ $user->country }}</p>
<p class="lead">{{ $user->photo }}</p>

@stop
=======
<p class="lead">Gender:{{ $user->gender }}</p>
<p class="lead">Phone Number:{{ $user->phone }}</p>
<p class="lead">Country:{{ $user->country }}</p>
<p class="lead">Date of Birth:{{ $user->dob }}</p>
<p class="lead">Marital Status:{{ $user->marital_status }}</p>
<p class="lead">{{ $user->photo }}</p>

@stop
>>>>>>> origin/master
