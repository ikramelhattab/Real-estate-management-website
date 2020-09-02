<?php

/*
 * Taken from
 * https://github.com/laravel/framework/blob/5.3/src/Illuminate/Auth/Console/stubs/make/controllers/HomeController.stub
 */

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Locale;
use App\Facture;
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
     ->join('users', 'factures.id_user', '=', 'users.id')
     ->select('factures.*', 'locales.name_loc','locales.id','users.name' )
     ->paginate(10);
    return view('facture_loc',['factures'=> $factures]);

       }
       public function facture_pro()
    {


$factures = DB::table('factures')
     ->join('locales',  'factures.id_local', '=', 'locales.id')
     ->join('users', 'factures.id_user', '=', 'users.id')
     ->select('factures.*', 'locales.name_loc','locales.id','users.name')
     ->paginate(10);
    return view('facture_pro',['factures'=> $factures]);

       }



 public function local($id){
    $local = DB::table('locales')->where('id', $id)->get();
    return response()->json($local);
  }

 public function postCreate(Request $request){
    $data = $request->all();
    $id_local = $data['id_local'];
    $items = json_encode($data['category-group']);
    $factures =DB::insert('insert into factures(items,id_local)value(?,?)',[$items,$id_local]);

    var_dump($items);
  }
public function create(Request $request)
    {
 $factures = DB::table('factures')
     ->join('locales',  'factures.id_local', '=', 'locales.id')
     ->join('users', 'factures.id_user', '=', 'users.id')
     ->select('factures.*', 'locales.name_loc','locales.id','users.name' )
     ->paginate(10);
    return view('facture_create',['factures'=> $factures]);

       }

  public function creat(Request $request)
    {
        $local = DB::table('locales')->get();
        $autocomplete = [];
        foreach($local as $c){
            $autocomplete[] = [
                'value' =>  $c->name_loc,
                'data'  =>  $c->id
            ];
        }

        $autocomplete_json = json_encode($autocomplete);


       return view('facture_create',[
        'autocomplete' => $autocomplete_json,

    ]);

}
    /**
     * Show the application dashboard.
     *
     * @return Response
     */
    public function index()
    {



       }









 public function store(Request $request)
    {

$request->validate ([
'date' =>'required',
'fact_GAZ' =>'required',
'fact_EAU' =>'required',
'fact_Elec' =>'required',
]);
        $date = $request->get('date');
        $fact_GAZ = $request->get('fact_GAZ');
        $fact_EAU = $request->get('fact_EAU');
        $fact_Elec = $request->get('fact_Elec');





$factures = DB::insert('insert into factures(date,fact_GAZ,fact_EAU,fact_Elec)value(?,?,?,?)',[$date, $fact_GAZ,$fact_EAU,$fact_Elec]);
if($factures){
    $red=redirect('factures')->with('reçu',' ajouté');
}
else{
   $red=redirect('factures/create')->with('echec',' non ajouté');
}
return $red;


    }



public function edit($id)
    {
        $factures=DB::select('select * from factures where id=?',[$id]);
        return view('factures_edit',['factures'=>$factures]);
    }


public function update(Request $request, $id)
    {
$request->validate ([

'date' =>'required',
'fact_GAZ' =>'required',
'fact_EAU' =>'required',
'fact_Elec' =>'required',
]);
        $date = $request->get('date');
        $fact_GAZ = $request->get('fact_GAZ');
        $fact_EAU = $request->get('fact_EAU');
        $fact_Elec = $request->get('fact_Elec');

$factures = DB::update('update factures set date =?,fact_GAZ =?,fact_EAU =?,fact_Elec =? where id=?',[$date, $fact_GAZ,$fact_EAU,$fact_Elec,$id] );

if($factures){
    $red=redirect('factures')->with('reçu',' ajouté');
}
else{
   $red=redirect('factures/edit')->with('echec','non ajouté');
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
        $red =redirect('facture');
          return $red;

    }


}
