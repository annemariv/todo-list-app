@extends('app')

@section('title')
    Ülesande detailid
@endsection

@section('content')

    <div class="card text-center mt-5">
        <div class="card-header">
            <b>Ülesande detailid</b>
        </div>
        <div class="card-body">
            <label for="name">Ülesande nimi</label>
            <p class="card-text">{{$todos->name}}</p>
            
            @if(!empty($todos->description))
                <label for="description">Ülesande kirjeldus</label>
                <p class="card-text">{{$todos->description}}</p>
            @endif
            
        </div>
    </div>

@endsection