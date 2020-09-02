
@extends('layouts.app_pro')

@section('content')
<div class="row">
<div class="container">
@include('users_conv',['users'=>$users])
 <div class="card direct-chat direct-chat-primary">
              <div class="card-header">
                <h3 class="card-title">{{$user->name}}</h3>

                <div class="card-tools">
                  <span title="3 New Messages" class="badge badge-primary">3</span>
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" title="Contacts" data-widget="chat-pane-toggle">
                    <i class="fas fa-comments"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
 @foreach($message as $msg)

                <!-- Conversations are loaded here -->
                <div class="direct-chat-messages">
                  <!-- Message. Default to the left -->
 <div class="direct-chat-msg {{ $msg ->from->id !== $user->id ? 'offset-md-2 text-right' : '' }}">
                    <div class="direct-chat-infos clearfix">

                      <span class="direct-chat-name float-left">{{ $msg ->from->id !== $user->id ? 'Me' : $msg->from->name}}</span>
                      <span class="direct-chat-timestamp float-right">{{ $msg->created_at}}</span>
                    </div>
                    <!-- /.direct-chat-infos -->
                    <img class="direct-chat-img" src="{{asset('img/user1-128x128.jpg')}}" alt="message user image">
                    <!-- /.direct-chat-img -->

                    <div class="direct-chat-text">
                   {{ $msg->message}}
                    </div>
                    <!-- /.direct-chat-text -->
                  </div>
                  <!-- /.direct-chat-msg -->
 </div>
@endforeach

@if($errors->any())
<div class="alert alert-danger">
<ul>
@foreach(@errors->all() as $error)
<li>{{$error}} </li>
@endforeach
</ul>
</div>
   @endif
   
              <div class="card-footer">
 <form method="POST" action="">
         {{csrf_field()}}
                  <div class="input-group">
                    <input type="text" name="message" placeholder="Type Message ..." class="form-control">
                    <span class="input-group-append">
                      <button type="button" class="btn btn-primary">Send</button>
                     </form>

                    </span>
                  </div>
                </form>
              </div>
              <!-- /.card-footer-->
            </div>
            <!--/.direct-chat -->
            </div>
   </div>
@endsection
