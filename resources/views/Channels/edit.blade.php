@extends('layouts.app')

@section('content')

    <div class="card">
        <div class="card-header">Edit channel : {{ $channel->title }}</div>

        <div class="card-body">
            @if (session('status'))
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    {{ session('status') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
            <form method="post" action="{{ route('channels.update', ['channel'=>$channel->id]) }}">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <div class="form-group">
                    <input type="text" name="channel" id="" value="{{ $channel->title }}" class="form-control">
                </div>
                <div class="form-group text-center">
                    <button type="submit" class="btn btn-success">Update channel</button>
                </div>
            </form>
        </div>
    </div>

@endsection
