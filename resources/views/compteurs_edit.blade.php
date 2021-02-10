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
                <h3 class="card-title">Edit Counter</h3>
              </div>
               @foreach($compteurs as $compteurs)

<form  method="POST" action="{{ action('CompteurController@update', $compteurs->id) }}" >
     @csrf
    @method('PUT')

                <div class="card-body">
                  <div class="form-group">
                    <label >Date</label>
                    <input type="date" class="form-control"  placeholder="date" name="date" value="{{$compteurs->date}}">
                  </div>

                  <div class="form-group">
                    <label >Local Name</label>
             <input  class="form-control" type="text" name="id_local" value="{{$compteurs->name_loc}}" disabled="true">

                     <!-- <select name="id_local" class="form-control">
                          <option value="{{$compteurs->id}}">{{$compteurs->name_loc}}</option>

                         </select> -->
                  </div>


                 <div class="form-group">
                    <label >Counter Number</label>
                    <input type="text" class="form-control"  placeholder="num_compteur" name="num_compteur" value="{{$compteurs->num_compteur}}">
                  </div>


                   <div class="form-group">
                    <label >Counter Type</label>
  <input  class="form-control" type="text" name="id_type" value="{{$compteurs->type}}" disabled="true">

                    <!--  <select name="id_type" class="form-control">
                          <option value="{{$compteurs->id}}">{{$compteurs->type}}</option>

                         </select>            -->       </div>


                  <div class="form-group">
                    <label >Picture
                    </label>
                     <img src="\images\uploads\2020\04\{{ $compteurs->photo}}"/>
                    <input type="file" class="form-control"  placeholder="" name="photo" value="{{$compteurs->photo}}">
                  </div>




                <div class="card-footer">
                    <button type="submit" class="btn btn-primary" type="submit">Update</button>

                             <a href="{{url('comp_pro')}}" class="btn btn-default">Back</a>
                </div>
              </form>
                                                         @endforeach

              </div>



@endsection
