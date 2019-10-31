<?php


namespace App\Services;


interface CustomerServiceInterface
{
    public function getAll();

    public function add($request);

    public function delete($id);

    public function edit($id, $request);

    public function findCustomerById($id);
}
