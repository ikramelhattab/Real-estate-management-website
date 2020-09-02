<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
use App\Favorite;
use App\Locale;
use App\User;
class FavoriteController extends Controller
{

    public function __construct()
 {
$this->middleware('auth');
}
        public function test()
    {
          $favorites = Auth::user()->favorite_posts;
        return view('favorites',['favorite'=>$favorites]);
    }


 public function add($post)
    {
        $user = Auth::user();
        $isFavorite = $user->favorite_posts()->where('id_locale',$post)->count();

        if ($isFavorite == 0)
        {
            $user->favorite_posts()->attach($post);
            Toastr::success('Post successfully added to your favorite list :)','Success');
            return redirect()->back();
        } else {
            $user->favorite_posts()->detach($post);
            Toastr::success('Post successfully removed form your favorite list :)','Success');
            return redirect()->back();
        }
    }
 public function index()
    {
        $favorites = Auth::user()->favorite_posts;
        return view('favorite',compact('favorites'));
    }





}
