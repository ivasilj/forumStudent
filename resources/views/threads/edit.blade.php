@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row my-4 justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <h1>Uredi temu</h1>
                    <hr>

                    <form method="POST" action="/threads/{{$thread->id}}">
                        @csrf
                        @method('PATCH')

                        <div class="form-group">
                            <label for="title">Naslov</label>
                            <input type="text" class="form-control" id="title" name="title" value="{{$thread->title}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Tekst</label>
                            <textarea name ="body" class="form-control text-left" id="exampleFormControlTextarea1" rows="3">{{$thread->body}}</textarea>
                        </div>
                        <button type="submit" class="btn btn-primary form-group">Potvrdi</button>
                        <div class="form-group">
                        </div>
                    </form>
                    @include('layouts.errors')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection