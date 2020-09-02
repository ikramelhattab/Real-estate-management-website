<?php

namespace App\Http\Controllers;
use App\User;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Http\Requests;
use Illuminate\Http\Request;

use DB;

class DashboardController extends Controller
{

public function index(){


       return view('dashboard');

}

}
