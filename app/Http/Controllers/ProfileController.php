<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function showName()
    {
        $name = "Benny Santoso";

        $customer = Customer::all();

        $data = [
            'myname' => $name,
            'mycustomers' => $customer
        ];

        return view('profile', $data);
    }

    public function showCustomerName()
    {
        $customer = "Dani Wijaya";

        return view('customer')->with('name', $customer);
    }

    public function showSelectedCustomerName($id)
    {
        $customer = Customer::get(['customer_id', 'name', 'address']);
        $selectedCustomer = $customer->where('customer_id', $id)->first();

        $data = [
          'selectedCustomer' => $selectedCustomer,
          'customer' => $customer
        ];

        $newName = "ANDY HARTANTA";

        if(empty($customer->where('name', $newName)->first())) {
            $newCustomer = new Customer();
            $newCustomer->name = $newName;
            $newCustomer->save();
        }

        return view('selectedcustomer', $data);
    }
}




