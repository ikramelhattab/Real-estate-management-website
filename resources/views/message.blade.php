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
   <!-- DIRECT CHAT -->
   <form method="POST" action="{{ action('MessageController@store') }}">
                @csrf
            <div class="card direct-chat direct-chat-primary">
              <div class="card-header">
                <h3 class="card-title">Direct Chat</h3>

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
                <!-- Conversations are loaded here -->
                <div class="direct-chat-messages">
                  <!-- Message. Default to the left -->


 @foreach($messages as $msg)
                 @if ( $msg->from_id == (Auth::user()->id))


                  <div class="direct-chat-msg">
                    <div class="direct-chat-infos clearfix">
                      <span class="direct-chat-name float-left">{{ $msg->name}}</span>
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
@else

                  <div class="direct-chat-msg right">
                    <div class="direct-chat-infos clearfix">
                      <span class="direct-chat-name float-right">{{ $msg->name}}</span>
                      <span class="direct-chat-timestamp float-left">  {{ $msg->created_at}}
</span>
                    </div>
                    <!-- /.direct-chat-infos -->
                    <img class="direct-chat-img" src="{{asset('img/user3-128x128.jpg')}}" alt="message user image">
                    <!-- /.direct-chat-img -->
                    <div class="direct-chat-text">
                     {{ $msg->message}}
                    </div>
                    <!-- /.direct-chat-text -->
                  </div>
                  <!-- /.direct-chat-msg -->

                </div>
                <!--/.direct-chat-messages-->


@endif

@endforeach


              </div>
              <div class="card-footer">

                  <div class="input-group">
                    <input type="text" name="message" placeholder="Type Message ..." class="form-control">
                    <span class="input-group-append">
                      <button type="button" class="btn btn-primary">Send</button>
                    </span>
                  </div>
                </form>
              </div>
              <!-- /.card-footer-->
            </div>
            <!--/.direct-chat -->
@endsection
