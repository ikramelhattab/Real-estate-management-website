@extends('layouts.app_pro')

@section('content')

<div class="card card-secondary">
<div class="card">
   <h1><b>Your Profile</b></h1>
                     <div class="card-body">

<form method="POST" action="/profile/update">
    <div class="form-group hidden">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="_method" value="PATCH">
    </div>
    <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
        <label for="email" class="control-label"><b>Name:</b></label>
        <input type="text" name="name" placeholder="Please enter your email here" class="form-control" value="{{ $user->name }}"/>

        <?php if ($errors->has('name')) :?>
        <span class="help-block">
            <strong>{{$errors->first('name')}}</strong>
        </span>
        <?php endif;?>

    </div>
    <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
        <label for="email" class="control-label"><b>Email:</b></label>
        <input type="text" name="email" placeholder="Please enter your email here" class="form-control" value="{{ $user->email }}"/>

        <?php if ($errors->has('email')) :?>
        <span class="help-block">
            <strong>{{$errors->first('email')}}</strong>
        </span>
        <?php endif;?>

    </div>

                <br>
                                <br>

    <div class="form-group">
        <button type="submit" class="btn btn-default"> Submit </button>
    </div>
        </div>

</form>
</div>
</div>
@endsection
