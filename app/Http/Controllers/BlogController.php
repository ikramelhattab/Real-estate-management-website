<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Locale;
use DB;
class BlogController extends Controller
{
        public function test()
    {
        return view('blog');
    }


public function index(){

    $categorie = DB::table('locales')
            ->join('categories', 'locales.idCategorie', '=', 'categories.id')
            ->select('locales.*', 'categories.slug')->paginate(10);

       return view('blog',[
        'categ' => $categorie,
    ]);



}

}
