<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{   
    protected $table = 'answer';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 
        'correct',
        'question_id',  
    ];


}
