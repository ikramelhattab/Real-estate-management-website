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
private $auth;

public function __construct(ConversationRepository $conversationRepository,AuthManager $auth ){

$this->r = $conversationRepository;
$this->auth = $auth;

}

     public function index()
    {

    return view('index',[
        'users'=> $this->r->getConversations($this->auth->user()->id)
        ]);
    }


public function show (User $user){

    return view('show',[
        'users'=> $this->r->getConversations($this->auth->user()->id),
        'user' => $user,
        'message' => $this->r->getMessagesFor($this->auth->user()->id,$user->id)->paginate(2)
        ]);
}


public function store(User $user,StoreMessageRequest $request)
    {

$this->r->createMessage(
    $request->get('message'),
    $this->auth->user()->id,
    $user->id
);
return redirect(route('show', ['id'=> $user->id]));
    }




}

