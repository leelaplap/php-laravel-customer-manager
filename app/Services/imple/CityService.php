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
        $this->cityRepo->save($city);
    }

    public function delete($id)
    {
        $city = $this->cityRepo->findCityById($id);
        $this->cityRepo->delete($city);
    }

    public function edit($request, $id)
    {
        $city = $this->cityRepo->findCityById($id);
        $city->name = $request->name;
        $this->cityRepo->save($city);
    }

    public function findCityById($id)
    {
        return $this->cityRepo->findCityById($id);
    }

}
