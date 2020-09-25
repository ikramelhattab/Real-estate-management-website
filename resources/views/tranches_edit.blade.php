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
                <h3 class="card-title">Edit Tranch</h3>
              </div>
               @foreach($tranches as $tranches)

<form  method="POST" action="{{ action('TranchController@update',$tranches->id) }}" >
     @csrf
    @method('PUT')


                <div class="card-body">
                  <div class="form-group">
                    <label >Date Debut</label>
                    <input type="date" class="form-control" name="date_deb" placeholder="date" value="{{$tranches->date_deb}}">
                  </div>
                  <div class="form-group">
                    <label >Date Fin</label>
                    <input type="date" class="form-control" name="date_fin" placeholder="" value="{{$tranches->date_fin}}">
                  </div>
                  <div class="form-group">
                    <label >Local Name</label>
             <input  class="form-control" type="text" name="id_local" value="{{$tranches->name_loc}}" disabled="true">

                   <!-- <select name="id_local" class="form-control">
                          <option value="{{$tranches->id}}">{{$tranches->name_loc}}</option>

                         </select> -->
                  </div>
                  <!-- <div class="form-group">
                    <label >Name</label>
                    <input type="text" class="form-control"  placeholder="" value="">
                  </div> -->
                   <div class="form-group">
                    <label >Montant</label>
                    <input type="text" class="form-control"  name="montant" placeholder="" value="{{$tranches->montant}}">
                  </div>



                <div class="card-footer">
                    <button type="submit" class="btn btn-primary" type="submit">Update</button>

                             <a href="{{action('TranchController@index')}}" class="btn btn-default">Back</a>
                </div>
              </form>
                                                         @endforeach

              </div>



@endsection
