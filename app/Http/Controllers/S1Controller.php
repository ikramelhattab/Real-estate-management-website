<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Locale;
use DB;
class S1Controller extends Controller
{
        public function test()
    {
        return view('s1');
    }

public function index(){
        $categorie = DB::table('locales')
            ->join('categories', 'locales.idCategorie', '=', 'categories.id')
             ->join('users', 'locales.id_user', '=', 'users.id')
            ->select('locales.*', 'categories.slug','users.name')->paginate(10);
       return view('s1',[
        'categ' => $categorie,
    ]);;
}
}


