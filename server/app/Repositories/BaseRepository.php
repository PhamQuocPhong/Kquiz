<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;

/**
 * Class BaseRepository
 *
 * @package App\Repositories
 */
class BaseRepository implements BaseRepositoryInterface
{
    /**
     * @var Model
     */
    protected $model;
    
    /**
     * BaseRepository constructor.
     *
     * @param Model $model
     */
    public function __construct(Model $model)
    {
        $this->model = $model;
    }
    
    public function fetchAll($column = array('*'), $condition = null)
    {
        return $this->model->select($column)->get();
    }

    public function fetch($column = array('*'), array $condition = null)
    {
        return $this->model->where($condition)->first();
    }

    public function paginate($perPage, $column = array('*')){
        return $this->model->paginate($perPage);
    }

    public function update(array $condition, $data)
    {
        return $this->model->where($condition)->update($data);
    }

    public function create($data)
    {
        return  $this->model->create($data);
    }

    public function delete($id)
    {
        return $this->model->find($id);
    }

    public function softDeleted($id)
    {
        try {
            $obj = $this->model->find($id);
            $obj->delete();
        } catch (ModelNotFoundException $exception) {
            echo 'Cannot delete!';
        }
    }



}
