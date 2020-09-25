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
     ->join('users', 'factures.id_user', '=', 'users.id')
    ->join('compteurs', 'factures.id_comp', '=', 'compteurs.id')

     ->select('factures.*', 'locales.name_loc','locales.id','users.name','compteurs.num_compteur','factures.id')
     ->paginate(10);
    return view('facture_loc',['factures'=> $factures]);

       }


       public function facture_pro()
    {


$factures = DB::table('factures')
     ->join('locales',  'factures.id_local', '=', 'locales.id')
     ->join('users', 'factures.id_user', '=', 'users.id')
    ->join('compteurs', 'factures.id_comp', '=', 'compteurs.id')

     ->select('factures.*', 'locales.name_loc','locales.id','users.name','compteurs.num_compteur','factures.id','compteurs.num_compteur')
     ->paginate(10);
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
       /*  $compteurs = DB::table('compteurs')->get();
        $autocomplete = [];
        foreach($compteurs as $c){
            $autocomplete[] = [
                'value' =>  $c->num_compteur,
                'data'  =>  $c->id
            ];
        }

        $autocomplete_json = json_encode($autocomplete);
 */
 $locales = DB::table('locales')->get();
 $compteurs = DB::table('compteurs')->get();
  $typecomp = DB::table('types_compteurs')->get();

$factures = DB::table('factures')
     ->join('locales',  'factures.id_local', '=', 'locales.id')
    ->join('compteurs', 'factures.id_comp', '=', 'compteurs.id')
        ->join('types_compteurs', 'compteurs.id_type', '=', 'types_compteurs.id')

     ->select('compteurs.*', 'locales.name_loc','locales.id','compteurs.id_type','compteurs.num_compteur','types_compteurs.type' )
      ->get();

       return view('facture_create',[
        'typecomp'=> $typecomp,
        'factures'=> $factures,
        'locales'=> $locales,
        'compteurs'=> $compteurs,



       ]);

}




    /**
     * Show the application dashboard.
     *
     * @return Response
     */
    public function index()
    {
        $compteurs = DB::table('factures')
            ->join('compteurs', 'factures.id_comp', '=', 'compteurs.id')
            ->select('factures.*', 'compteurs.num_compteur','compteurs.id_type','compteurs.id_local','factures.id')
            ->get();
       return view('facture_pro',[
        'comp' => $compteurs,
    ]);

       }








/*
 public function store1(Request $request)
    {

$request->validate ([
'date_fact' =>'required',
'date_limite' =>'required',
'montant_fact' =>'required',
'photo' =>'required',
'id_comp' =>'required',
'id_user' =>'required',
'id_local' =>'required',
]);
        $date_fact = $request->get('date_fact');
        $date_limite = $request->get('date_limite');
        $montant_fact = $request->get('montant_fact');
        $photo = $request->get('photo');
        $id_comp = $request->get('id_comp');
        $id_user = $request->get('id_user');
        $id_local = $request->get('id_local');





$factures = DB::insert('insert into factures(date_fact,date_limite,montant_fact,photo,id_comp,id_user,id_local)value(?,?,?,?,?,?,?)',[$date_fact, $date_limite,$montant_fact,$photo,$id_comp,$id_user,$id_local]);
if($factures){
    $red=redirect('factures')->with('reçu',' ajouté');
}
else{
   $red=redirect('factures/create')->with('echec',' non ajouté');
}
return $red;

    }
 */


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
        $id_comp = $request->get('id_comp');
        $id_user = Auth::user()->id;
        $id_local = $request->get('id_local');


$factures = DB::insert('insert into factures(date_fact,date_limite,montant_fact,photo,id_comp,id_user,id_local)value(?,?,?,?,?,?,?)',[$date_fact, $date_limite,$montant_fact,$photo,$id_comp,$id_user,$id_local]);

if($factures){
    $red=redirect('facture/create')->with('reçu','facture ajouté');
}

else{
   $red=redirect('facture')->with('echec','facture non ajouté');
}

return $red;
    }


public function edit($id)
    {
         $locales = DB::table('locales')->get();
        $autocomplete = [];
        foreach($locales as $c){
            $autocomplete[] = [
                'value' =>  $c->name_loc,
                'data'  =>  $c->id
            ];
        }

        $autocomplete_json = json_encode($autocomplete);

        $data = DB::table('factures')
            ->join('compteurs', 'factures.id_comp', '=', 'compteurs.id')
           ->join('locales', 'factures.id_local', '=', 'locales.id')
            ->select('factures.*', 'locales.name_loc','compteurs.id_type','compteurs.num_compteur','factures.id')
            // ->where('factures.id', $id)
            ->get();


        $data = $data->toArray()[0];
        $items = json_decode($data->items);
        $outputs = [];
        $i = 0;

        foreach($items as $item){
                    $outputs[] = '<div data-repeater-item="" style="" >' . "\n";

            $outputs[] = '<input class="input-lg" type="text" name="category-group[' . $i . '][id_type]" placeholder="id_type" id="id_type" value="' . $item->id_type . '">' . "\n" ;
            $outputs[] = '<input class="input-lg" type="text" name="category-group[' . $i . '][montant_fact]" placeholder="montant_fact" id="montant_fact" value="' . $item->montant_fact . '">' . "\n";
            $outputs[] = '<input class="input-lg" type="text" name="category-group[' . $i . '][date_fact]" placeholder="date_fact" id="date_fact" value="' . $item->date_fact . '">' . "\n";
            $outputs[] = '<input class="input-lg" type="text" name="category-group[' . $i . '][date_limite]" placeholder="date_limite" id="date_limite" value="' . $item->date_limite . '">' . "\n";
            $outputs[] = '<input class="input-lg" type="text" name="category-group[' . $i . '][photo]" placeholder="photo" id="photo" value="' . $item->photo . '">' . "\n";

             $outputs[] = '<input data-repeater-delete="" type="button" value="-" class="delete-modal btn btn-danger btn-lg">' . "\n";
            $i++;
              $outputs[] = '</div>' . "\n";

        }
        return view('factures_edit',[
            'data' => $data,
            'autocomplete'=>$autocomplete_json,
            'output'=>join("\n", $outputs)
]);

    }


