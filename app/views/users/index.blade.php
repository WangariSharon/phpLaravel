@extends('layouts.master')

@section('content')
<!-- Create Profile button -->
<<<<<<< HEAD
<p>Create Your profile Get the best of A Game of Thrones</p>

<img src="/assets/images/Game of Thrones 05.jpg" width="550" height="350">
<img src="/assets/images/game-of-thrones.jpg" width="550" height="350">
<img src="/assets/images/game-of-thrones-rains-of-castamere-madden-fairley-600x400.jpg" width="550" height="350">
<img src="/assets/images/-game-of-thrones--wh.jpg" width="550" height="350"><br><br>
<p>
<a href="{{route('users.create')}}" class="btn btn-default">Start Tour</a><p></p>
</p>
=======
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
>>>>>>> origin/master

@stop
