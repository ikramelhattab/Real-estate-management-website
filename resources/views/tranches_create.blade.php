@extends('layouts.app_pro')

@section('content')
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Create Tranch</h3>
              </div>
<form  method="POST" action="{{ action('TranchController@store') }}">
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
                    @foreach($tranches->name_loc)
                    <input type="text" class="form-control"  placeholder="" name="name_loc">
                    @endforeach
                  </div>
                  <div class="form-group">
                    <label >Name</label>
                    <input type="text" class="form-control"  placeholder="" name="name">
                  </div>
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
