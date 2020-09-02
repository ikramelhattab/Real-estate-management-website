@extends('layouts.app_pro')

@section('content')

<div class="container">
<div class="section-content">

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
<div class="container contents single login-register">
    <div class="row">
        <div class="span12 main-wrap">

                            <h3><span>Create Locale </span></h3>

 <div class="main">

                <div class="inner-wrapper">
                    						<div class="forms-simple">

                        <div class="row-fluid">

                            <div class="span12">
<form method="POST" action="{{ action('LocauxController@store') }}">
                        @csrf


                           <div class="form-group row">
                            <label class="col-md-12 col-form-label text-md-right">Categorie
                             <select name="id_categorie">
                           @foreach($categ as $pro)
                          <option>{{ $pro->slug }}</option>
                          @endforeach
                         </select>
                              </label></div>

                        <div class="form-group row">
                            <label class="col-md-12 col-form-label ">Local Name
                                <input  class="form-control" type="text" name="name_loc">
</label></div>




                        <div class="form-group row">
                            <label class="col-md-12 col-form-label text-md-left">Description
                                {!! Form::textarea('description', old('description'), ['class'=>'form-control']) !!}</label></div>


 <div class="form-group row">
                            <label class="col-md-12 col-form-label text-md-left">Photo
                               <input  class="form-control" type="file" name="photo"></label></div>

 <div class="form-group row">
                            <label class="col-md-12 col-form-label text-md-left">Surface
                                <input  class="form-control" type="text" name="surface"></label></div>

 <div class="form-group row">
                            <label class="col-md-12 col-form-label text-md-left">Longitude
                               <input  class="form-control" type="text" name="longitude"></label></div>

 <div class="form-group row">
                            <label class="col-md-12 col-form-label text-md-left">Altitude
                                <input  class="form-control" type="text" name="altitude"></label></div>

 <div class="form-group row">
                            <label class="col-md-12 col-form-label text-md-left">Price
                               <input  class="form-control" type="text" name="prix"></label></div>

 <div class="form-group row">
                            <label class="col-md-12 col-form-label text-md-left">Cautionnement
                                <input  class="form-control" type="text" name="cautionnement"></label></div>

 <div class="form-group row">
                            <label class="col-md-12 col-form-label text-md-left">Pays
                               <input  class="form-control" type="text" name="pays"></label></div>

 <div class="form-group row">
                            <label class="col-md-12 col-form-label text-md-left">Gouvernaurat
                               <input  class="form-control" type="text" name="gouvernaurat"></label></div>

 <div class="form-group row">
                            <label class="col-md-12 col-form-label text-md-left">Adress
                                <input  class="form-control" type="text" name="adress"></label></div>

 <div class="form-group row">
                            <label class="col-md-12 col-form-label text-md-left">Bedrooms
                               <input  class="form-control" type="text" name="Bedrooms"></label></div>

 <div class="form-group row">
                            <label class="col-md-12 col-form-label text-md-left">Bathrooms
                                <input  class="form-control" type="text" name="Bathrooms"></label></div>

                                 <div class="form-group row">
                            <label class="col-md-12 col-form-label text-md-left">Garages
                              <input  class="form-control" type="text" name="Garages"></label></div>






                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-8">


                                <button type="submit" class="btn btn-primary">
                                   Submit
                                </button>

                                <button type="submit" class="btn btn-primary">
                                <a href="{{action('LocauxController@index')}}" >Back</a>

                                </button>
                            </div>
                        </div>
                    </form>
            </div>
            </div>
            </div>
            </div>
            </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div></div>
            </div>
            </div>
@endsection

