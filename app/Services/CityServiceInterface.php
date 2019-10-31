<?php


namespace App\Services;


interface CityServiceInterface
{
    public function getAll();

    public function add($request);

    public function delete($id);

    public function edit($id,$request);

    public function findCityById($id);
}
