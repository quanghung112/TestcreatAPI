<?php


namespace App\Repositories\Eloquent;


use App\APICustomer;
use App\Repositories\Interfaces\CustomerRepositoryInterface;

class CustomerEloquentRepository extends EloquentRepository implements CustomerRepositoryInterface
{
    public function getModel()
    {
        return APICustomer::class;
    }
}
