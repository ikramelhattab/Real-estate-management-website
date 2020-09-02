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

                            <h3><span>Edit Locale </span></h3>

 <div class="main">

                <div class="inner-wrapper">
                    						<div class="forms-simple">

                        <div class="row-fluid">

                            <div class="span12">
 @foreach($locales as $locales)

              <form role="form" action="{{ action('LocauxController@update',$locales->id) }}" method="post">
    @csrf
    @method('PUT')

                           <div class="form-group row">
                            <label class="col-md-12 col-form-label text-md-left">Categorie
                             <select name="id_categorie" >
                           @foreach($categ as $pro)
                          <option  value="{{$locales->slug}}">{{ $pro->slug }}</option>
                          @endforeach
                         </select>
                              </label></div>

                        <div class="form-group row">
                            <label class="col-md-12 col-form-label text-md-left ">Local Name
                                <input  class="form-control" type="text" name="name_loc" value="{{$locales->name_loc}}">
</label></div>




                        <div class="form-group row">
                            <label class="col-md-12 col-form-label text-md-left">Description
                                {!! Form::textarea('description', old('description'), ['class'=>'form-control']) !!}</label></div>


 <div class="form-group row">
                            <label class="col-md-12 col-form-label text-md-left">Photo
                               <input  class="form-control" type="file" name="photo" value="{{$locales->photo}}"></label></div>

 <div class="form-group row">
                            <label class="col-md-12 col-form-label text-md-left">Surface
                                <input  class="form-control" type="text" name="surface" value="{{$locales->surface}}"></label></div>

 <div class="form-group row">
                            <label class="col-md-12 col-form-label text-md-left">Longitude
                               <input  class="form-control" type="text" name="longitude" value="{{$locales->longitude}}"></label></div>

 <div class="form-group row">
                            <label class="col-md-12 col-form-label text-md-left">Altitude
                                <input  class="form-control" type="text" name="altitude" value="{{$locales->altitude}}"></label></div>

 <div class="form-group row">
                            <label class="col-md-12 col-form-label text-md-left">Price
                               <input  class="form-control" type="text" name="prix" value="{{$locales->prix}}"></label></div>

 <div class="form-group row">
                            <label class="col-md-12 col-form-label text-md-left">Cautionnement
                                <input  class="form-control" type="text" name="cautionnement" value="{{$locales->cautionnement}}"></label></div>

 <div class="form-group row">
                            <label class="col-md-12 col-form-label text-md-left">Pays
                               <input  class="form-control" type="text" name="pays" value="{{$locales->pays}}"></label></div>

 <div class="form-group row">
                            <label class="col-md-12 col-form-label text-md-left">Gouvernaurat
                               <input  class="form-control" type="text" name="gouvernaurat" value="{{$locales->gouvernaurat}}"></label></div>

 <div class="form-group row">
                            <label class="col-md-12 col-form-label text-md-left">Adress
                                <input  class="form-control" type="text" name="adress" value="{{$locales->adress}}"></label></div>

 <div class="form-group row">
                            <label class="col-md-12 col-form-label text-md-left">Bedrooms
                               <input  class="form-control" type="text" name="Bedrooms" value="{{$locales->Bedrooms}}"></label></div>

 <div class="form-group row">
                            <label class="col-md-12 col-form-label text-md-left">Bathrooms
                                <input  class="form-control" type="text" name="Bathrooms" value="{{$locales->Bathrooms}}"></label></div>

                                 <div class="form-group row">
                            <label class="col-md-12 col-form-label text-md-left">Garages
                              <input  class="form-control" type="text" name="Garages" value="{{$locales->Garages}}"></label></div>






                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-8">
                               <button type="submit" class="btn btn-primary" type="submit">Update</button>
                             <a href="{{action('LocauxController@index')}}" class="btn btn-default">Back</a>
                            </div>
                        </div>
                               </form>
                                           @endforeach

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

