<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Todo;

class TodoList extends Component
{
    public $sortDirection = 'asc';
    public $sortColumnName = 'name';
    public $showFilter = 'show_all';

    public function render()
    {
        $todoQuery = Todo::orderBy($this->sortColumnName, $this->sortDirection);

        switch ($this->showFilter) {
            case 'show_undone':
                $todoQuery->where('todo_check', 0);
                break;

            case 'show_done':
                $todoQuery->where('todo_check', 1);
                break;    
            
            default:
                break;
        }

        $todo = $todoQuery->get();

        return view('livewire.todo-list', [
            'todos' => $todo,
            'sortColumnName' => $this->sortColumnName,
            'sortDirection' => $this->sortDirection,
            'showFilter' => $this->showFilter
        ]);
    }


    public function sortBy($columnName) {
        
        if ($columnName === $this->sortColumnName) {
            $this->sortDirection = $this->swapSortDirection();
        } else {
            $this->sortDirection = 'desc';
        }

        $this->sortColumnName = $columnName;
    }


    public function swapSortDirection() {
        return $this->sortDirection === 'asc' ? 'desc' : 'asc';
    }
}
