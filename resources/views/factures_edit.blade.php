@extends('layouts.app_pro')

@section('content')

<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Inovoice</h3>
              </div>
               @foreach($factures as $factures)

<form  method="POST" action="{{ action('FactureController@update',$factures->id) }}" >
     @csrf
    @method('PUT')

                <div class="card-body">
                  <div class="form-group">
                    <label >Date</label>
                    <input type="date" class="form-control" id="" placeholder="date" value="{{$factures->date}}">
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
                    <label >Facture GAZ</label>
                    <input type="file" class="form-control" id="" placeholder="" value="{{$factures->fact_GAZ}}">
                  </div>
                   <div class="form-group">
                    <label >Facture EAU</label>
                    <input type="file" class="form-control" id="" placeholder="" value="{{$factures->fact_EAU}}">
                  </div>
                 <div class="form-group">
                    <label >Facture Electricity</label>
                    <input type="file" class="form-control" id="" placeholder="" value="{{$factures->fact_Elec}}">
                  </div>


                <div class="card-footer">
                    <button type="submit" class="btn btn-primary" type="submit">Update</button>

                             <a href="{{action('FactureController@index')}}" class="btn btn-default">Back</a>
                </div>
              </form>
                                                         @endforeach

              </div>
@endsection
