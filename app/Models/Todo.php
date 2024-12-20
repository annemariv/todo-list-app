<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name', 
        'description', 
        'todo_check'];

    protected $casts = [
        'todo_check' => 'boolean',
    ];
}
