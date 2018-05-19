@extends('layouts.app')

@section('content')

    @foreach($discussion as $d)

        <div class="card">
            <div class="card-header">
                <img src="{{ $d->user->avatar }}" alt="" style="border-radius: 50%;" width="70px" height="70px">&nbsp;&nbsp;
                <span>{{ $d->user->name }}, <b>{{ $d->created_at->diffForHumans() }}</b></span>&nbsp;&nbsp;
                <a href="{{ route('discussion', ['slug' => $d->slug]) }}" style="float: right;" class="btn btn-info">View</a>
                <span style="clear: both"></span>
            </div>
            <div class="card-body">
                <h4 class="text-center">
                    {{ $d->title }}
                </h4>
                <p class="text-center">
                    {{ str_limit($d->content, 50) }}
                </p>
            </div>
            <div class="card-footer">
                <p class="d-inline">
                    {{ $d->replies->count() }} Replies
                </p>
                <a href="{{ route('channel', ['slug' => $d->channel->slug]) }}" class="btn btn-outline-secondary float-right">{{ $d->channel->title }}</a>
            </div>
        </div>
        <br>

    @endforeach
    <br>

    <div class="d-flex justify-content-center">
        {{ $discussion->links() }}
    </div>


@endsection
