<?php

/*
 * Taken from
 * https://github.com/laravel/framework/blob/5.3/src/Illuminate/Auth/Console/stubs/make/controllers/HomeController.stub
 */

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Locale;
use App\Tranch;
use DB;
use DateTime;
use Validator;


/**
 * @package App\Http\Controllers
 */
class TranchController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

public function tranch_loc()
    {

$tranches = DB::table('tranches')
     ->join('locales',  'tranches.id_local', '=', 'locales.id')
     ->join('users', 'tranches.id_user', '=', 'users.id')
     ->select('tranches.*', 'locales.name_loc','locales.id','users.name' )
     ->paginate(10);
    return view('tranch_loc',['tranches'=> $tranches]);



       }

       public function tranch_pro()
    {


    $tranches = DB::table('tranches')
     ->join('locales',  'tranches.id_local', '=', 'locales.id')
     ->join('users', 'tranches.id_user', '=', 'users.id')
     ->select('tranches.*', 'locales.name_loc','locales.id','users.name' )
     ->paginate(10);
    return view('tranch_pro',['tranches'=> $tranches]);



       }


    /**
     * Show the application dashboard.
     *
     * @return Response
     */
    public function index()
    {



       }



  public function create(Request $request)
    {
 $tranches = DB::table('tranches')
     ->join('locales',  'tranches.id_local', '=', 'locales.id')
     ->join('users', 'tranches.id_user', '=', 'users.id')
     ->select('tranches.*', 'locales.name_loc','locales.id','users.name' )
     ->paginate(10);
    return view('tranches_create',['tranches'=> $tranches]);

    }



 public function store(Request $request)
    {

$request->validate ([
'date_deb' =>'required',
'date_fin' =>'required',
'montant' =>'required',


]);
        $date_deb = $request->get('date_deb');
        $date_fin = $request->get('date_fin');
        $montant = $request->get('montant');





$tranches = DB::insert('insert into tranches(date_deb,date_fin,montant)value(?,?,?)',[$date_deb, $date_fin,$montant]);
if($tranches){
    $red=redirect('tranch')->with('reçu',' ajouté');
}
else{
   $red=redirect('tranch/create')->with('echec',' non ajouté');
}
return $red;


    }



public function edit($id)
    {
        $tranches=DB::select('select * from tranches where id=?',[$id]);
        return view('tranches_edit',['tranches'=>$tranches]);
    }


public function update(Request $request, $id)
    {



$request->validate ([
'date_deb' =>'required',
'date_fin' =>'required',
'montant' =>'required',


]);
        $date_deb = $request->get('date_deb');
        $date_fin = $request->get('date_fin');
        $montant = $request->get('montant');
$tranches = DB::update('update tranches set date_deb =?,date_fin =?,montant =? where id=?',[$date_deb, $date_fin,$montant,$id] );

if($tranches){
    $red=redirect('tranch')->with('reçu',' ajouté');
}
else{
   $red=redirect('tranch/edit')->with('echec','non ajouté');
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
        $tranches = DB::delete('delete from tranches where id=?',[$id]);
        $red =redirect('tranch');
          return $red;

    }


}
