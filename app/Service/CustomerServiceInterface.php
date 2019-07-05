<?php


namespace App\Service;


interface CustomerServiceInterface
{
    public function getAll();
    public function getById($id);
    public function create($object);
    public function update($object,$id);
    public function delete($id);
}
