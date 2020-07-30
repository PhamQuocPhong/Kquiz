<?php

namespace App\Repositories;

use Exception;
use Illuminate\Database\Eloquent\Model;

/**
 * Interface BaseRepositoryInterface
 *
 * @package App\Repositories
 */
interface BaseRepositoryInterface
{
    public function fetchAll($column = array('*'), array $condition = null);

    public function fetch($column = array('*'), array $condition = null); 

    public function paginate($perPage, $columns = array('*'));

    public function update(array $condition, $data);

    public function create($data);

    public function delete($id);

    public function softDeleted($id);

}
