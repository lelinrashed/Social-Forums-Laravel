@extends('layouts.app')

@section('content')

    <div class="card">
        <div class="card-header">Channels</div>

        <div class="card-body">
            @if (session('status'))
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    {{ session('status') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($channels as $channel)
                        <tr>
                        <td>{{ $channel->title }}</td>
                        <td>
                            <a href="{{ route('channels.edit', ['channel' => $channel->id]) }}" class="btn btn-sm btn-warning">Edit</a>
                        </td>
                        <td>
                            <form method="post" action="{{ route('channels.destroy', ['channel'=>$channel->id]) }}">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <button class="btn btn-sm btn-danger" type="submit">Delete</button>
                            </form>
                        </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection
