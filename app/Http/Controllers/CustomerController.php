<?php

namespace App\Http\Controllers;

use App\City;
use App\Customer;
use App\Http\Requests\CustomerValidateRequest;
use App\Services\CityServiceInterface;
use App\Services\CustomerServiceInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    protected $customerService;
    protected $cityService;

    public function __construct(CustomerServiceInterface $customerService, CityServiceInterface $cityService)
    {
        $this->customerService = $customerService;
        $this->cityService = $cityService;
    }

    public function index()
    {
        $customers = $this->customerService->getAll();
        return view('customer.index', compact('customers'));
    }


    public function create()
    {
        $cities = $this->cityService->getAll();
        return view('customer.create', compact('cities'));

    }


    public function store(CustomerValidateRequest $request)
    {
        $this->customerService->add($request);
        return redirect()->route('customers.index');
    }

    public function show(Customer $customer)
    {

    }


    public function edit($id)
    {
        $customer = $this->customerService->findCustomerById($id);
        $cities = $this->cityService->getAll();
        return view('customer.edit', compact('customer', 'cities'));
    }


    public function update(CustomerValidateRequest $request, $id)
    {
        $this->customerService->edit($id, $request);
        return redirect()->route('customers.index');
    }


    public function destroy($id)
    {
        $this->customerService->delete($id);
        return redirect()->route('customers.index');
    }

    public function search(Request $request)
    {
        $search = $request->get('search');

        $customers = Customer::where('name', 'LIKE', "%$search%")->paginate(1);
        return view('customer.index', compact('customers'));

    }
}
