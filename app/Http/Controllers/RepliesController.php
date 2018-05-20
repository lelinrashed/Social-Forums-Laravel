<?php

namespace App\Http\Controllers;

use Auth;
use Session;
use App\Like;
use App\Reply;
use Illuminate\Http\Request;

class RepliesController extends Controller
{

    public function like($id)
    {
        $reply = Reply::find($id);

        Like::create([
           'reply_id' => $reply->id,
           'user_id' => Auth::id()
        ]);

        Session::flash('status', 'You liked the reply');

        return redirect()->back();

    }

    public function unlike($id)
    {
        $like = Like::where('reply_id', $id)->where('user_id', Auth::id())->first();

        $like->delete();

        Session::flash('status', 'You unlike the replay.');

        return redirect()->back();

    }

    public function best_answer($id)
    {
        $reply = Reply::find($id);
        $reply->best_answer = 1;
        $reply->save();

        Session::flash('status', 'Reply mark as a best answer.');

        return redirect()->back();

    }


}
