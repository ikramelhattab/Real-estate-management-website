
@extends('layouts.app_pro')

@section('content')
<div class="container">
<div class="col-md-3">
<div class="list-group">
@foreach($users as $users)
 <a class="list-group-item" href="{{ url('/conversations/'.$users->id)}}" >{{$users->name}}</a>
 @endforeach
 </div>
</div>

 </div>
@endsection
