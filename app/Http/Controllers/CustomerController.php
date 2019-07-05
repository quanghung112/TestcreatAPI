<?php

namespace App\Http\Controllers;

use App\Service\CustomerServiceInterface;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    protected $customerService;
    public function __construct(CustomerServiceInterface $customerService)
    {
        $this->customerService=$customerService;
    }

    public function index()
    {
        $customers = $this->customerService->getAll();

        return response()->json($customers);
    }

    public function show($id)
    {
        $dataCustomer = $this->customerService->getById($id);

        return response()->json($dataCustomer);
    }

    public function store(Request $request)
    {
        $messenger = $this->customerService->create($request->all());

        return response()->json($messenger);
    }

    public function update(Request $request, $id)
    {
        $messenger = $this->customerService->update($request->all(), $id);

        return response()->json($messenger);
    }

    public function destroy($id)
    {
        $messenger = $this->customerService->delete($id);
        return response()->json($messenger);
    }
}
