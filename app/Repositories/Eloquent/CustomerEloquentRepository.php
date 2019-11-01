<?php


namespace App\Repositories\Eloquent;


use App\Customer;
use App\Repositories\CustomerRepositoryInterface;

class CustomerEloquentRepository implements CustomerRepositoryInterface
{
    protected $customer;

    public function __construct(Customer $customer)
    {
        $this->customer = $customer;
    }

    public function getAll()
    {
        return $this->customer->paginate(1);
    }

    public function save($obj)
    {
        $obj->save();
    }

    public function findCustomerById($id)
    {
        return $this->customer->findOrFail($id);
    }

    public function delete($obj)
    {
      $obj->delete();
    }
}
