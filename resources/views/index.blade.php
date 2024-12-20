@extends('app')
 
@section('title')
    Minu ülesanded 
@endsection

@section('content')
<br>
<div class="d-flex justify-content-center align-items-center" >
    <a href="/create" class="text-decoration-none text-dark">
        <button class="btn btn-custom text-dark d-flex px-3 py-2"><i class="bi bi-plus-lg"></i>Lisa ülesanne</button>
    </a>
</div>
<div class="row mt-3">
    <div class="col-12 align-self-center">
        <ul class="list-group">
            @foreach($todos as $todo)
                <li class="list-group-item d-flex align-items-center justify-content-between">
                    <div class="d-flex align-items-center">
                        <form action="{{ route('todos.update', $todo->id) }}" method="POST" class="d-inline">
                        @csrf  
                            <input type="hidden" name="todo_check" value="0">
                            <input type="checkbox" name="todo_check" id="todo_check{{ $todo->id }}" value="1" class="me-2"
                                @if($todo->todo_check) checked @endif
                                onchange="this.form.submit();">
                            <label for="todo_{{ $todo->id }}" style="color: black; cursor: pointer;">
                                <a href="details/{{$todo->id}}" class="{{ $todo->todo_check ? 'text-decoration-line-through' : '' }}" style="color: black; text-decoration: none">{{$todo->name}}</a>
                            </label>
                        </form>
                    </div>
                    <div class="d-flex gap-2">
                        <a href="{{ route('todos.edit', ['todo' => $todo->id]) }}">
                            <span class="btn btn-sm btn-custom text-light">
                                <i class="bi bi-pencil"></i>
                            </span>
                        
                        </a>
                        <a href="{{ route('delete.todo', ['todo' => $todo->id]) }}">
                            <span class="btn btn-sm btn-danger text-light"> 
                                <i class="bi bi-x"></i>
                            </span>
                        </a>
                    </div>
                </li>
            @endforeach
        </ul>
        
    </div>
    <style>
        .btn-custom {
            background-color: #69a4cf !important;
            color:white !important;
        }
    </style>
</div>
@endsection