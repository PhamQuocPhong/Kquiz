<?php

namespace App\Repositories\Eloquents;

use App\Models\Subject;
use App\Repositories\Contracts\SubjectRepositoryInterface;
use App\Repositories\BaseRepository;

class SubjectRepository extends BaseRepository implements SubjectRepositoryInterface
{
	protected $model;


	/**
     * SubjectRepository constructor.
    */

	public function __construct(Subject $model)
    {
        parent::__construct($model);
    }



}	
