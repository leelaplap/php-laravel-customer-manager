<?php


namespace App\Repositories;


interface CityRepositoryInterface
{
    public function getAll();

    public function save($obj);

    public function delete($obj);


    public function findCityById($id);

}
