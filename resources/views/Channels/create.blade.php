@extends('layouts.app')

@section('content')

    <div class="card">
        <div class="card-header">Create a new channel</div>

        <div class="card-body">
            <form method="post" action="{{ route('channels.store') }}">
                {{ csrf_field() }}
                <div class="form-group">
                    <input type="text" name="channel" id="" class="form-control">
                </div>
                <div class="form-group text-center">
                    <button type="submit" class="btn btn-success">Save channel</button>
                </div>
            </form>
        </div>
    </div>

@endsection
