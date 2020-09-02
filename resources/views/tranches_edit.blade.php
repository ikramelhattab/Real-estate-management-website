@extends('layouts.app_pro')
@section('content')


<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Tranch</h3>
              </div>
               @foreach($tranches as $tranches)

<form  method="POST" action="{{ action('TranchController@update',$tranches->id) }}" >
     @csrf
    @method('PUT')

                <div class="card-body">
                  <div class="form-group">
                    <label >Date Debeut</label>
                    <input type="date" class="form-control"  placeholder="date" value="{{$tranches->date_deb}}">
                  </div>
                  <div class="form-group">
                    <label >Date Fin</label>
                    <input type="date" class="form-control"  placeholder="" value="{{$tranches->date_fin}}">
                  </div>
                  <div class="form-group">
                    <label >Local Name</label>

                    <input type="text" class="form-control"  placeholder="" value="{{$tranches->name_loc}}">
                  </div>
                  <div class="form-group">
                    <label >Name</label>
                    <input type="text" class="form-control"  placeholder="" value="{{$tranches->name}}">
                  </div>
                   <div class="form-group">
                    <label >Montant</label>
                    <input type="text" class="form-control"  placeholder="" value="{{$tranches->montant}}">
                  </div>



                <div class="card-footer">
                    <button type="submit" class="btn btn-primary" type="submit">Update</button>

                             <a href="{{action('TranchController@index')}}" class="btn btn-default">Back</a>
                </div>
              </form>
                                                         @endforeach

              </div>



@endsection
