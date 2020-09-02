<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Reclamation;
use App\Locale;

use DB;
class ReclamationController extends Controller
{
     public function index()
    {

  $reclamations = DB::table('reclamations')
     ->join('locales','reclamations.id_locale','=','locales.id')
    ->join('users','reclamations.id_user', '=','users.id')
     ->select('reclamations.*','locales.name_loc','locales.id','users.name')
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
     ->select('reclamations.*','locales.name_loc','locales.id','users.name')
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
     ->select('reclamations.*', 'locales.name_loc','users.name' )
     ->paginate(10);
    return view('reclamation_loc',[
    'reclamations' => $reclamations
    ]);
    }

 public function create(Request $request)
    {

    return view('reclamation');
    }

 public function store(Request $request)
    {

$request->validate ([
'subject' =>'required',
'content' =>'required',
'description' =>'required',
'id_locale' =>'required',



]);

        $subject = $request->get('subject');
        $content = $request->get('content');
        $description = $request->get('description');
        $id_locale=$request->get('id_locale');





$reclamations = DB::insert('insert into reclamations(subject,content,description,id_locale)value(?,?,?,?)',[$subject,$content,$description,$id_locale]);
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



        $reclamations=DB::select('select * from reclamations where id=?',[$id]);
        return view('reclamation_edit',['reclamations'=>$reclamations]);
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


$reclamations= DB::update('update reclamations set subject =?,description =?,description =? where id=?',[$subject,$content, $description,$id] );

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

