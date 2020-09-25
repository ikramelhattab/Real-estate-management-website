<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Reclamation;
use App\Locale;
use Illuminate\Support\Facades\Auth;


use DB;
class ReclamationController extends Controller
{
     public function index()
    {

  $reclamations = DB::table('reclamations')
     ->join('locales','reclamations.id_locale','=','locales.id')
    ->join('users','reclamations.id_user', '=','users.id')
     ->select('reclamations.*','locales.name_loc','locales.id','users.name','reclamations.id')
     ->paginate(10);
    return view('reclamation_pro',[
    'reclamations' => $reclamations
    ]);

  }




public function aff()
    {
    $reclamations = DB::table('reclamations')
     ->join('locales','reclamations.id_locale','=','locales.id')
    ->join('users','reclamations.id_user', '=','users.id')
     ->select('reclamations.*','locales.name_loc','locales.id','users.name','reclamations.id')
     ->paginate(10);
    return view('reclamation_pro',[
    'reclamations' => $reclamations
    ]);

    }
public function aff_loc()
    {

    $reclamations = DB::table('reclamations')
     ->join('locales',  'reclamations.id_locale', '=', 'locales.id')
    ->join('users', 'reclamations.id_user', '=', 'users.id')
     ->select('reclamations.*', 'locales.name_loc','users.name','reclamations.id' )
     ->paginate(10);
    return view('reclamation_loc',[
    'reclamations' => $reclamations
    ]);
    }

 public function create(Request $request)
    {
$locales = DB::table('locales')->get();

$reclamations = DB::table('reclamations')
    ->join('locales',  'reclamations.id_locale', '=', 'locales.id')
    ->join('users', 'reclamations.id_user', '=', 'users.id')
    ->select('reclamations.*', 'locales.name_loc','locales.id','users.name' )
    ->get();
    return view('reclamation',[
    'reclamations' => $reclamations,
    'locales' => $locales,

    ]);
    }

 public function store(Request $request)
    {

$request->validate ([
'subject' =>'required',
'content' =>'required',
'description' =>'required',
]);

        $subject = $request->get('subject');
        $content = $request->get('content');
        $description = $request->get('description');
        $id_locale = $request->get('id_locale');
        $id_user = Auth::user()->id;




$reclamations = DB::insert('insert into reclamations(subject,content,description,id_locale,id_user)value(?,?,?,?,?)',[$subject,$content,$description,$id_locale,$id_user]);
if($reclamations){
    $red=redirect('reclamation')->with('reçu',' ajouté');
}
else{
   $red=redirect('reclamation')->with('echec',' non ajouté');
}
return $red;
    }



public function edit($id)
    {

$locales = DB::table('locales')->get();

$reclamations = DB::table('reclamations')
     ->join('locales',  'reclamations.id_locale', '=', 'locales.id')
    ->join('users', 'reclamations.id_user', '=', 'users.id')
     ->select('reclamations.*', 'locales.name_loc','locales.id','users.name' ,'reclamations.id')
    ->where('reclamations.id', [$id])

      ->get();

        return view('reclamation_edit',[
            'reclamations' => $reclamations,
            'locales' => $locales,

]);
    }


public function update(Request $request, $id)
    {
$request->validate ([
'subject' =>'required',
'content' =>'required',
'description' =>'required',
]);

        $subject = $request->get('subject');
        $content = $request->get('content');
        $description = $request->get('description');
        $id_locale = $request->get('id_locale');



$reclamations= DB::update('update reclamations set subject =?,content =?,description =? where id=?',[$subject,$content, $description,$id] );

if($reclamations){
    $red=redirect('rec')->with('reçu',' ajouté');
}
else{
   $red=redirect('rec/edit')->with('echec','non ajouté');
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
        $reclamations = DB::delete('delete from reclamations where id=?',[$id]);
        $red = redirect('reclamation');
          return $red;

    }



}

