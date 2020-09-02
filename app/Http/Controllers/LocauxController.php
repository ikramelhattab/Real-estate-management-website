<?php

/*
 * Taken from
 * https://github.com/laravel/framework/blob/5.3/src/Illuminate/Auth/Console/stubs/make/controllers/HomeController.stub
 */

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Locale;
use App\Demande;
use DB;
use DateTime;
use Validator;


/**
 * @package App\Http\Controllers
 */
class LocauxController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }



    /**
     * Show the application dashboard.
     *
     * @return Response
     */
    public function index()
    {

    $categorie = DB::table('locales')
            ->join('categories', 'locales.idCategorie', '=', 'categories.id')
            ->join('users', 'locales.id_user', '=', 'users.id')
            ->select('locales.*', 'categories.slug','users.id')->paginate(10);

       return view('Locaux_list',[
        'categ' => $categorie,
    ]);

       }



  public function create(Request $request)
    {
 $categorie = DB::table('locales')
            ->join('categories', 'locales.idCategorie', '=', 'categories.id')
            ->join('users', 'locales.id_user', '=', 'users.id')
            ->select('locales.*', 'categories.slug','users.id')->paginate(10);

       return view('Locaux_create',[
        'categ' => $categorie,
    ]);

    }



 public function store(Request $request)
    {

$request->validate ([
'name_loc' =>'required',
'description' =>'required',
'photo' =>'required',
'surface' =>'required',
'longitude' =>'required',
'altitude' =>'required',
'prix' =>'required',
'cautionnement' =>'required',
'pays' =>'required',
'gouvernaurat' =>'required',
'adress' =>'required',
'Bedrooms' =>'required',
'Bathrooms' =>'required',
'Garages' =>'required',
'idCategorie' =>'required',
/* 'id_user' =>'required',
 */
]);
        $name_loc = $request->get('name_loc');
        $description = $request->get('description');
        $photo = $request->get('photo');
        $surface = $request->get('surface');
        $longitude = $request->get('longitude');
        $altitude = $request->get('altitude');
        $prix = $request->get('prix');
        $cautionnement = $request->get('cautionnement');
        $pays = $request->get('pays');
        $gouvernaurat = $request->get('gouvernaurat');
        $adress = $request->get('adress');
        $Bedrooms = $request->get('Bedrooms');
        $Bathrooms = $request->get('Bathrooms');
        $Garages = $request->get('Garages');
       /*  $idCategorie = $request->get('idCategorie'); */
      /*   $name_user = Auth::user()->id;
        $id_user = $request->get(' name_user');
 */




$locales = DB::insert('insert into locales(name_loc,description,photo,surface,longitude,altitude,prix,cautionnement,pays,gouvernaurat,adress,Bedrooms,Bathrooms,Garages)value(?,?,?,?,?,?,?,?,?,?,?,?,?,?)',[$name_loc, $description,$photo,$surface,$longitude,$altitude,$prix,$cautionnement,$pays,$gouvernaurat,$adress,$Bedrooms,$Bathrooms,$Garages]);
if($locales){
    $red=redirect('local')->with('reçu',' ajouté');
}
else{
   $red=redirect('local/create')->with('echec',' non ajouté');
}
return $red;


    }



public function edit($id)
    {

        $locales = DB::table('locales')
            ->join('categories', 'locales.idCategorie', '=', 'categories.id')
            ->join('users', 'locales.id_user', '=', 'users.id')
            ->select('locales.*', 'categories.slug','users.id')
            ->where('locales.id', $id)

            ->get();

       return view('Locaux_edit',['locales'=>$locales]);
    }


public function update(Request $request, $id)
    {


$request->validate ([
'name_loc' =>'required',
'description' =>'required',
'photo' =>'required',
'surface' =>'required',
'longitude' =>'required',
'altitude' =>'required',
'prix' =>'required',
'cautionnement' =>'required',
'pays' =>'required',
'gouvernaurat' =>'required',
'adress' =>'required',
'Bedrooms' =>'required',
'Bathrooms' =>'required',
'Garages' =>'required',
'idCategorie' =>'required',
'id_user' =>'required',
]);
        $name_loc = $request->get('name_loc');
        $description = $request->get('description');
        $photo = $request->get('photo');
        $surface = $request->get('surface');
        $longitude = $request->get('longitude');
        $altitude = $request->get('altitude');
        $prix = $request->get('prix');
        $cautionnement = $request->get('cautionnement');
        $pays = $request->get('pays');
        $gouvernaurat = $request->get('gouvernaurat');
        $adress = $request->get('adress');
        $Bedrooms = $request->get('Bedrooms');
        $Bathrooms = $request->get('Bathrooms');
        $Garages = $request->get('Garages');
        $idCategorie = $request->get('idCategorie');
       $id_user = $request->get('id_user');


$locales = DB::update('update locales set name_loc =?,description =?,photo =?,surface =?,longitude =?,altitude =?,prix =?,cautionnement =?,pays =?,gouvernaurat =?,adress =?,Bedrooms =?,Bathrooms =?,Garages =? where id=?',[$name_loc, $description,$photo,$surface,$longitude,$altitude,$prix,$cautionnement,$pays,$gouvernaurat,$adress,$Bedrooms,$Bathrooms,$Garages,$id] );

if($locales){
    $red=redirect('locale')->with('reçu',' ajouté');
}
else{
   $red=redirect('local/edit')->with('echec','non ajouté');
}
return $red;

    }


     /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $locales = DB::delete('delete from locales where id=?',[$id]);
        $red =redirect('local');
          return $red;
    }


}
