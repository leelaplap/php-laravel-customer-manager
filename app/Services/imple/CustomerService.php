<?php


namespace App\Services\imple;


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
}
