<?php

namespace App\Http\Controllers;

use App\Station;
use Illuminate\Http\Request;

class StationController extends Controller
{
    //
    public function index() {

        $stations = Station::all();

        return view('admin.stations.index', compact('stations'));

    }

    public function create() {

        return view('admin.stations.create');

    }

    public function store(Request $request) {

        $this->validate($request, [
            'nom' => 'required',
            'adresse' => 'required'

        ]);

        $station = Station::create($request->all());



        $station->nom = $request->nom;
        $station->adresse = $request->adresse;

        /*$p = new Product();
        $p->nom = $request->nom;
        $p->nom = $request->nom;
        $p->nom = $request->nom;
        $p->nom = $request->nom;*/

        return redirect()->route('stations.show', $station->id);

    }

    public function show($id) {

        /*$p = Product::find($id);
        $p = Product::first($id);
        $p = Product::where('prix', '=', $prix);*/

        $station = Station::findOrFail($id);

        return view('admin.stations.show', compact('station'));

    }

    public function edit($id) {

        $station = Station::findOrFail($id);

        return view('admin.stations.edit', compact('station'));

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
