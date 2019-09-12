@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="card text-center">
                <form id="threadDelete-{{ $thread->id }}" method="POST" action="/threads/{{$thread->id}}">
                    @csrf
                    @method('DELETE')
                    @include('layouts.modal')
                </form>
                <div class="card-header">
                    {{$thread->author->name}}
                </div>
                <div class="card-body">
                    <h5 class="card-title font-weight-bold">{{$thread->title}}</h5>
                    <p class="card-text">{{$thread->body}}</p>
                    <a href="" class="btn btn-warning">Uredi</a>
{{--                    <a href="#" class="btn btn-danger">Izbriši</a>--}}
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modalDelete-{{$thread->id }}">Izbriši</button>

                </div>
                <div class="card-footer text-muted">
                    {{$thread->created_at->diffForHumans()}}
                </div>
            </div>
        </div>
    </div>
@endsection