@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-9 card text-center">
                <form id="threadDelete-{{ $thread->id }}" method="POST" action="/threads/{{$thread->id}}">
                    @csrf
                    @method('DELETE')
                    @include('layouts.modal')
                </form>
                <div class="card-header font-weight-bold">
                    <h4>{{$thread->title}}</h4>
                </div>
                <div class="card-body">
                    <p class="card-text thread-body">{{$thread->body}}</p>
                    @can('update', $thread)
                        <a href="/threads/{{$thread->id}}/edit" class="btn btn-warning">Uredi</a>
                        <button type="button" class="btn btn-danger" data-toggle="modal"
                                data-target="#modalDelete-{{$thread->id }}">Izbriši
                        </button>
                    @endcan
                </div>
                <div class="d-flex card-footer text-muted justify-content-between">
                    <p>{{$thread->author->name}}</p>
                    <p>{{$thread->created_at->locale('hr')->diffForHumans()}}</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            @foreach($thread->comments as $comment)
            <div class="col-9 mt-3 card text-center">
                <form id="threadDelete-{{ $thread->id }}" method="POST" action="/threads/{{$thread->id}}">
                    @csrf
                    @method('DELETE')
                    @include('layouts.modal')
                </form>
                <div class="card-body">
                    <p class="card-text">{{$comment->body}}</p>
                        @if(Auth::user()->id === $comment->user_id)
                        <form id="commentDelete-{{ $comment->id }}" method="POST" action="/comments/{{$comment->id}}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" form="commentDelete-{{ $comment->id }}">Izbriši
                            </button>
                        </form>
                        @endif
                </div>
                <div class="d-flex card-footer text-muted justify-content-between">
                    <p>{{$comment->user->name}}</p>
                    <p>{{$comment->created_at->locale('hr')->diffForHumans()}}</p>
                </div>
            </div>
            @endforeach
            <div class="col-9 mt-3 d-flex justify-content-end">
                <button type="button" class="btn btn-primary" data-toggle="modal"
                        data-target="#modalComment">Dodaj komentar
                </button>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modalComment" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Dodaj komentar</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <form id="addComment" method="POST" action="/comments">
                            <input type="hidden" name="thread_id" value="{{$thread->id}}">
                            @csrf
                            <label for="body"></label>
                            <textarea id="body" name ="body" form="addComment" class="form-control text-left" rows="3"></textarea>
                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Zatvori</button>
                    <button type="submit" class="btn btn-primary" form="addComment">Dodaj</button>
                </div>
            </div>
        </div>
    </div>
@endsection