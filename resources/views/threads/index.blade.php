@extends('layouts.app')

@section('content')
    <div class="container mt-3">
        <div class="col-8 mx-auto">
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
                    <?php $cond = count($thread->replies); $someText = "Reply"; ?>
                    @if($cond!=1)
                        <?php $someText = "Replies"; ?>
                    @endif
                    <div class="card rounded my-2">
                        <div class="card-body">
                            <div class="d-flex align-items-start mb-2">
                                <img src="{{$thread->user->getAvatar()}}" class="rounded-circle" alt="Avatar" height="40px" width="40px">
                                <div class="ml-2">
                                    <h6 class="mt-1 mb-0">{{$thread->user->name}}</h6>
                                    <small class="text-muted mt-0">Last updated at {{$thread->updated_at}}</small>
                                </div>
                            </div>
                            <h5 class="card-title thread-thumbnail"><a href="/threads/{{$thread->id}}" class="text-dark">{{$thread->question}}</a></h5>
                            
                            <p class="reply-thumbnail"> 
                            {{$thread->body}}
                            </p>

                            <div class="ml-2">
                                <small class="text-muted mt-0"> {{$thread->replies->count()}} {{$someText}}</small>
                            </div>

                        </div>
                    </div>
                @endforeach
                <span class="d-block mx-auto">{{$threads->links()}}</span>
            @else
                <p>No threads found</p>
            @endif
        </div>
    </div>
@endsection