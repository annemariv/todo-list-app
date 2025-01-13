@extends('app')
 
@section('title')
    Minu ülesanded 
@endsection

@section('content')
<div>
    <div class="d-flex justify-content-center align-items-center mt-4" >
        <a href="/create" class="text-decoration-none text-dark">
            <button class="btn btn-custom text-dark d-flex px-3 py-2"><i class="bi bi-plus-lg"></i>Lisa ülesanne</button>
        </a>
    </div>
    <div class="col-12 align-self-center">
        @livewire('todo-list')
    </div>
</div>
@endsection