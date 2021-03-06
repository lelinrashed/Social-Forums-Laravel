@extends('layouts.app')

@section('content')

    <div class="card">
        <div class="card-header">
            <img src="{{ asset($d->user->avatar) }}" alt="" style="border-radius: 50%;" width="70px" height="70px">&nbsp;&nbsp;
            <span>{{ $d->user->name }}, <b>{{ $d->created_at->diffForHumans() }}</b> <b>( {{ $d->user->points }} )</b></span>&nbsp;&nbsp;
            @if($d->is_being_watched_by_auth_user())
                <a href="{{ route('discussion.unwatch', ['id' => $d->id]) }}" class="btn btn-info float-right">Unwatch</a>
            @else
                <a href="{{ route('discussion.watch', ['id' => $d->id]) }}" class="btn btn-info float-right">Watch</a>
            @endif
            <span style="clear: both"></span>
        </div>
        <div class="card-body">
            <h4 class="text-center">
                {{ $d->title }}
            </h4>
            <hr>
            <p class="text-center">
                {{ $d->content }}
            </p>
            <hr>
            <br>
            @if($best_answer)
                <div class="text-center">
                    <h3>BEST ANSWER</h3>
                    <div class="card">
                        <div class="card-header">
                            <img src="{{ asset($best_answer->user->avatar) }}" alt="" style="border-radius: 50%;" width="70px" height="70px">&nbsp;&nbsp;
                            <span>{{ $best_answer->user->name }}</span>&nbsp;&nbsp; <b>( {{ $best_answer->user->points }} )</b>
                        </div>
                        <div class="card-body">
                            {{ $best_answer->content }}
                        </div>
                    </div>
                </div>
            @endif
        </div>
        <div class="card-footer">
            <p>
                {{ $d->replies->count() }} Replies
            </p>
        </div>
    </div>
    <br>

    @foreach($d->replies as $r)
        <div class="card">
            <div style="padding-left: 15px;">
                <br>
                <img src="{{ asset($r->user->avatar) }}" alt="" style="border-radius: 50%;" width="50px" height="50px">&nbsp;&nbsp;<br>
                <span>{{ $r->user->name }}, <b>{{ $r->created_at->diffForHumans() }}</b> <b>( {{ $r->user->points }} )</b></span>&nbsp;&nbsp;
                @if(!$best_answer && Auth::id() == $r->user->id)
                    <a href="{{ route('discussion.best.answer', ['id' => $r->id]) }}" class="btn btn-info float-right">Mark as best answer</a>
                @endif
            </div>
            <hr>
            <div class="card-body">
                <p class="text-justify">
                    {{ $r->content }}
                </p>
            </div>
            <div class="card-footer">
                @if($r->is_liked_by_auth_user())
                    <a href="{{ route('reply.unlike', ['id' => $r->id ]) }}" class="btn btn-danger btn-sm">Unliked <span class="badge">{{ $r->likes->count() }}</span></a>
                @else
                    <a href="{{ route('reply.like', ['id' => $r->id]) }}" class="btn btn-success btn-sm">Like <span class="badge">{{ $r->likes->count() }}</span> </a>
                @endif
            </div>
        </div>
    @endforeach

    <div class="card">
        <div class="card-body">
            @if(Auth::check())
                <form action="{{ route('discussion.reply', ['id' => $d->id]) }}" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="reply">Leave a reply</label>
                        <textarea name="reply" class="form-control" rows="2" id="reply"></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-info btn-lg btn-block">Leave a reply</button>
                    </div>
                </form>
            @else
                <h2 class="text-center">Sign in to leave a reply.</h2>
            @endif
        </div>
    </div>


@endsection
