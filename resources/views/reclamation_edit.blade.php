@extends('layouts.app')

@section('content')

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

                            <h3><span>Reclamation </span></h3>

 <div class="main">

                <div class="inner-wrapper">
                    						<div class="forms-simple">

                        <div class="row-fluid">

                            <div class="span6">
 @foreach($reclamations as $rec)

 <form role="form" action="{{ action('ReclamationController@update',$rec->id) }}" method="post">
   @csrf
    @method('PUT')

 <div class="form-group">
      <label for="title">Subject
      <input class="form-control" type="text" name="subject" placeholder="subject" id="title" value="{{$rec->subject}}" /></label>
    </div>

    <div class="form-group">
      <label>Content
                       <input class="form-control" type="file" name="content" placeholder="content" value="{{$rec->content}}" /></label>
    </div>



 <div class="form-group">
      <label>Description

      <textarea class="form-control" name="description" placeholder="description" value="{{$rec->description}}" rows="4" cols="50">
{{$rec->description}}
</textarea> </label>  </div>

<br>

<button class="btn btn-primary" type="submit">Submit</button>

<a href="" class="btn btn-default">Back</a>

  </form>

 @endforeach



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
