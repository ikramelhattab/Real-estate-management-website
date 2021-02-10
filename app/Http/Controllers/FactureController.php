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
use App\Facture;
use App\Compteur;
use DB;
use DateTime;
use Validator;


/**
 * @package App\Http\Controllers
 */
class FactureController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

public function facture_loc()
    {
    $factures = DB::table('factures')

     ->join('locales',  'factures.id_local', '=', 'locales.id')
     ->join('demandes', 'factures.id_local', '=', 'demandes.id_locale')
     ->join('types_compteurs', 'factures.id_type', '=', 'types_compteurs.id')
     ->join('users','demandes.id_user', '=','users.id')

     ->select('factures.*','locales.name_loc','demandes.id_locale','demandes.id_user','types_compteurs.type','demandes.status')
     ->get();
    return view('facture_loc',['factures'=> $factures]);
       }



       public function facture_pro()
    {


     $factures = DB::table('factures')
     ->join('locales',  'factures.id_local', '=', 'locales.id')
     ->join('users', 'factures.id_user', '=', 'users.id')
     ->join('types_compteurs', 'factures.id_type', '=', 'types_compteurs.id')

     ->select('factures.*', 'locales.name_loc','locales.id','users.name','factures.id','types_compteurs.type')
     ->get();
    return view('facture_pro',['factures'=> $factures]);

       }


 public function compteurs($id){
    $compteurs = DB::table('compteurs')->where('id', $id)->get();
    return response()->json($compteurs);
  }



/*
public function create(Request $request)
    {
 $factures = DB::table('factures')
     ->join('locales',  'factures.id_local', '=', 'locales.id')
     ->join('users', 'factures.id_user', '=', 'users.id')
    ->join('compteurs', 'factures.id_comp', '=', 'compteurs.id')
     ->select('factures.*', 'locales.name_loc','locales.id','users.name','compteurs.num_compteur')
     ->paginate(10);
    return view('facture_create',['factures'=> $factures]);

       }
 */

        public function create(Request $request)
    {

 $locales = DB::table('locales')->get();
 $typecomp = DB::table('types_compteurs')->get();

$factures = DB::table('factures')
    ->join('locales','factures.id_local', '=', 'locales.id')
    ->join('types_compteurs', 'factures.id_type', '=', 'types_compteurs.id')

     ->select('factures.*','locales.name_loc','locales.id','types_compteurs.type','types_compteurs.id' )
      ->get();

       return view('facture_create',[
        'typecomp'=> $typecomp,
        'factures'=> $factures,
        'locales'=> $locales,
       ]);

}




    /**
     * Show the application dashboard.
     *
     * @return Response
     */
  /*   public function index()
    {
        $factures = DB::table('factures')
            ->join('compteurs', 'factures.id_comp', '=', 'compteurs.id')
            ->select('factures.*', 'compteurs.num_compteur','compteurs.id_type','factures.id')
            ->get();
       return view('facture_pro',[
        'factures' => $factures,
    ]);

       } */










 public function store(Request $request)
    {

 $request->validate ([
'date_fact' =>'required',
'date_limite' =>'required',
'montant_fact' =>'required',
'photo' =>'required'
       ]);
        $date_fact = $request->get('date_fact');
        $date_limite = $request->get('date_limite');
        $montant_fact = $request->get('montant_fact');
        $photo = $request->get('photo');

        $id_type = $request->get('id_type');
        $id_user = Auth::user()->id;
        $id_local = $request->get('id_local');


$factures = DB::insert('insert into factures(date_fact,date_limite,montant_fact,photo,id_type,id_user,id_local)value(?,?,?,?,?,?,?)',[$date_fact, $date_limite,$montant_fact,$photo,$id_type,$id_user,$id_local]);

if($factures){
    $red=redirect('fact_pro')->with('reçu','facture ajouté');
}
else{
   $red=redirect('facture')->with('echec','facture non ajouté');
}
return $red;
    }


public function edit($id)
    {
$locales = DB::table('locales')->get();
 $typecomp = DB::table('types_compteurs')->get();
$factures = DB::table('factures')
    ->join('locales','factures.id_local', '=', 'locales.id')
    ->join('types_compteurs', 'factures.id_type', '=', 'types_compteurs.id')
     ->where('factures.id', [$id])

     ->select('factures.*','locales.name_loc','locales.id','types_compteurs.type','types_compteurs.id','factures.id')
     ->get();

       return view('factures_edit',[
        'typecomp'=> $typecomp,
        'factures'=> $factures,
        'locales'=> $locales,
       ]);
    }


public function update(Request $request, $id)
    {

$request->validate ([
'date_fact' =>'required',
'date_limite' =>'required',
'montant_fact' =>'required',
'photo' =>'required'
       ]);
         $date_fact = $request->get('date_fact');
        $date_limite = $request->get('date_limite');
        $montant_fact = $request->get('montant_fact');
        $photo = $request->get('photo');

        $id_type = $request->get('id_type');
        $id_user = Auth::user()->id;
        $id_local = $request->get('id_local');


$factures = DB::update('update factures set date_fact =?,date_limite =?,montant_fact =? ,photo =? where id=?',[$date_fact,$date_limite,$montant_fact,$photo,$id] );

if($factures){
    $red=redirect('fact_pro')->with('reçu',' ajouté');
}
else{
   $red=redirect('facture')->with('echec',' non ajouté');
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
        $factures = DB::delete('delete from factures where id=?',[$id]);
        $red =redirect('fact_pro');
          return $red;




}
}
