@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="my-3 p-3 bg-white rounded shadow-sm">
                <h6 class="border-bottom border-gray pb-2 mb-0">Korisnici</h6>
                @foreach($users as $user)
                    <div class="media text-muted pt-3">
                        <svg class="bd-placeholder-img mr-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title><rect width="100%" height="100%" fill="#007bff"/><text x="50%" y="50%" fill="#007bff" dy=".3em">32x32</text></svg>
                        <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                            <div class="d-flex justify-content-between align-items-center w-100">
                                <strong class="text-gray-dark">{{$user->name}}</strong>
                            </div>
                            <span class="d-block">E-mail: {{$user->email}} </span>
                            <span class="d-block">Fakultet: {{$user->college->name}} </span>
                            <span class="d-block">Datum registracije: {{$user->created_at}} </span>
                        </div>
                    </div>
                @endforeach
            <div class="d-flex mt-3 justify-content-end">{{$users->links()}}</div>
            </div>
        </div>
    </div>
@endsection