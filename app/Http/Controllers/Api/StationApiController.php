<?php
/**
 * Created by PhpStorm.
 * User: khouloud
 * Date: 28/11/2017
 * Time: 20:41
 */

namespace App\Http\Controllers\Api;


use App\Station;

class StationApiController
{
    public function index() {

        $stations = Station::all();

        return response()->json([
            /*"status" => "success",
            "message" => "products list",
            "payload" => $products*/
            "stations" => $stations
        ]);

    }


    public function store(Request $request) {

        $this->validate($request, [
            'nom' => 'required',
            'adresse' => 'required'


        ]);

        $station = Station::create($request->all());

        return response()->json([
            "message" => "station ajouté",
            "station" => $station
        ]);

        /*$p = new Product();
        $p->nom = $request->nom;
        $p->nom = $request->nom;
        $p->nom = $request->nom;
        $p->nom = $request->nom;*/

        //return redirect()->route('products.show', $product->id);

    }

    public function show($id) {

        /*$p = Product::find($id);
        $p = Product::first($id);
        $p = Product::where('prix', '=', $prix);*/

        $station = Station::findOrFail($id);

        return response()->json([
            "station" => $station
        ]);

        //return view('admin.products.show', compact('product'));

    }

    public function update(Request $request, $id) {

        $station = Station::findOrFail($id);

        $station->fill($request->all());
        $station->save();

        return redirect()->route('stations.show', $station->id);

    }

    public function delete($id) {

        $station = Station::findOrFail($id);
        $station->delete();

        return redirect()->route('stations.index');

    }
}

