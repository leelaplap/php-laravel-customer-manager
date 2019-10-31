<?php

namespace App\Http\Controllers;

use App\City;
use App\Services\CityServiceInterface;
use Illuminate\Http\Request;

class CityController extends Controller
{
    protected $cityService;

    public function __construct(CityServiceInterface $cityService)
    {
        $this->cityService = $cityService;
    }

    public function index()
    {
        $cities = $this->cityService->getAll();
        return view('city.index', compact('cities'));
    }


    public function create()
    {
        return view('city.create');
    }


    public function store(Request $request)
    {
        $this->cityService->add($request);
        return redirect()->route('cities.index');
    }


    public function show(City $city)
    {
        //
    }


    public function edit($id)
    {
        $city = City::findOrFail($id);
        return view('city.edit', compact('city'));
    }


    public function update(Request $request, $id)
    {
//        $city = City::findOrFail($id);
//        $city->name = $request->name;
//        $city->save();
        $this->cityService->edit($id,$request);
        return redirect()->route('cities.index');

    }

    public function destroy($id)
    {
        $this->cityService->delete($id);
        return redirect()->route('cities.index');

    }


}
