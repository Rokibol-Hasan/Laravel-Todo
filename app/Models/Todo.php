<?php

namespace App\Models;

use Hamcrest\Core\HasToString;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    use HasFactory;

    // public function getTodoAttribute($todos){
    //     return ucfirst($todos);

    // }
    public function setTitleAttribute($title){
        return $this->attributes['title'] = ucfirst($title);
    }

    public function setTodoAttribute($todo)
    {
        return $this->attributes['todo'] = ucfirst($todo);
    }
}
