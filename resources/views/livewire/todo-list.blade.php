<div class="row mt-3">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col" class="align-middle">
                        ÜLESANDE NIMI
                        <span wire:click="sortBy('name')" class="btn btn-sm mb-2">
                            <i class="bi bi-arrow-up {{ $sortColumnName === 'name' && $sortDirection === 'asc' ? 'fs-5' : 'text-muted' }}"></i>
                            <i class="bi bi-arrow-down {{ $sortColumnName === 'name' && $sortDirection === 'desc' ? 'fs-5' : 'text-muted' }}"></i>
                        </span>
                    </th>
                    <th scope="col" class="text-end align-middle">
                        <select wire:model="showFilter" class="border p-1 text-slate-600 text-md rounded">
                            <option value="show_all">Näita kõiki</option>
                            <option value="show_undone">Näita tegemata</option>
                            <option value="show_done">Näita tehtud</option>
                        </select>
                    </th>
                </tr>
                    
            </thead>
            <tbody>
                @foreach($todos as $todo)
                <tr class="table-item">
                    <th scope="row" class="align-items-center fw-normal">
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
                    </th>
                    <th scope="row" class="d-flex gap-2 justify-content-end">
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
                    </th>
                </tr>
                @endforeach
            </tbody>
        </table>
    <style>
        .btn-custom {
            background-color: #69a4cf !important;
            color:white !important;
        }
        .table-custom {
            background-color: #f8f9fa;
        }
    </style>
</div>