<?php


namespace App\Services\imple;


use App\Customer;
use App\Repositories\CustomerRepositoryInterface;
use App\Services\CustomerServiceInterface;

class CustomerService implements CustomerServiceInterface
{
    protected $customerRepo;
    public function __construct(CustomerRepositoryInterface $customerRepo)
    {
        $this->customerRepo = $customerRepo;
    }


    public function getAll()
    {
        return $this->customerRepo->getAll();
    }

    public function add($request)
    {
        $customer = new Customer();
        $customer->name = $request->name;
        $customer->dob = $request->dob;
        $customer->email = $request->email;
        $customer->city_id = $request->city_id;
        return $this->customerRepo->save($customer);
    }

    public function delete($id)
    {
       $customer= $this->customerRepo->findCustomerById($id);
        $this->customerRepo->delete($customer);
    }

    public function edit($id, $request)
    {
        $customer= $this->customerRepo->findCustomerById($id);
        $customer->name = $request->name;
        $customer->dob = $request->dob;
        $customer->email = $request->email;
        $customer->city_id = $request->city_id;
        return $this->customerRepo->save($customer);
    }

    public function findCustomerById($id)
    {
        return $this->customerRepo->findCustomerById($id);
    }
}
