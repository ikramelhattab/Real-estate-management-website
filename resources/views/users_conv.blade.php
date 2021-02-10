<div class="col-md-2">
<div class="list-group">
@foreach($users as $user)
 <a class="list-group-item d-flex justify-content-between align-items-center" href="{{ route('show', $user->id) }}" >
           <img src="{{Voyager::image( $user->avatar ) }} "
            class="direct-chat-img "
             style="border-radius:60%; width:40px; height:40px; border:0px solid #fff;"
            alt="message user image">
     {{$user->name}}
  @if(isset($unread[$user->id]))
  <span class="badge badge-pill badge-primary">
 {{$unread[$user->id]}}
</span>
@endif
  </a>
 @endforeach
 </div>
</div>
