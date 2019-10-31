<?php


namespace App\Repositories\Eloquent;


use App\City;
use App\Repositories\CityRepositoryInterface;

class CityEloquentRepository implements CityRepositoryInterface
{
    protected $city;

    public function __construct(City $city)
    {
        $this->city = $city;
    }

    public function getAll()
    {
        return $this->city->paginate(5);
    }



    public function delete($obj)
    {
        $obj->delete();
    }


    public function findCityById($id)
    {
     return $this->city->findOrFail($id);
    }

    public function save($obj)
    {
        $obj->save();
    }
}
