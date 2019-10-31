<?php


namespace App\Services\imple;


use App\City;
use App\Repositories\CityRepositoryInterface;
use App\Services\CityServiceInterface;

class CityService implements CityServiceInterface
{
    protected $cityRepo;

    public function __construct(CityRepositoryInterface $cityRepo)
    {
        $this->cityRepo = $cityRepo;
    }


    public function getAll()
    {
       return $this->cityRepo->getAll();
    }

    public function add($request)
    {
        $city = new City();
        $city->name = $request->name;
        $this->cityRepo->add($city);
    }

    public function delete($id)
    {
        $city=City::findOrFail($id);
        $this->cityRepo->delete($city,$id);
    }

    public function edit($id,$request)
    {
        $city=City::findOrFail($id);
        $city->name = $request->name;
        $this->cityRepo->edit($id,$city);
    }
}
