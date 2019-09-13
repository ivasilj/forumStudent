@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <main role="main" class="container">
                <div class="d-flex align-items-center p-3 my-3 text-white-50 rounded shadow-sm bg-info">
                    <img class="mr-3" src="{{ asset('images/logo_small.png') }}" alt="" width="100" height="56">
                    <div class="lh-100">
                        <h6 class="mb-0 lh-100 text-dark font-weight-bold special">SUM Forum</h6>
                        <small class="text-dark">2019</small>
                    </div>
                </div>
                <div class="my-3 p-3 bg-white rounded shadow-sm">
                    <h6 class="border-bottom border-gray pb-2 mb-0">Sve teme</h6>
                    @foreach($threads as $thread)
                        <div class="media text-muted pt-3">
                            <span class="thread-icon mx-2"></span>
                            <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray thread-body">
                                <strong class="d-block text-gray-dark">
                                    <a class="text-secondary" href="/threads/{{$thread->id}}">
                                        {{$thread->title}}
                                    </a>
                                </strong>
                                <a href="/threads/{{$thread->author->id}}">
                                    {{$thread->author->name}}
                                </a>
                            </p>
                        </div>
                    @endforeach
                </div>
                {{ $threads->links() }}
            </main>
        </div>
    </div>
@endsection
