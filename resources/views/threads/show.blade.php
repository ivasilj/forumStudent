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
        @foreach($thread->comments as $comment)
        <div class="row justify-content-center">
            <div class="col-9 mt-3 card text-center">
                <form id="threadDelete-{{ $thread->id }}" method="POST" action="/threads/{{$thread->id}}">
                    @csrf
                    @method('DELETE')
                    @include('layouts.modal')
                </form>
                <div class="card-body">
                    <p class="card-text">{{$comment->body}}</p>
                        @if(Auth::user()->id === $comment->user_id)
{{--                        <a href="/comments/{{$comment->id}}/edit" class="btn btn-warning">Uredi</a>--}}
                        {{--                    <a href="#" class="btn btn-danger">Izbriši</a>--}}
                        <form id="commentDelete-{{ $comment->id }}" method="POST" action="/comments/{{$comment->id}}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" form_id="commentDelete-{{ $comment->id }}">Izbriši
                            </button>
                        </form>

                        @endif
                </div>
                <div class="d-flex card-footer text-muted justify-content-between">
                    <p>{{$comment->user->name}}</p>
                    <p>{{$comment->created_at->locale('hr')->diffForHumans()}}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
@endsection