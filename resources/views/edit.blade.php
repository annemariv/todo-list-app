@extends('app')

@section('title')
    Muuda
@endsection

@section('content')
    <form action="{{ route('todos.update', $todos->id) }}" method="post" class="mt-4 p-4">
        @csrf
        <div class="form-group m-3">
            <label for="name">Ülesande nimi</label>
            <input type="text" class="form-control" value="{{$todos->name}}" name="name">
        </div>
        <div class="form-group m-3">
            <label for="description">Ülesande kirjeldus</label>
            <textarea class="form-control" name="description" rows="3"> {{$todos->description}} </textarea>
        </div>
        <div class="form-group m-3">
            <input type="submit" class="btn btn-success text-light float-end text-success" value="Salvesta">
        </div>
        <style>
            .btn-success{
                background-color: #419844 !important;
            }
        </style>
    </form>
@endsection