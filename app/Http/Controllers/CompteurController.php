<?php

/*
 * Taken from
 * https://github.com/laravel/framework/blob/5.3/src/Illuminate/Auth/Console/stubs/make/controllers/HomeController.stub
 */

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Locale;
use App\Compteur;
use DB;
use DateTime;
use Validator;


/**
 * @package App\Http\Controllers
 */
class CompteurController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

/* public function compteur_loc()
    {

$compteurs = DB::table('compteurs')
     ->join('locales',  'compteurs.id_local', '=', 'locales.id')
     ->join('users', 'compteurs.id_user', '=', 'users.id')
     ->join('types_compteurs', 'compteurs.id_comp', '=', 'types_compteurs.id')
     ->select('compteurs.*', 'locales.name_loc','locales.id','users.name' )
     ->paginate(10);
    return view('compteur_loc',['compteurs'=> $compteurs]);



       } */

       public function compteur_pro()
    {


    $compteurs = DB::table('compteurs')
     ->join('locales',  'compteurs.id_local', '=', 'locales.id')
    ->join('types_compteurs', 'compteurs.id_type', '=', 'types_compteurs.id')
     ->select('compteurs.*', 'locales.name_loc','locales.id','types_compteurs.type','compteurs.id' )
     ->get();
    return view('compteur_pro',['compteurs'=> $compteurs]);



       }


    /**
     * Show the application dashboard.
     *
     * @return Response
     */
    public function index()
    {



       }

 public function locale($id){
    $locale = DB::table('locales')->where('id', $id)->get();
    return response()->json($locale);
  }

  public function postCreate(Request $request){
    $data = $request->all();
    $id_local = $data['id_local'];
    $items = json_encode($data['category-group']);
    $compteurs =DB::insert('insert into compteurs(items,id_local)value(?,?)',[$items,$id_local]);

    //var_dump($items);
  }

  public function create(Request $request)
    {

 $locales = DB::table('locales')->get();
  $typecomp = DB::table('types_compteurs')->get();

       /*  $autocomplete = [];
        foreach($locales as $c){
            $autocomplete[] = [
                'value' =>  $c->name_loc,
                'data'  =>  $c->id
            ];
        }

        $autocomplete_json = json_encode($autocomplete); */
 $compteurs = DB::table('compteurs')
     ->join('locales',  'compteurs.id_local', '=', 'locales.id')
    ->join('types_compteurs', 'compteurs.id_type', '=', 'types_compteurs.id')
     ->select('compteurs.*', 'locales.name_loc','locales.id','types_compteurs.type' )
      ->get();

       return view('compteur_create',[
        'compteurs'=> $compteurs,
        'locales'=> $locales,
        'typecomp'=> $typecomp,


    ]);

    }



 public function store(Request $request)
    {


$request->validate ([
'num_compteur' =>'required',
'date' =>'required',
 'photo' =>'required',


]);
        $num_compteur = $request->get('num_compteur');
        $id_type = $request->get('id_type');
        $id_local = $request->get('id_local');
        $date = $request->get('date');
        $photo = $request->get('photo');
        $id_user = Auth::user()->id;



$compteurs = DB::insert('insert into compteurs(num_compteur,date,photo,id_local,id_user,id_type)value(?,?,?,?,?,?)',[$num_compteur,$date,$photo,$id_local,$id_user,$id_type]);
if($compteurs){
    $red=redirect('comp_pro')->with('reçu',' ajouté');
}
else{
   $red=redirect('comp/create')->with('echec',' non ajouté');
}
return $red;


    }



public function edit($id)
    {
        $compteurs = DB::table('compteurs')
    ->join('locales',  'compteurs.id_local', '=', 'locales.id')
    ->join('types_compteurs', 'compteurs.id_type', '=', 'types_compteurs.id')
    ->select('compteurs.*', 'locales.name_loc','types_compteurs.type','compteurs.id' )
     ->where('compteurs.id', [$id])
      ->get();
   $locales = DB::table('locales')
   ->get();
   $typecomp = DB::table('types_compteurs')
   ->get();
        return view('compteurs_edit',
        [
            'compteurs'=>$compteurs,
             'locales'=> $locales,
             'typecomp'=> $typecomp,
            ]);

    }


public function update(Request $request, $id)
    {

$request->validate ([
'num_compteur' =>'required',
'date' =>'required',
'photo' =>'required',


]);
        $num_compteur = $request->get('num_compteur');
        $id_type = $request->get('id_type');
        $id_local = $request->get('id_local');
        $date = $request->get('date');
        $photo = $request->get('photo');
        $id_user = Auth::user()->id;


$compteurs = DB::update('update compteurs set num_compteur =?,date =?,photo =? where id=?',[$num_compteur,$date,$photo,$id] );

if($compteurs){
    $red=redirect('comp_pro')->with('reçu',' ajouté');
}
else{
   $red=redirect('comp/echec')->with('echec',' non ajouté');
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
        $compteurs = DB::delete('delete from compteurs where id=?',[$id]);
        $red =redirect('comp_pro');
          return $red;

    }
 public function show()
    {

    }

}
