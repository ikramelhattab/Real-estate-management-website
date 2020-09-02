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
 * Class HomeController
 * @package App\Http\Controllers
 */
class TestController extends Controller
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

    $demandes = DB::table('demandes')
     ->join('locales',  'demandes.id_locale', '=', 'locales.id')
     ->join('users', 'demandes.id_user', '=', 'users.id')
     ->select('demandes.*', 'locales.name_loc','locales.id','users.name' )

     ->paginate(10);
    return view('DemandeLocataire',['demandes'=> $demandes]);
  }





public function updateProductStatus(Request $request)
    {
        if( $request->ajax())
        {
            $data = $request->all();
            if($data['status'] == "Active"){
               $status = 0;
            }
            else {
             $status = 1;
            }
            Demande::where ('id',$data['id_locale'])->update(['status'=>  $status]);
        }

    return response()->json(['status'=>  $status,'id_locale'=>$data['id_locale']]);
    }



 public function list_demande()
    {

    $demandes = DB::table('demandes')
     ->join('locales',  'demandes.id_locale', '=', 'locales.id')
     ->join('users', 'demandes.id_user', '=', 'users.id')
     ->select('demandes.*', 'locales.name_loc','users.name' )

     ->paginate(10);
    return view('list_demande',['demandes'=> $demandes]);

  }

  public function create(Request $request)
    {

    return view('details');
    }



 public function store(Request $request)
    {

$request->validate ([
'dateDemande' =>'required',
'dateDeb' =>'required',
'datefin' =>'required',
'id_locale' =>'required',


]);
        $now = new DateTime();
        $dateDemande = $now->format('d-m-Y');
        $dateDeb = $request->get('dateDeb');
        $dateDeb = $request->get('dateDeb');
        $id_locale=$request->get('id_locale');



$demandes = DB::insert('insert into demandes(dateDemande,dateDeb,datefin,id_locale)value(?,?,?,?)',[$dateDemande,$dateDeb,$datefin,$id_locale]);
if($demandes){
    $red=redirect('demand')->with('reçu',' ajouté');
}
else{
   $red=redirect('demand/create')->with('echec',' non ajouté');
}
return $red;


    }



public function edit($id)
    {
        $demandes=DB::table('demandes')
        ->join('locales',  'demandes.id_locale', '=','locales.id')
        ->select('demandes.*','locales.*')
       ->where('demandes.id', $id)
       ->get();
        return view('edit_details',['demandes'=>$demandes]);

    }


public function update(Request $request, $id)
    {

$request->validate ([

'dateDeb' =>'required',
'datefin' =>'required',


]);

        $dateDeb = $request->get('dateDeb');
        $datefin = $request->get('datefin');
$demandes = DB::update('update demandes set dateDeb=?,datefin=? where id=?',[$dateDeb, $datefin,$id] );

if($demandes){
    $red=redirect('list_dem')->with('reçu',' ajouté');
}
else{
   $red=redirect('list_dem')->with('echec','non ajouté');
}
return $red;

    }






  public function search(Request $request)
    {
        $search = $request->get('search');
        $demandes = DB::table('demandes')->Where('dateDemande', 'like', '%'.$search.'%')->paginate(5);

        return view('DemandeLocataire',['demandes' => $demandes]);
    }


     /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $demandes = DB::delete('delete from demandes where id=?',[$id]);
        $red =redirect('demand');
          return $red;

    }




}
