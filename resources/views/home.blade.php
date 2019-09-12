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
                <h6 class="border-bottom border-gray pb-2 mb-0">Najnovije teme</h6>
                @foreach($latestThreads as $thread)
                <div class="media text-muted pt-3">
                    <svg class="bd-placeholder-img mr-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title><rect width="100%" height="100%" fill="#007bff"/><text x="50%" y="50%" fill="#007bff" dy=".3em">32x32</text></svg>
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
                <small class="d-block text-right mt-3">
                    <a href="/threads">Sve teme</a>
                </small>
            </div>

            <div class="my-3 p-3 bg-white rounded shadow-sm">
                <h6 class="border-bottom border-gray pb-2 mb-0">Najpopularnije teme</h6>
                @foreach($popularThreads as $thread)
                    <div class="media text-muted pt-3">
                        <svg class="bd-placeholder-img mr-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title><rect width="100%" height="100%" fill="#007bff"/><text x="50%" y="50%" fill="#007bff" dy=".3em">32x32</text></svg>
                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray thread-body">
                            <strong class="d-block text-gray-dark">
                                <span class="badge badge-primary badge-pill">{{$thread->comments_count}}</span>
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
                <small class="d-block text-right mt-3">
                    <a href="#">Sve teme</a>
                </small>
            </div>

            <div class="my-3 p-3 bg-white rounded shadow-sm">
                <h6 class="border-bottom border-gray pb-2 mb-0">Novi korisnici</h6>
                @foreach($newUsers as $user)
                <div class="media text-muted pt-3">
                    <svg class="bd-placeholder-img mr-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title><rect width="100%" height="100%" fill="#007bff"/><text x="50%" y="50%" fill="#007bff" dy=".3em">32x32</text></svg>
                    <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                        <div class="d-flex justify-content-between align-items-center w-100">
                            <strong class="text-gray-dark">{{$user->name}}</strong>
                        </div>
                        <span class="d-block">Datum registracije : {{$user->created_at}}</span>
                    </div>
                </div>
                @endforeach
                <small class="d-block text-right mt-3">
                    <a href="#">Svi korisnici</a>
                </small>
            </div>
        </main>
    </div>
</div>
@endsection
