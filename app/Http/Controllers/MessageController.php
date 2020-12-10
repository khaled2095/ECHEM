<?php

namespace App\Http\Controllers;

use App\Events\MessageSend;
use App\Message;
use App\Product;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use App\Notifications\NewMessage;

class MessageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function user_list()
    {
        // $users = User::latest()->where('id','!=',auth()->user()->id)->get();
        $users = array();
        $from_me = DB::table('messages')->where('from_user', auth()->user()->id)->orWhere('to_user', auth()->user()->id)->get();
        $admin = DB::table('users')->where('role_id', 5)->orWhere('role_id', 1)->first();
        array_push($users, $admin);
        foreach ($from_me as $item) {
            # code...
            if ($item->from_user == auth()->user()->id) {
                # code...
                $user = DB::table('users')->where('id', $item->to_user)->first();

                // if (empty($users)) {
                //     array_push($users, $user);
                // } else {
                //     foreach ($users as $data) {
                //         # code...
                //         if ($data->id !== $user->id) {
                //             array_push($users, $user);
                //         }
                //     }
                // }
                if(!in_array($users, (array) $user, true)){
                    array_push($users, $user);
                }
            } else {
                $user = DB::table('users')->where('id', $item->from_user)->first();

                // if (empty($users)) {
                //     array_push($users, $user);
                // } else {
                //     foreach ($users as $data) {
                //         # code...
                //         if ($data->id !== $user->id) {
                //             array_push($users, $user);
                //         }
                //     }
                // }

                if(!in_array($users, (array) $user, true)){
                    array_push($users, $user);

                }
            }
        }

        if (\Request::ajax()) {
            return response()->json($users, 200);
        }
        return abort(404);
    }

    public function user_message($id = null)
    {
        if (!\Request::ajax()) {
            return abort(404);
        }

        $user = User::findOrFail($id);
        $messages = $this->message_by_user_id($id);

        return response()->json([
            'messages' => $messages,
            'user' => $user,
        ]);
    }


    public function message_by_user_id($id)
    {
        $messages = Message::where(function ($q) use ($id) {
            $q->where('from_user', auth()->user()->id);
            $q->where('to_user', $id);
        })->orWhere(function ($q) use ($id) {
            $q->where('from_user', $id);
            $q->where('to_user', auth()->user()->id);
        })->with('user')->get();
        return $messages;
    }


    public function send_message(Request $request)
    {


        if (!$request->ajax()) {
            abort(404);
        }
        $messages = Message::create([
            'message' => $request->message,
            'from_user' => auth()->user()->id,
            'to_user' => $request->user_id,
        ]);

        $user = User::find($request->user_id);
        $user->notify(new NewMessage());
        broadcast(new MessageSend($messages));
        return response()->json($messages, 201);
        // return response()->json($messages,201);

    }
    public function send_message2(Request $request)
    {


        if (!$request->ajax()) {
            abort(404);
        }
        $admin = DB::table('users')->where('role_id', 1)->first();
        $messages = Message::create([
            'message' => $request->message,
            'from_user' => auth()->user()->id,
            'to_user' => $admin->id,
        ]);
        auth()->user()->notify(new NewMessage());
        broadcast(new MessageSend($messages));
        return response()->json($messages, 201);
        // return response()->json($messages,201);

    }
    public function init_message(Request $request)
    {

        Message::create([
            'message' => $request->msg,
            'from_user' => auth()->user()->id,
            'to_user' => $request->to,
        ]);

        return Redirect::route('chat');
    }
}
