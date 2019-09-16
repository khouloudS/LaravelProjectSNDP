<?php

namespace App\Http\Controllers;
use App\Customer;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index() {

        $customers = Customer::all();

        return view('admin.customers.index', compact('customers'));

    }

    public function show($id) {

        /*$p = Product::find($id);
        $p = Product::first($id);
        $p = Product::where('prix', '=', $prix);*/

        $customer =customer::findOrFail($id);

        return view('admin.customers.show', compact('customer'));

    }






}
