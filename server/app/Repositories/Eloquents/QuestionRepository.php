<?php

namespace App\Repositories\Eloquents;

use App\Models\Question;
use App\Repositories\Contracts\QuestionRepositoryInterface;
use App\Repositories\BaseRepository;

class QuestionRepository extends BaseRepository implements QuestionRepositoryInterface
{
	protected $model;


	/**
     * QuestionRepository constructor.
    */

	public function __construct(Question $model)
    {
        parent::__construct($model);
    }

}	
