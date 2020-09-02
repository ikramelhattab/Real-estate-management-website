<?php

namespace App\Http\Controllers;
use App\User;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Locale;
use App\Category;
use DB;

class HomeController extends Controller
{

public function index(){

    $categorie = DB::table('locales')
            ->join('categories', 'locales.idCategorie', '=', 'categories.id')
            ->select('locales.*', 'categories.slug')->paginate(5);

       return view('home',[
        'locales' => $categorie,
    ]);

}


 public function locales($id){
    $locales = DB::table('locales')->where('id', $id)->get();
    return response()->json($locales);
  }

public function app(){

 $users = DB::table('users')->get();
  return view('layouts.app',[
        'users' => $users,
    ]);

}




public function search(Request $request)
    {

    return Locale::where('pays', 'like', '%' . $request->pays . '%')
                   ->where('gouvernaurat', 'like', '%' . $request->gouvernaurat . '%')
/*                    ->where('slug', 'like', '%' . $request->slug . '%')
 */                   ->where('Bedrooms', 'like', '%' . $request->Bedrooms . '%')
                   ->where('prix', 'like', '%' . $request->prix . '%')
                   ->where('surface', 'like', '%' . $request->surface . '%')
                   ->get();


    }

}
