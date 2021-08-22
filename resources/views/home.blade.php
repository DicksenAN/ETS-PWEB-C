@extends('layouts.app')

@section('content')

    <div class="container mt-3">
        <div class="row mb-3">
            <div class="col-8 mx-auto">
                <h3 class="font-weight-bold">Your threads</h3>
                <hr>
                @if (session('status'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('status') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
                @if(count($threads) > 0)
                    @foreach($threads as $thread)
                        <div class="card rounded my-2">
                            <div class="card-body">
                                <small class="text-muted">Last updated at {{$thread->updated_at}}</small>
                            <h5 class="font-weight-bold mt-2"><a href="/threads/{{$thread->id}}" class="text-dark">{{$thread->question}}</a></h5>
                            </div>
                        </div>
                    @endforeach
                @else
                    <p>You have not made any threads yet.</p>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="col-8 mx-auto">
                <h3 class="font-weight-bold">Your answers</h3>
                <hr>
                @if(count($replies) > 0)
                    @foreach($replies as $reply)
                        <div class="card rounded my-2">
                            <div class="card-body">
                                <small class="text-muted">Last updated at {{$reply->updated_at}}</small>
                                <a href="/threads/{{$reply->thread->id}}" class="d-block h5 mt-2 text-dark font-weight-bold">View thread</a>
                                <p class="card-text text-dark mt-2">{!! nl2br(e($reply->body)) !!}</p>
                            </div>
                        </div>
                        
                    @endforeach
                @else
                    <p>You have not made any answers yet.</p>
                @endif
            </div>
        </div>
    </div>
@endsection
