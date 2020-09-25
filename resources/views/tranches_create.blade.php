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
                <h3 class="card-title">Create Tranch</h3>
              </div>
<form method="post" action="{{ action('TranchController@store') }}">
                        @csrf

                <div class="card-body">
                  <div class="form-group">
                    <label >Date Debut</label>
                    <input type="date" class="form-control"  placeholder="date" name="date_deb">
                  </div>
                  <div class="form-group">
                    <label >Date Fin</label>
                    <input type="date" class="form-control"  placeholder="" name="date_fin">
                  </div>

                  <div class="form-group">
                    <label >Local Name</label>
                    <select name="id_local" class="form-control">
                    @foreach($loc as $loc)
                     @if ( $loc->id_user == (Auth::user()->id))
                <option value="{{$loc->id}}">{{$loc->name_loc}}</option>
                @endif
                          @endforeach
                          </select>
                  </div>
                 <!--  <div class="form-group">
                    <label >Name</label>
                    <input type="text" class="form-control"  placeholder="" name="name">
                  </div> -->
                   <div class="form-group">
                    <label >Montant</label>
                    <input type="text" class="form-control"  placeholder="" name="montant">
                  </div>


                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
              </div>
@endsection
