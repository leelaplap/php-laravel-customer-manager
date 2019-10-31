<?php


namespace App\Repositories;


interface CityRepositoryInterface
{
    public function getAll();

    public function add($request);

    public function delete($obj, $id);

    public function edit($id,$request);


}
