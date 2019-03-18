<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Http\Requests\RegisterForm;
use Illuminate\Http\Request;
use DB;
use Validator;
use Log;

class ProfileController extends Controller
{
    public function showName()
    {
        $name = "Benny Santoso";

        $customer = Customer::all();

        $newCustomer = Customer::find(1);
        $newCustomer->name = "Nama saya";
        $newCustomer->address = "Nama saya";
        $newCustomer->save();

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

        return view('selectedcustomer', $data);
    }

    public function logTest(Request $request)
    {
        $total_access = DB::table('logs')
                ->where('path', $request->path())
                ->count();

        return "Halaman ini telah diakses sebanyak " . $total_access . " kali.";
    }

    public function showRegister()
    {
        return view('register');
    }

    public function registerFormUser(RegisterForm $request)
    {
        Log::emergency("One");
        Log::alert("Two");
        Log::critical("Three");
        Log::error("Four");
        Log::warning("Five");
        Log::notice("Six");
        Log::info("Seven");
        Log::debug("Eight");

        return redirect('/');
    }
}





