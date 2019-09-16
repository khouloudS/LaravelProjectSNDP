<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Customer;

class CustomerApiController
{
    //
    public function index ()
    {
        return response()->json(['customers' => Customer::all()]);
    }

    public function store (Request $request)
    {
        $customer = new Customer;
        $customer->cin = $request->cin;
        $customer->nom = $request->nom;
        $customer->prenom = $request->prenom;
        $customer->phone = $request->phone;
        $customer->save();

        return response()->json(['status' => true]);
    }

    public function show (Request $request)
    {
        $customer = Customer::find($request->id);
        if ($customer == null) {
            //customer not found
            return response()->json(['status' => false]);
        }

        return response()->json(['customer' => $customer]);

    }

    public function delete (Request $request)
    {
        Customer::destroy($request->id);

        return response()->json(['status' => true]);
    }

    public function update (Request $request)
    {
        $customer = Customer::find($request->id);
        if ($customer == null) {
            return response()->json(['status' => false]);
        }
        $customer->cin = $request->cin;
        $customer->nom = $request->nom;
        $customer->prenom = $request->prenom;
        $customer->phone = $request->phone;
        $customer->save();
        return response()->json(['status' => true]);

    }
}
