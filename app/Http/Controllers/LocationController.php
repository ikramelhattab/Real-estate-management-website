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
use App\Demande;
use App\Category;
use DB;
use DateTime;
use Validator;


/**
 * @package App\Http\Controllers
 */
class LocationController extends Controller
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
             ->join('tranches','demandes.id_locale','=','tranches.id_local')
            ->join('locales','demandes.id_locale','=','locales.id')
            ->join('users','demandes.id_user','=','users.id')
            ->select('demandes.*','locales.name_loc','demandes.id_locale','demandes.id_user','tranches.montant')
            ->get();

       return view('location',[
        'loc' => $demandes,

    ]);

       }

}
