<?php

namespace App\Repositories;
use App\Contracts\BaseContract;
use Illuminate\Database\Eloquent\Model;

abstract class BaseRepository implements BaseContract
{
    protected $model;

    public function __construct(Model $model)
    {
        $this->model = $model; 
    }

    public function create(array $attributes)
    {
        return $this->model->create($attributes);
    }

    public function update(array $attributes, int $id)
    {
        return $this->find($id)->update($attributes);
    }

    public function find(int $id)
    {
        return $this->model->find($id);
    }

    public function delete(int $id): bool
    {
        return $this->model->find($id)->delete();
    }
}
