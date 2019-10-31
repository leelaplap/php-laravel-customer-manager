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

    public function add($request)
    {
        $request->save();
    }

    public function delete($obj,$id)
    {
        $obj->delete($id);
    }

    public function edit($id, $request)
    {
        $request->save();
    }
}
