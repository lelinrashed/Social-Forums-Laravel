<?php

namespace App\Http\Controllers;

use App\Channel;
use App\Discussion;
use Illuminate\Http\Request;

class ForumsController extends Controller
{
    public function index()
    {

        $discussion = Discussion::orderBy('created_at', 'desc')->paginate(3);
    	return view('forum',['discussion' => $discussion]);

    }

    public function channel($slug)
    {

        $channel = Channel::where('slug', $slug)->first();
        return view('channel')->with('discussion', $channel->discussion()->paginate(5));
    }

}
