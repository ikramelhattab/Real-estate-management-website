@extends('layouts.app')

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



<!-- <div class="page-head" style="background-repeat: no-repeat;background-position: center top;background-image: ; background-size: cover; ">
        <div class="container">
        <div class="wrap clearfix">
            <h1 class="page-title"><span>Reclamation</span></h1>
                    </div>
    </div>
    </div> --><!-- End Page Head -->
    <br>
 <div class="container">
<div class="section-content">

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
<div class="container contents single login-register">
    <div class="row">
        <div class="span12 main-wrap">

 <h3><span>Create Complaint </span></h3>
        <div class="main">

                <div class="inner-wrapper">
                    						<div class="forms-simple">

                        <div class="row-fluid">

                            <div class="span6">

 <form role="form" action="{{ action('ReclamationController@store') }}" method="post">



    @csrf

    <div class="form-group">
      <label>Local Name </label>
<select name="id_loc" class="form-control" >
                         @foreach($locales as $loc)
                     @if (( $loc->id_user == (Auth::user()->id)) && (($loc->status) == 1  ))

                          <option  value="{{$loc->id}}">{{$loc->name_loc}}</option>
                       @endif
                          @endforeach
                         </select>    </div>

 <div class="form-group">
      <label for="title">Subject </label>
      <input class="form-control" type="text" name="subject" placeholder="subject" />
    </div>

    <div class="form-group">
      <label>Content </label>
     <input class="form-control" type="file" name="content" placeholder="" />
    </div>



 <div class="form-group">
      <label>Description </label>
{!! Form::textarea('description', old('description'), ['class'=>'form-control', 'placeholder'=>'description']) !!}  </div>

<br>

<button class="btn btn-primary" type="submit">Submit</button>

<a href="" class="btn btn-default">Back</a>

  </form>



 </div>

    </div>
    </div>
</div>
</div>
</div>
 </div> </div> </div> </div> </div> </div>


    </div><!-- End contents row -->

</div>


@endsection
