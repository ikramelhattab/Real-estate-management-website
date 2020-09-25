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


    <div class="repeater">
    <div data-repeater-list="category-group">
        <div data-repeater-item >
        <select name="id_type" class="input-lg">
                          @foreach($typecomp as $c)
                          <option  value="{{$c->id}}">{{$c->type}}</option>
                          @endforeach

                         </select>
                        @if ( $loc->id_user == (Auth::user()->id))

                       @foreach($compteurs as $c)

                    <input type="text" class="input-lg" value="{{$c->num_compteur}}" placeholder="compteur num" name="id_comp">


                    <input type="text" class="input-lg" id="montant_fact" placeholder="montant_fact" name="montant_fact">
                    <input type="date" class="input-lg" id="date_fact" placeholder="date_fact" name="date_fact">
                    <input type="date" class="input-lg" id="date_limite" placeholder="date_limite"  name="date_limite" >
                    <input type="file" class="input-lg" id="photo" placeholder="photo"  name="photo" ><br>

                          @endforeach

@endif
<input  data-repeater-delete class="delete-modal btn btn-danger btn-lg " value="-" type="button" />
      </div>
    </div>
    <input data-repeater-create class="btn btn-primary glyphicon glyphicon-plus" value="+" type="button" />
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" id="submit" name="submit">Submit</button>
                         <a href="{{action('FactureController@index')}}" class="btn btn-default">Back</a>
                </div>

              </form>
              </div>
              </div>






<div class="items" data-group="test">
  <!-- Repeater Content -->
  <div class="item-content">


 <div class="form-group">
<div class="col-lg-10">
 <select name="id_type" class="input-lg">
      @foreach($typecomp as $c)
     <option  value="{{$c->id}}">{{$c->type}}</option>
     @endforeach
</select>
 </div>
</div>



     <div class="form-group">
      <div class="col-lg-10">
                       @foreach($compteurs as $c)
                    <input type="text" class="input-lg" value="{{$c->num_compteur}}" placeholder="compteur num" name="id_comp">
                       @endforeach
      </div>
    </div>

     <div class="form-group">

 <input type="text" class="input-lg" id="montant_fact" placeholder="montant_fact" name="montant_fact">
      </div>

<div class="form-group">
<input type="date" class="input-lg" id="date_fact" placeholder="date_fact" name="date_fact">
      </div>

<div class="form-group">
 <input type="date" class="input-lg" id="date_limite" placeholder="date_limite"  name="date_limite" >
    </div>

<div class="form-group">
 <input type="file" class="input-lg" id="photo" placeholder="photo"  name="photo" ><br>
  </div>
  </div>


  <!-- Repeater Remove Btn -->
  <div class="pull-right repeater-remove-btn">
      <button id="remove-btn" class="btn btn-danger" onclick="$(this).parents('.items').remove()">
          Remove
      </button>
  </div>
</div>


<div id="repeater">
  <!-- Repeater Heading -->
  <div class="repeater-heading">
      <button class="btn btn-primary repeater-add-btn">
          Add
      </button>
  </div>
  <!-- Repeater Items -->
  <div class="items" data-group="test">
    <!-- Repeater Items Here -->
  </div>
</div>


<script>

 $("#repeater").createRepeater({
            showFirstItemToDefault: true,
        });
</script>

@endsection
