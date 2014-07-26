@extends('layouts.master')

@section('content')
<!-- Create Profile button -->
<p>Create Your profile Get the best of A Game of Thrones</p>

<img src="/assets/images/Game of Thrones 05.jpg" width="550" height="350">
<img src="/assets/images/game-of-thrones.jpg" width="550" height="350">
<img src="/assets/images/game-of-thrones-rains-of-castamere-madden-fairley-600x400.jpg" width="550" height="350">
<img src="/assets/images/-game-of-thrones--wh.jpg" width="550" height="350"><br><br>
<p>
<a href="{{route('users.create')}}" class="btn btn-default">Start Tour</a><p></p>
</p>

@stop
