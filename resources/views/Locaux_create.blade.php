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
                <h3 class="card-title">Create Local</h3>
                </div>

                <div class="card-body">

<form role="form" method="post" action="{{ action('LocauxController@store') }}" >
                        @csrf
                           <div class="form-group row">
                            <label class="col-md-12 col-form-label" >Category
                             <select name="idCategorie" >
                          @foreach($categ as $cat)
                          <option  value="{{$cat->id}}">{{$cat->slug}}</option>
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
                            <label class="col-md-12 col-form-label text-md-left">Photos
                               <!-- <input type="file" name="photo"></label></div> -->
                     <div class="row">
                <img style="width:50px" src="\images\uploads\2020\04\" class="attachment-property-thumb-image size-property-thumb-image wp-post-image" alt="" srcset=""  />            </a></li>
                <img style="width:50px" src="\images\uploads\2020\04\photo[]" class="attachment-property-thumb-image size-property-thumb-image wp-post-image" alt="" srcset="" />            </a></li>
                <img style="width:50px" src="\images\uploads\2020\04\" class="attachment-property-thumb-image size-property-thumb-image wp-post-image" alt="" srcset="" />            </a></li>
                             <input required="" type="file" name="photo" multiple="multiple" accept="images/*"></label></div>

                            <div class="form-group row">
                            <label class="col-md-12 col-form-label text-md-left">Area (m²)
                                <input  class="form-control" type="text" name="surface"></label></div>

                             <div class="form-group row">
                            <label class="col-md-12 col-form-label text-md-left">Longitude
                               <input  class="form-control" type="text" name="longitude"></label></div>

                            <div class="form-group row">
                            <label class="col-md-12 col-form-label text-md-left">Altitude
                                <input  class="form-control" type="text" name="altitude"></label></div>

                            <div class="form-group row">
                            <label class="col-md-12 col-form-label text-md-left">Price TND/Month
                               <input  class="form-control" type="text" name="prix"></label></div>

                                <div class="form-group row">
                            <label class="col-md-12 col-form-label text-md-left">Price TND/Week
                               <input  class="form-control" type="text" name="prix_s"></label></div>

                                <div class="form-group row">
                            <label class="col-md-12 col-form-label text-md-left">Price TND/Day
                               <input  class="form-control" type="text" name="prix_j"></label></div>

                                <div class="form-group row">
                            <label class="col-md-12 col-form-label text-md-left">Price TND/Hour
                               <input  class="form-control" type="text" name="prix_h"></label></div>

                            <div class="form-group row">
                            <label class="col-md-12 col-form-label text-md-left">Cautionnement
                                <input  class="form-control" type="text" name="cautionnement"></label></div>

                             <div class="form-group row">
                            <label class="col-md-12 col-form-label text-md-left">Country
                               <input  class="form-control" type="text" name="pays" value="Tunisia" disabled="true"></label></div>

                             <div class="form-group row">
                            <label class="col-md-12 col-form-label text-md-left">Governorate
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

                                <a href="{{action('LocauxController@index')}}" class="btn btn-default" >Back</a>


                            </div>
                        </div>
                    </form>
            </div>
            </div>

</div>

@endsection

