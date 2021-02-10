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

<div class="card card-secondary">
              <div class="card-header">
                <h3 class="card-title">Create new Counter</h3>
              </div>
                  <div class="card-body">

<form  method="POST" action="{{ action('CompteurController@store') }}">
                        @csrf

<input type="hidden" id="id_local" name="id_local">

<!-- <input  type="text" id="autocomplete" class="form-control" placeholder="name_loc"> -->
                           <div class="form-group row">
<label class="col-md-12 col-form-label ">Local Name
                       <select name="id_local" class="form-control" >
                         @foreach($locales as $loc)
                        @if ( $loc->id_user == (Auth::user()->id))

                          <option  value="{{$loc->id}}">{{$loc->name_loc}}</option>
                          @endif
                          @endforeach
                         </select>
                         </label>
                       </div>


  <div class="form-group row">
<label class="col-md-12 col-form-label ">Date
<input type="date" placeholder="" name="date" class="form-control" class="form-control">
</label>
 </div>



 <div class="form-group row">
<label class="col-md-12 col-form-label "> Counter Type
<select name="id_type" class="form-control">
                          @foreach($typecomp as $c)
                          <option  value="{{$c->id}}">{{$c->type}}</option>
                          @endforeach
                         </select>
                        </label>
                         </div>




<div class="form-group row">
<label class="col-md-12 col-form-label "> Counter Number
<input type="text" placeholder="num_compteur" name="num_compteur" class="form-control">
  </label>       </div>



                           <div class="form-group row">
 <label class="col-md-12 col-form-label ">Picture
   <input type="file" placeholder="" name="photo" class="form-control">
   </label>
</div>

<!-- <div class="repeater">
    <div data-repeater-list="category-group">
        <div data-repeater-item >

                    <input type="date" placeholder="" name="date" id="date" class="input-lg">
                    <input type="text" placeholder="num_compteur" name="num_compteur" id="num_compteur" class="input-lg">
                                           <input type="file" placeholder="" name="photo" id="photo" class="input-lg">
                    <input data-repeater-delete class="delete-modal btn btn-danger btn-lg " value="-" type="button" />
        </div>
    </div>
                    <input data-repeater-create class="btn btn-primary" value="+" type="button" /> -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" id="submit">Submit</button>
                 <a href="{{url('comp_pro')}}" class="btn btn-default">Back</a>

                </div>
                </div>
              </form>
              </div>
              </div>

@endsection

<!--  -->
