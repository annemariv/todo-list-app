@extends('app')

@section('title')
    Lisa ülesanne
@endsection

@section('content')

    <form action="store-data" method="post" class="mt-4 p-4">
        @csrf
        <div class="form-group m-3">
            <label for="name">Ülesande nimi</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" maxlength="50">
        </div>
        <div class="form-group m-3">
            <label for="description">Ülesande kirjeldus</label>
            <textarea class="form-control @error('description') is-invalid @enderror" name="description" rows="3" maxlength="300">{{ old('description') }}</textarea>
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
