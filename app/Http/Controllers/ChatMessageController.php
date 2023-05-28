<?php

namespace App\Http\Controllers;

use App\Events\NewMessageSent;
use App\Helpers\Helpers;
use App\Http\Requests\GetMessageRequest;
use App\Http\Requests\StoreMessageRequest;
use App\Models\Chat;
use App\Models\ChatMessage;
use App\Models\ChatParticipant;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ChatMessageController extends Controller
{
    /**
     * Gets chat message
     *
     * @param GetMessageRequest $request
     * @return JsonResponse
     */

     //  GetMessageRequest  $request
    public function index(Request $request)
    {
        $data = $request->all();
        $chatId = $data['chat_id'];
       // $currentPage = $data['page'];
       // $pageSize = $data['page_size'] ?? 15;

        $messages = ChatMessage::where('chat_id',  $chatId)
            ->with('user')
            ->latest('created_at')->get()
            ;

        return $messages;
    }

    /**
     * Create a chat message
     *
     * @param StoreMessageRequest $request
     * @return JsonResponse
     */


     //StoreMessageRequest $request
    public function store(Request $request)
    {
        
        $data = array();
        $data['user_id'] = auth()->user()->id;
        $data['message'] =  $request->msg ;
        $data['chat_id'] =  $request->chat_id ;

        $chatMessage = ChatMessage::create($data);
        $chatMessage->load('user');


        /// TODO send broadcast event to pusher and send notification to onesignal services
       // $this->sendNotificationToOther($chatMessage);
        $usersecond = ChatParticipant::where('chat_id' ,$data['chat_id'] )->where('user_id',"!=",  $data['user_id'])->first();
        $user= User::find( $usersecond->user_id);

        if(!empty( $user->device_token)){
            Helpers::push_not("New Message" ,  $chatMessage->message ,   $user->device_token ) ;
        }

        return $chatMessage;
    }

    /**
     * Send notification to other users
     *
     * @param ChatMessage $chatMessage
     */
    private function sendNotificationToOther(ChatMessage $chatMessage) : void {

        // TODO move this event broadcast to observer
       // broadcast(new NewMessageSent($chatMessage))->toOthers();

        $user = auth()->user();
        $userId = $user->id;

        $chat = Chat::where('id',$chatMessage->chat_id)
            ->with(['participants'=>function($query) use ($userId){
                $query->where('user_id','!=',$userId);
            }])
            ->first();
        if(count($chat->participants) > 0){
            $otherUserId = $chat->participants[0]->user_id;

            $otherUser = User::where('id',$otherUserId)->first();
            $otherUser->sendNewMessageNotification([
                'messageData'=>[
                    'senderName'=>$user->username,
                    'message'=>$chatMessage->message,
                    'chatId'=>$chatMessage->chat_id
                ]
            ]);

        }

    }


}
