<?php

namespace App\Http\Controllers;
use App\City;
use App\Customer;
use App\Http\Requests\CustomerValidateRequest;
use Illuminate\Http\Request;

class CustomerController extends Controller
{

    public function index()
    {
        $customers = Customer::all();
        return view('customer.index', compact('customers'));
    }


    public function create()
    {
        $cities= City::all();
        return view('customer.create',compact('cities'));

    }


    public function store(CustomerValidateRequest $request)
    {
        $customer = new Customer();
        $customer->name = $request->name;
        $customer->dob = $request->dob;
        $customer->email = $request->email;
        $customer->city_id = $request->city_id;
        $customer->save();

        return redirect()->route('customers.index');
    }

    public function show(Customer $customer)
    {

    }


    public function edit($id)
    {
        $customer = Customer::findOrFail($id);
        $cities= City::all();
        return view('customer.edit', compact('customer','cities'));
    }


    public function update(CustomerValidateRequest $request, $id)
    {
        $customer = Customer::findOrFail($id);
        $customer->name = $request->name;
        $customer->dob = $request->dob;
        $customer->email = $request->email;
        $customer->city_id = $request->city_id;
        $customer->save();

        return redirect()->route('customers.index');
    }


    public function destroy($id)
    {
        $customer = Customer::findOrFail($id);
        $customer->delete();
        return redirect()->route('customers.index');
    }
}
