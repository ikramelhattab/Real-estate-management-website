@extends('layouts.app_pro')

@section('content')

<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Create Inovoice</h3>
              </div>
<form  method="POST" action="{{ action('FactureController@store') }}">
                        @csrf

                <div class="card-body">
                  <div class="form-group">
                  <div class="input-group input-group-sm">


                    <label >Date</label>
                    <input type="date" class="form-control" id="date" placeholder="date"  name="date">
                  </div>
                  <div class="form-group">
                    <label >Local Name</label>

                    <input type="text" name="name_loc" id="" class="form-control" placeholder="" value="">
                  </div>
                  <div class="form-group">
                    <label >Name</label>
                    <input type="text" class="form-control"  placeholder="" name="name" id="name">
                  </div>
                  <div class="form-group">
                    <label >Facture GAZ</label>
                    <input type="file" class="form-control" id="fact_GAZ" placeholder="" name="fact_GAZ">
                  </div>
                   <div class="form-group">
                    <label >Facture EAU</label>
                    <input type="file" class="form-control" id="fact_EAU" placeholder="" name="fact_EAU">
                  </div>
                 <div class="form-group">
                    <label >Facture Electricity</label>
                    <input type="file" class="form-control" id="fact_Elec" placeholder=""  name="fact_Elec" >
                  </div>


                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
              </div>
@endsection
