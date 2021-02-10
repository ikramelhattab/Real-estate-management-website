<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Demande;
use App\Locale;
use DB;
class DetailsController extends Controller
{
/* public function add($post)
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
    } */

    public function test(Request $request,$id){

    $local= DB::table('locales')
                 ->where('id', $id)
                 ->get();
    return view('details',['loc'=> $local]);
}


  /* public function fav(Request $request,$id){

    $local= DB::table('locales')
                 ->where('id', $id)
                 ->get();
    return view('details',['loc'=> $local]);
} */


/* public function toggleLike()
   {
       $commentId=Input::get('commentId');
       $comment=Comment::find($commentId);

//        $usersLike= $comment->likes()->where('user_id',auth()->id())->where('likable_id',$commentId)->first();
        if(!$comment->isLiked()){
            $comment->likeIt();
            return response()->json(['status'=>'success','message'=>'liked']);

        }else{
            $comment->unlikeIt();
            return response()->json(['status'=>'success','message'=>'unliked']);

        }


   } */

}



