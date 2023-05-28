<?php

namespace App\Http\Controllers;

use App\Http\Requests\GetChatRequest;
use App\Http\Requests\StoreChatRequest;
use App\Models\Chat;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    /**
     * Gets chats
     *
     * @param GetChatRequest $request
     * @return JsonResponse
     */

     //  GetChatRequest $request
    public function index(Request $request)
    {
        //return "dddddddd";
        //dd("aa");
        $data = $request->all();



        $isPrivate = 1;
        if ($request->has('is_private')) {
            $isPrivate = (int)$data['is_private'];
        }

        $chats = Chat::where('is_private', $isPrivate)
            ->hasParticipant( auth()->user()->id )
            ->whereHas('messages')
            ->with('lastMessage.user', 'participants.user')
            ->latest('updated_at')
            ->get();
           // dd(   $chats);
        return $chats;
    }


    /**
     * Stores a new chat
     *
     * @param StoreChatRequest $request
     * @return JsonResponse
     */

     // StoreChatRequest $request
    public function store(Request $request)
    {
       // $data = $this->prepareStoreData($request);
        $data['userId'] =  auth()->user()->id;
        $data['otherUserId'] = $request->otherUserId;

        if($data['userId'] === $data['otherUserId']){
            return $this->error('You can not create a chat with your own');
        }

        $previousChat = $this->getPreviousChat($data['otherUserId']);

        if($previousChat === null){

            $chat = Chat::create($data['data']);
            $chat->participants()->createMany([
                [
                    'user_id'=>$data['userId']
                ],
                [
                    'user_id'=>$data['otherUserId']
                ]
            ]);

            $chat->refresh()->load('lastMessage.user','participants.user');
            return $chat;
        }

        return $previousChat->load('lastMessage.user','participants.user');
    }

    /**
     * Check if user and other user has previous chat or not
     *
     * @param int $otherUserId
     * @return mixed
     */
    private function getPreviousChat(int $otherUserId) : mixed {

        $userId = auth()->user()->id;

        return Chat::where('is_private',1)
            ->whereHas('participants', function ($query) use ($userId){
                $query->where('user_id',$userId);
            })
            ->whereHas('participants', function ($query) use ($otherUserId){
                $query->where('user_id',$otherUserId);
            })
            ->first();
    }


    /**
     * Prepares data for store a chat
     *
     * @param StoreChatRequest $request
     * @return array
     */
   // StoreChatRequest $request
    private function prepareStoreData(Request $request) : array
    {
        $data = $request->all();
        $otherUserId = (int)$data['user_id'];
        unset($data['user_id']);
        $data['created_by'] = auth()->user()->id;

        return [
            'otherUserId' => $otherUserId,
            'userId' => auth()->user()->id,
            'data' => $data,
        ];
    }


    /**
     * Gets a single chat
     *
     * @param Chat $chat
     * @return JsonResponse
     */
    public function show(Request $request)
    {
       // dd("mm");
        $chat = Chat::find($request->id);
        $chat->load('lastMessage.user', 'participants.user');
        return $chat;
    }


}
