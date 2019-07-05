<?php


namespace App\Repositories\Eloquent;

use App\Repositories\Interfaces\RepositoryInterface;

abstract class EloquentRepository implements RepositoryInterface
{
    protected $model;

    public function __construct()
    {
        $this->setModel();
    }

    abstract function getModel();

    public function setModel()
    {
        $this->model= app()->make($this->getModel());
    }

    public function getById($id)
    {
        return $this->model->findOrFail($id);
    }

    public function create($data)
    {
        $this->model=$data;
        $this->model->save();
    }

    public function update($data)
    {
        $this->model=$data;
        $this->model->save();
    }

    public function delete($object)
    {
        $this->model=$object;
        $this->model->delete();
    }

    public function getAll()
    {
        return $this->model->all();
    }
}
