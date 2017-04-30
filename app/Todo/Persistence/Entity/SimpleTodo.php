<?php

namespace App\Todo\Persistence\Entity;

use Illuminate\Database\Eloquent\Model;

class SimpleTodo extends Model
{

    protected $fillable = ['todo'];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'todo';
}
