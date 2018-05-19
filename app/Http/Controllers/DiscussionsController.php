<?php

namespace App\Http\Controllers;

use App\Reply;
use Auth;
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

        return view('Discussions.show')->with('d', $discussion);
    }


    public function reply($id)
    {
        $d = Discussion::find($id);


        $reply = Reply::create([
            'user_id' => Auth::id(),
            'discussion_id' => $id,
            'content' => request()->reply
        ]);

        Session::flash('status', 'Replied to discussion.');

        return redirect()->back();

    }


}