public function update(Request $request, $id)
    {
 $data = $request->all();

    $items = json_encode($data['category-group']);
$factures = DB::update('update factures set items=? where id=?',[$items,$id] );

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


    public function show($id)
    {

        $compteurs = DB::table('compteurs')->get();
        $autocomplete = [];
        foreach($compteurs as $c){
            $autocomplete[] = [
                'value' =>  $c->num_compteur,
                'data'  =>  $c->id
            ];
        }

        $autocomplete_json = json_encode($autocomplete);

        $data = DB::table('factures')
            ->join('compteurs', 'factures.id_comp', '=', 'compteurs.id')
            ->join('locales', 'factures.id_local', '=', 'locales.id')
            ->select('factures.*', 'locales.name_loc','compteurs.num_compteur','compteurs.id_type','factures.id')
            ->where('factures.id', $id)
            ->get();

      /*   $data = $data->toArray()[0];
        $items = json_decode($data->items);
        $outputs = [];
        $i = 0;
        $outputs[] = '<div data-repeater-item="" style="">' . "\n";
    //$outputs[] = '<div class="col-xs-12 table-responsive">';


                    $outputs[] = '<table  class="table table-striped">';
                    $outputs[] = '<thread>';
                    $outputs[] = '<tr>';
                    $outputs[] = '<td>';
                    $outputs[] =" <b> Designation </b> ";
                    $outputs[] = '</td>';
                    $outputs[] = '<td>';
                    $outputs[] =" <b> Amount </b>";
                    $outputs[] = '</td>';
                    $outputs[] = '<td>';
                    $outputs[]=" <b> Unit price </b>";
                    $outputs[] = '</td>';
                    $outputs[] = '<td> ';
                    $outputs[] =" <b> Total HT </b> ";
                    $outputs[] = '</td>';
                    $outputs[] = '</tr>';
  $outputs[] = '</thread>';

        foreach($items as $item){
                    $outputs[] = '<tr>';

                    $outputs[] = '<td>';
                    $outputs[] ="  $item->designation ";
                    $outputs[] = '</td>';
                    $outputs[] = '<td>';
                    $outputs[] ="  $item->quantite ";
                    $outputs[] = '</td>';
                    $outputs[] = '<td>';
                    $outputs[]="  $item->prix_unitaire ";
                    $outputs[] = '</td>';
                    $outputs[] = '<td>';
                    $outputs[]= $item->prix_unitaire *  $item->quantite;
                    $outputs[] = '</td>';
                    $outputs[] = '</tr>';



            $i++;
        }

        $outputs[] = '</table> <br><br>'  . "\n";

                   $outputs[] = '<div  class="table-responsive">';


                    $outputs[] = '<table class="table">';
                    $outputs[] = '<tr>';
                    $outputs[] = ' <th style="width:50%">Total HT:</th>';
                    $outputs[] = '<td>';
                    $t=0;
                            foreach($items as $item){

                    $total_HT =$item->prix_unitaire *  $item->quantite;
                    $t=$t+$total_HT;

            }
            $outputs[] =$t;

                    $outputs[] = '</td>';
                    $outputs[] = '</tr>';
                    $outputs[] = '<tr>';
                    $outputs[] = ' <th style="width:50%">TVA (19%):</th>';
                    $outputs[] = '<td>';
                    $outputs[] ="{$data->TVA}";
                    $outputs[] = '</td>';
                    $outputs[] = '</tr>';
                    $outputs[] = '<tr>';
                    $outputs[] =" <th>Stamp:</th>";
                    $outputs[] = '<td>';
                    $outputs[] ="{$data->timbre}";
                    $outputs[] = '</td>';
                    $outputs[] = '</tr>';
                    $outputs[] = '<tr>';
                    $outputs[] =" <th>Total TTC:</th>";
                    $outputs[] = '<td>';

                    $outputs[] = $t+ $data->TVA+ $data->timbre;


                    $outputs[] = '</td>';
                    $outputs[] = '</tr>';
                    $outputs[] = '</table>' . "\n";
                    $outputs[] = '</div>' . "\n";
                    $outputs[]=" <p><B> Amount TTC is: </B>";


                    $total = trad($t+$data->TVA+$data->timbre);
                    $outputs[] = $total;


 */

           return view('show_facture',[
            'data' => $data,
            'autocomplete'=>$autocomplete_json,
/*             'output'=>join("\n", $outputs),
 */            'fac_id'=>$id

]);
    }






}
