<?php


namespace App\Service\Impl;


use App\APICustomer;
use App\Repositories\Interfaces\CustomerRepositoryInterface;
use App\Service\CustomerServiceInterface;

class CustomerServiceImpl implements CustomerServiceInterface
{
    protected $customerRepository;

    public function __construct(CustomerRepositoryInterface $customerRepository)
    {
        $this->customerRepository = $customerRepository;
    }

    public function getAll()
    {
        return $this->customerRepository->getAll();
    }

    public function getById($id)
    {
        return $this->customerRepository->getById($id);
    }

    public function delete($id)
    {
        $customer = $this->getById($id);
        if (isset($customer)) {
            $this->customerRepository->delete($customer);
            $messenger = "Success";
        }
        return $messenger;
    }

    public function create($object)
    {
        $newCustomer = new APICustomer();
        $newCustomer->firstname = $object['fisrtname'];
        $newCustomer->lastname = $object['lastname'];
        $this->customerRepository->create($newCustomer);
        $messenger = "Success";
        return $messenger;
    }

    public function update($object, $id)
    {
        $customer = $this->getById($id);
        if (isset($customer)) {
            $customer->firstname = $object['fisrtname'];
            $customer->lastname = $object['lastname'];
            $this->customerRepository->update($customer);
            $messenger = "Success";
        }
        return $messenger;
    }
}
