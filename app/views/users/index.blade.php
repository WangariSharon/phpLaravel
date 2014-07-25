@extends('layouts.master')

@section('content')
<!-- Create Profile button -->
<div class="page-header">
<div class="pull-right">
<a href="{{route('users.create')}}" class="btn btn-default">Create Profile</a>
</div>
 <h2>Users</h2>
</div>

 <table>
  <thead>
    <tr>
    <th>Names</th>
    <th>Phone</th>
    <th>Gender</th>
    <th>Actions</th>
    </tr>
  </thead>
  <tbody>
    @foreach($users as $user)
    <tr>
      <td>{{$user->names}}</td>
      <td>{{$user->phone}}</td>
      <td>{{$user->gender}}</td>
      <td>
        <a href="{{route('users.show', array($user->id))}}" class="btn btn-primary">View</a>

        <!-- Needs better formating -->
         <!--  {{ Form::open(array('method' => 'DELETE', 'route' => array('users.destroy', $user->id))) }}                       
           {{ Form::submit('Delete', array('class'=> 'btn btn-danger')) }}
           {{ Form::close() }} -->


      </td>
    </tr>
    @endforeach
  </tbody>
</table> 

@stop
