<?php

namespace App\Http\Controllers;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Requests\StoreMessageRequest;
use App\Repository\ConversationRepository;
use App\Repository\User\UserRepository as UserInterface;
use Illuminate\Auth\AuthManager;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\User;

use App\Message;
use App\Locale;


use DB;
class MessageController extends Controller
{

private $r;
public function __construct( ConversationRepository $conversationRepository,AuthManager $auth ){

$this->r = $conversationRepository;
$this->auth = $auth;

}

     public function index()
    {
 /*  $users = DB::table('users')
     ->select('users.id','users.name' )
     ->where('id','!=', Auth::user()->id)
     ->get(); */
    return view('index',[
        'users'=> $this->r->getConversations($this->auth->user()->id)
        ]);
    }


public function show (User $user){
/* $users = DB::table('users')
     ->select('users.id','users.name' )
     ->where('id','!=', Auth::user()->id)
     ->get(); */
    return view('show',[
        'users'=> $this->r->getConversations($this->auth->user()->id),
        'user' => $user,
        'message' =>$this->r->getMessagesFor($this->auth->user()->id,$user->id)->get()->reverse()
        ]);
}


public function store(User $user,StoreMessageRequest $request)
    {

$this->r->createMessage(
    $request->get('message'),
    $this->auth->user()->id,
    $user->id
);
return redirect(route('show',['id'=>$user->id]));
    }














        public function test()
    {
     $messages = DB::table('messages')
     ->join('users', 'messages.from_id', '=', 'users.id')

     ->select('messages.*','users.name' )
     ->paginate(10);
    return view('message',['messages'=> $messages]);
    }




  public function create(Request $request)
    {
    $messages = DB::table('messages')
     ->join('users', 'messages.from_id', '=', 'users.id')
     ->select('messages.*','users.name' )
     ->paginate(10);
    return view('message',['messages'=> $messages]);

       }






}

