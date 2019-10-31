<?php


namespace App\Repositories\Eloquent;


use App\Customer;
use App\Repositories\CustomerRepositoryInterface;

class CustomerEloquentRepository implements CustomerRepositoryInterface
{
    protected $customer;
    public function __construct(Customer $customer)
    {
        $this->customer =$customer;
    }

    public function getAll()
    {
        return $this->customer->all();
    }
}
