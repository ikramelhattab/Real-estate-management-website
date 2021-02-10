<?php

/*
 * Taken from
 * https://github.com/laravel/framework/blob/5.3/src/Illuminate/Auth/Console/stubs/make/controllers/HomeController.stub
 */

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Locale;
use App\Demande;
use App\Category;
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



    public function index()
    {

    $categorie = DB::table('locales')
            ->join('categories','locales.idCategorie','=','categories.id')
            ->join('users','locales.id_user','=','users.id')
            ->select('locales.*','categories.id','categories.slug','users.id','locales.id')
            ->get();

       return view('Locaux_list',[
        'categ' => $categorie,

    ]);

       }



  public function create(Request $request)
    {
    $categ = DB::table('categories')->get() ;
 $categorie = DB::table('locales')
            ->join('categories', 'locales.idCategorie', '=', 'categories.id')
            ->join('users', 'locales.id_user', '=', 'users.id')
            ->select('locales.*','categories.id', 'categories.slug','users.id')

             ->get();

       return view('Locaux_create',[
        'c' => $categorie,
        'categ' => $categ,


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
'prix_s' =>'required',
'prix_j' =>'required',
'prix_h' =>'required',

'cautionnement' =>'required',
'gouvernaurat' =>'required',
'adress' =>'required',
'Bedrooms' =>'required',
'Bathrooms' =>'required',
'Garages' =>'required',

]);
        $name_loc = $request->get('name_loc');
        $description = $request->get('description');
        $photo = '"C:\xampp3\htdocs\proj\public\images\uploads\2020\04\"'.$request->get('photo');
        $surface = $request->get('surface');
        $longitude = $request->get('longitude');
        $altitude = $request->get('altitude');
        $prix = $request->get('prix');
        $prix_s = $request->get('prix_s');
        $prix_j = $request->get('prix_j');
        $prix_h = $request->get('prix_h');

        $cautionnement = $request->get('cautionnement');
        $pays = "Tunisia";
        $gouvernaurat = $request->get('gouvernaurat');
        $adress = $request->get('adress');
        $Bedrooms = $request->get('Bedrooms');
        $Bathrooms = $request->get('Bathrooms');
        $Garages = $request->get('Garages');

        $id_user = Auth::user()->id;
        $idCategorie = $request->get('idCategorie');





        //$path_img=""+$photo

$locales = DB::insert('insert into locales(name_loc,description,photo,surface,longitude,altitude,prix,prix_s,prix_j,prix_h,cautionnement,pays,gouvernaurat,adress,Bedrooms,Bathrooms,Garages,id_user,idCategorie)value(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)',[$name_loc, $description,$photo,$surface,$longitude,$altitude,$prix,$prix_s,$prix_j,$prix_h,$cautionnement,$pays,$gouvernaurat,$adress,$Bedrooms,$Bathrooms,$Garages,$id_user,$idCategorie]);
if($locales) {
    $red=redirect('local')->with('reçu',' ajouté');
}
else {
   $red=redirect('local/create')->with('echec',' non ajouté');
}
return $red;
    }



public function edit($id)
    {
        $categ = DB::table('categories')
        ->get();

        $locales = DB::table('locales')
            ->join('categories', 'locales.idCategorie', '=', 'categories.id')
            //  ->join('users', 'locales.id_user', '=', 'users.id')
            ->select('locales.*','categories.slug','locales.id')
            ->where('locales.id', [$id])
            ->get();



       return view('Locaux_edit',[
           'locales'=>$locales,
            'categ' => $categ,


       ]);
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
'prix_s' =>'required',
'prix_j' =>'required',
'prix_h' =>'required',
'cautionnement' =>'required',
'pays' =>'required',
'gouvernaurat' =>'required',
'adress' =>'required',
'Bedrooms' =>'required',
'Bathrooms' =>'required',
'Garages' =>'required',

]);
        $name_loc = $request->get('name_loc');
        $description = $request->get('description');
        $photo = $request->get('photo');
        $surface = $request->get('surface');
        $longitude = $request->get('longitude');
        $altitude = $request->get('altitude');
        $prix = $request->get('prix');
         $prix_s = $request->get('prix_s');
        $prix_j = $request->get('prix_j');
        $prix_h = $request->get('prix_h');

        $cautionnement = $request->get('cautionnement');
        $pays = $request->get('pays');
        $gouvernaurat = $request->get('gouvernaurat');
        $adress = $request->get('adress');
        $Bedrooms = $request->get('Bedrooms');
        $Bathrooms = $request->get('Bathrooms');
        $Garages = $request->get('Garages');


        $idCategorie = $request->get('idCategorie');
        $id_user = Auth::user()->id;

$locales = DB::update('update locales set name_loc =?,description =?,photo =?,surface =?,longitude =?,altitude =?,prix =? ,prix_s =?,prix_j =? ,prix_h =?,cautionnement =?,pays =?,gouvernaurat =?,adress =?,Bedrooms =?,Bathrooms =?,Garages =?,id_user =? where id=?',[$name_loc, $description,$photo,$surface,$longitude,$altitude,$prix,$prix_s,$prix_j,$prix_h,$cautionnement,$pays,$gouvernaurat,$adress,$Bedrooms,$Bathrooms,$Garages,$id_user,$id] );

if($locales){
    $red=redirect('local')->with('reçu',' ajouté');
}
else{
   $red=redirect('local/echec')->with('echec','non ajouté');
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
 public function show()
    {

    }
}
