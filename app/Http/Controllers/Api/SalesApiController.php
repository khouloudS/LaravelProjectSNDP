<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Sale;


class SalesApiController
{
    public function index ()
    {
        return response()->json(['sales' => Sale::all()]);
    }
//quantite,product_id,customer_id,station_id
    public function store (Request $request)
    {
        $sale = new Sale;
        $sale->quantite = $request->quantite;
        $sale->product_id = $request->product_id;
        $sale->station_id = $request->station_id;
        $sale->save();

        return response()->json(['status' => true]);
    }

    public function show (Request $request)
    {
        $sale = Sale::find($request->id);
        if ($sale == null) {

            return response()->json(['status' => false]);
        }

        return response()->json(['sale' => $sale]);

    }

    public function delete (Request $request)
    {
       Sale::destroy($request->id);

        return response()->json(['status' => true]);
    }

    public function update (Request $request)
    {
        $sale = Sale::find($request->id);
        if ($sale == null) {
            return response()->json(['status' => false]);
        }
        $sale->quantite = $request->quantite;
        $sale->product_id = $request->product_id;
        $sale->station_id = $request->station_id;
        $sale->save();
        return response()->json(['status' => true]);

    }}
