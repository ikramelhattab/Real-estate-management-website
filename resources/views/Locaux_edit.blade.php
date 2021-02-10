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
                <h3 class="card-title">Edit Local</h3>
                </div>


               <div class="card-body">
 @foreach($locales as $locales)

              <form role="form" action="{{ action('LocauxController@update',$locales->id) }}" method="post">
    @csrf
    @method('PUT')

                           <div class="form-group row">
                           <label class="col-md-12 col-form-label">Category
                       <!--       <select name="idCategories" disabled="true">
                        <option value="{{$locales->id}}" >{{$locales->slug}}</option>

 @foreach($categ as $categ)

                          <option value="{{$categ->id}}" >{{$categ->slug}}</option>
@endforeach
                         </select> -->
   <input  class="form-control" type="text" name="idCategories" value="{{$locales->slug}}" disabled="true"></label></div>


                        <div class="form-group row">
                       <label class="col-md-12 col-form-label">Local Name
                        <input  class="form-control" type="text" name="name_loc" value="{{$locales->name_loc}}"></label></div>




                        <div class="form-group row">
                            <label class="col-md-12 col-form-label">Description
           <input  class="form-control" type="text" name="description" value="{{$locales->description}}"></label></div>

 <div class="form-group row">
                           <label class="col-md-12 col-form-label ">Photos
                                                <img src="\images\uploads\2020\04\{{ $locales->photo}}"/>
                               <input  class="form-control" type="file" name="photo" multiple="multiple" value="{{$locales->photo}}"></label></div>

 <div class="form-group row">
                           <label class="col-md-12 col-form-label ">Area (m²)
                                <input  class="form-control" type="text" name="surface" value="{{$locales->surface}}"></label></div>

 <div class="form-group row">
                           <label class="col-md-12 col-form-label ">Longitude
                               <input  class="form-control" type="text" name="longitude" value="{{$locales->longitude}}"></label></div>

 <div class="form-group row">
                           <label class="col-md-12 col-form-label ">Altitude
                                <input  class="form-control" type="text" name="altitude" value="{{$locales->altitude}}"></label></div>

                             <div class="form-group row">
                           <label class="col-md-12 col-form-label ">Price TND/Month
                               <input  class="form-control" type="text" name="prix" value="{{$locales->prix}}"></label></div>

                               <div class="form-group row">
                           <label class="col-md-12 col-form-label ">Price TND/Week
                               <input  class="form-control" type="text" name="prix_s" value="{{$locales->prix_s}}"></label></div>

                               <div class="form-group row">
                           <label class="col-md-12 col-form-label ">Price TND/Day
                               <input  class="form-control" type="text" name="prix_j" value="{{$locales->prix_j}}"></label></div>

                               <div class="form-group row">
                           <label class="col-md-12 col-form-label ">Price TND/Hour
                               <input  class="form-control" type="text" name="prix_h" value="{{$locales->prix_h}}"></label></div>

 <div class="form-group row">
                           <label class="col-md-12 col-form-label ">Cautionnement
                                <input  class="form-control" type="text" name="cautionnement" value="{{$locales->cautionnement}}"></label></div>

 <div class="form-group row">
                           <label class="col-md-12 col-form-label ">Country
                               <input  class="form-control" type="text" name="pays" value="{{$locales->pays}}"></label></div>

 <div class="form-group row">
                           <label class="col-md-12 col-form-label ">Governorate
                               <input  class="form-control" type="text" name="gouvernaurat" value="{{$locales->gouvernaurat}}"></label></div>

 <div class="form-group row">
                            <label class="col-md-12 col-form-label ">Adress
                                <input  class="form-control" type="text" name="adress" value="{{$locales->adress}}"></label></div>

 <div class="form-group row">
                           <label class="col-md-12 col-form-label ">Bedrooms
                               <input  class="form-control" type="text" name="Bedrooms" value="{{$locales->Bedrooms}}"></label></div>

 <div class="form-group row">
                          <label class="col-md-12 col-form-label ">Bathrooms
                                <input  class="form-control" type="text" name="Bathrooms" value="{{$locales->Bathrooms}}"></label></div>

                                 <div class="form-group row">
                            <label class="col-md-12 col-form-label ">Garages
                              <input  class="form-control" type="text" name="Garages" value="{{$locales->Garages}}"></label></div>



                         <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-8">

                               <button class="btn btn-primary" type="submit">Update</button>
                             <a href="{{action('LocauxController@index')}}" class="btn btn-default">Back</a>
                            </div>
                        </div>
                               </form>
                                           @endforeach

           </div>
            </div>
            </div>

@endsection

