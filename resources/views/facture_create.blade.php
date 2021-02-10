@extends('layouts.app_pro')

@section('content')


<head>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
        <script src="{{asset('plugins/repeater/repeater.js')}}"></script>

</head>
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
                <h3 class="card-title">Create Invoice</h3>
              </div>

                <div class="card-body">
<form  method="POST" action="{{ url('/facture/save')}}" role="form" id="formulaire">
  @csrf


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



        <select name="id_type" class="input-lg">
                          @foreach($typecomp as $c)
                          <option  value="{{$c->id}}">{{$c->type}}</option>
                          @endforeach

                         </select>




                    <input type="text" class="input-lg" id="montant_fact" placeholder="invoice amount" name="montant_fact">
                    <input type="date" class="input-lg" id="date_fact" placeholder="invoice date" name="date_fact">
                    <input type="date" class="input-lg" id="date_limite" placeholder="deadline date"  name="date_limite" >
                    <input type="file" class="input-lg" id="photo" placeholder="photo"  name="photo" ><br>



                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" id="submit" name="submit">Submit</button>
                         <a href="{{url('fact_pro')}}" class="btn btn-default">Back</a>
                </div>

              </form>
              </div>
              </div>

@endsection
