<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QuestionTopic extends Model
{
    
    protected $table = 'question_topic';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'topic_id', 
        'question_id',
        'user_create',  
    ];

}

