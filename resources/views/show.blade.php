
@extends('layouts.app_pro')

@section('content')

           @if($errors->any())
           <div class="alert alert-danger">
            <ul>
      @foreach($errors->all() as $error)
     <li>{{$error}}</li>
      @endforeach
    </ul>
    </div>
     @endif

<div class="container">
<div class="row">

@include('users_conv',['users'=>$users])

 <div class="card direct-chat direct-chat-secondary">
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
@if($message->hasMorePages())
<div class="text-center">
<a href="{{ $message->nextPageUrl()}}" class="btn btn-light">
voir les messages precd
</a>
</div>
@endif

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

                    <div class="direct-chat-text ">
                                     {!! nl2br(e($msg->message)) !!}
                    </div>
                    <!-- /.direct-chat-text -->
                  </div>
                  <!-- /.direct-chat-msg -->
 </div>
@endforeach
@if($message->hasMorePages())
<div class="text-center">
<a href="{{ $message->previousPageUrl()}}" class="btn btn-light">
voir les messages suiv
</a>
</div>
@endif
@if($errors->has('content'))
<div class="invalid-feedback">
{{implode(',',$error->get('message'))}}

</div>
   @endif

              <div class="card-footer">
 <form method="post" action="{{action('MessageController@store', $user->id)}}">

         {{csrf_field()}}
                  <div class="input-group">
                    <input type="text" name="message" placeholder="Type Message ..." class="form-control {{$errors->has('message') ? 'is-invalid': ''}} ">
                  </div>
                    <span class="input-group-append">
                      <button class="btn btn-primary" type="submit" >Send</button>
                     </form>

                    </span>
                </form>
              </div>
              <!-- /.card-footer-->
            </div>
            <!--/.direct-chat -->
            </div>
   </div>
      </div>
   </div>

@endsection
