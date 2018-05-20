<?php

namespace App\Http\Controllers;

use App\Reply;
use App\User;
use Auth;
use Illuminate\Support\Facades\Notification;
use Session;
use App\Discussion;
use Illuminate\Http\Request;

class DiscussionsController extends Controller
{
    public function create()
    {
        return view('Discussions.discuss');
    }

    public function store()
    {
        $this->validate(request(), [
           'channel_id' => 'required',
           'content' => 'required',
           'title' => 'required'
        ]);

        $discussion = Discussion::create([
            'title' => request()->title,
            'content' => request()->content,
            'channel_id' => request()->channel_id,
            'user_id' => Auth::id(),
            'slug' => str_slug(request()->title)
        ]);


        Session::flash('status', 'Discussion created !');

        return redirect()->route('discussion', ['slug' => $discussion->slug]);

    }

    public function show($slug)
    {
        $discussion = Discussion::where('slug', $slug)->first();

        $best_answer = $discussion->replies()->where('best_answer', 1)->first();

        return view('Discussions.show')->with('d', $discussion)
                                            ->with('best_answer', $best_answer);
    }


    public function reply($id)
    {
        $d = Discussion::find($id);

        $reply = Reply::create([
            'user_id' => Auth::id(),
            'discussion_id' => $id,
            'content' => request()->reply
        ]);

        $watchers = array();

        foreach ($d->watchers as $watcher):
            array_push($watchers, User::find($watcher->user_id));
        endforeach;

        Notification::send($watchers, new \App\Notifications\NewReplyAdded($d));

        Session::flash('status', 'Replied to discussion.');

        return redirect()->back();

    }


}
