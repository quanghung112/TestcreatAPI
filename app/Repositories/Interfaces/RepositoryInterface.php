<?php


namespace App\Repositories\Interfaces;


interface RepositoryInterface
{
    public function getAll();
    public function getById($id);
    public function create($data);
    public function update($data);
    public function delete($object);
}
