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
            <div class="box-header with-border">
              <h3 class="box-title">Edit Invoice</h3>
            </div>

          <div class="box-body">
               @foreach($factures as $factures)

              <form role="form" action="{{ action('FactureController@update', $factures->id) }}" method="post">

     @csrf
    @method('PUT')
                <div class="card-body">
                <div class="form-group">
                    <label >Local Name</label>
             <input  class="form-control" type="text" name="id_local" value="{{$factures->name_loc}}" disabled="true">


                  </div>

                 <input  class="input-lg" type="text" name="id_type" value="{{$factures->type}}" disabled="true">



                    <input type="text" class="input-lg" id="montant_fact" placeholder="amount invoice" name="montant_fact" value="{{$factures->montant_fact}}">
                    <input type="date" class="input-lg" id="date_fact" placeholder="date_invoice" name="date_fact" value="{{$factures->date_fact}}">
                    <input type="date" class="input-lg" id="date_limite" placeholder="date_deadline"  name="date_limite" value="{{$factures->date_limite}}" >
                    <img src="\images\uploads\2020\04\{{ $factures->photo}}"/>

                    <input type="file" class="input-lg" id="photo" placeholder="photo"  name="photo" value="{{$factures->photo}}" ><br>

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary" type="submit">Update</button>

                             <a href="{{url('fact_pro')}}" class="btn btn-default">Back</a>
                </div>


              </div>
</form>
                                                         @endforeach

</div>
</div>

@endsection
