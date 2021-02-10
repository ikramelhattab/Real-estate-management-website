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
                <h3 class="card-title">Create Slice</h3>
              </div>
<form method="post" action="{{ action('TranchController@store') }}">
                        @csrf

                <div class="card-body">
                  <div class="form-group">
                    <label >Start Date </label>
                    <input type="date" class="form-control"  placeholder="date" name="date_deb">
                  </div>
                  <div class="form-group">
                    <label >End Date</label>
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
                    <label >Amount(TND)</label>
                    <input type="text" class="form-control"  placeholder="amount" name="montant">
                  </div>


                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                 <a href="{{url('tran_pro')}}" class="btn btn-default">Back</a>

                </div>
              </form>
              </div>
                            </div>

@endsection
