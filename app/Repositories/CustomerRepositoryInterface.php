<?php


namespace App\Repositories;


interface CustomerRepositoryInterface
{
    public function getAll();

    public function save($obj);

    public function findCustomerById($id);

    public function delete($obj);

    public function search($obj);

}
