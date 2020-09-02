<?php

namespace App\Repository;
use App\User;
use App\Message;

class ConversationRepository{
private $user ;

private $message ;
public function __construct(User $user,Message $message){

$this->user = $user;
$this->message = $message;

}

public function getConversations(int $userId)
{
return $this->user->newQuery()
->select('users.id','users.name' )
->where('id','!=',  $userId)
->get();
}

public function createMessage(string $message,int $form ,int $to)
{
return $this->message->newQuery()->create([
'message' =>$message,
'from_id' =>$from,
'to_id' =>$to,
'created_at' => Carbon::now()

]);

}

public function getMessagesFor(int $form ,int $to):Builder
{
return $this->message->newQuery()
->whereRaw(
"((from_id = $from AND to_id = $to) OR (from_id = $to AND to_id = $from) )")
->orderby('created_at','DESC');


}










}


