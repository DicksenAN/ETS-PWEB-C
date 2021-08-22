@extends('layouts.app')

@section('content')
  <div class="container">
    @if (session('status'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('status') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    @endif
    
    {{-- Question --}}
    <small class="text-muted">{{$thread->user->name}} · Created at {{$thread->created_at}} · Updated at {{$thread->updated_at}}</small>
    <h3 class="mt-1 mb-3 font-weight-bold">{{$thread->question}}</h3>
    <p> {{$thread->body}} </p>

    @if($thread->user_id == auth()->user()->id)
      <button type="button" class="btn btn-success" data-toggle="modal" data-target="#editModal" >Edit</button>
      {{-- <a href="/threads/{{$thread->id}}/edit" class="btn btn-success ml-auto">Edit</a> --}}
      
      <!-- Modal -->
      <div class="modal fade" id="editModal" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Edit Pertanyaan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                  <form method="post" action="/threads/{{$thread->id}}">
                    @method('patch')
                    @csrf
                    <div class="form-group">
                      <label for="question">Edit your post</label>
                      <textarea class="form-control @error('question') is-invalid @enderror" name="question" id="question" rows="2" value="{{$thread->question}}">{{$thread->question}}</textarea>
                      <div class="invalid-feedback">
                        Please enter a title.
                      </div>
                      <label for="question">Edit your details</label>
                      <textarea class="form-control @error('bodiz') is-invalid @enderror" name="bodiz" id="bodiz" rows="5" value="{{$thread->question}}">{{$thread->body}}</textarea>
                      <div class="invalid-feedback">
                        Please enter details.
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
                </div>
            </div>
        </div>
      </div>
      
      
      <form action="/threads/{{$thread->id}}" method="post" class="d-inline">
        @method('delete')
        @csrf
        <button type="submit" class="btn btn-danger">Delete</button>
      </form>
    @else
      <button type="button" class="btn btn-main" data-toggle="modal" data-target="#answer" ><i class="fas fa-edit mr-1"></i>Answer</button>
    @endif
    <?php $cond = count($thread->replies); $someText = "Reply" ?>

    @if($cond!=1)
    <?php $someText = "Replies"; ?>
    @endif

    <hr>
    <h6>{{count($thread->replies)}} {{$someText}}</h6>
    <hr>

      @foreach($replies as $reply)

      <div class="card rounded my-2">
        <div class="card-body">
          <div class="d-flex align-items-start mb-2">
            <img src="{{$reply->user->getAvatar()}}" class="rounded-circle" alt="Avatar" height="40px" width="40px">
            <div class="ml-2">
              <h6 class="mt-1 mb-0">{{$reply->user->name}}</h6>
              <small class="text-muted mt-0">Last updated at {{$reply->updated_at}}</small>
            </div>
          </div>
          @if($reply->user_id == auth()->user()->id)
            <a href="/replies/{{$reply->id}}/edit" class="btn btn-success reply-action"><i class="fas fa-pencil-alt"></i></i></a>
            <form action="/replies/{{$reply->id}}" method="post" class="d-inline">
              @method('delete')
              @csrf
              <button type="submit" class="btn btn-danger reply-action"><i class="fas fa-trash"></i></button>
            </form>
          @endif
          <p class="card-text text-dark reply-body mt-2">{!! nl2br(e($reply->body)) !!}</p>
        </div>
      </div>

      @endforeach
  </div>

      <div class="modal fade" id="answer" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Tambah Jawaban</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="{{route('storecomment', $thread->id)}}">
                            @csrf
                            <div class="form-group">
                                <label for="body">Input your answer</label>
                                <textarea class="form-control @error('body') is-invalid @enderror" name="body" id="body" rows="5"></textarea>
                                <div class="invalid-feedback">
                                    Please enter an answer.
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
@endsection