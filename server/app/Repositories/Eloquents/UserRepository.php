<?php

namespace App\Repositories\Eloquents;

use App\Models\User;
use App\Repositories\Contracts\UserRepositoryInterface;
use App\Repositories\BaseRepository;

class UserRepository extends BaseRepository implements UserRepositoryInterface
{
	protected $model;


	/**
     * UserRepository constructor.
    */

	public function __construct(User $model)
    {
        parent::__construct($model);
    }

    /**
     * Update
     * @param $code
     * @param array $data
     * @return mixed
     */

}	
