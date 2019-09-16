<?php

namespace App\Http\Controllers;

use App\Manager;
use Illuminate\Http\Request;

class ManagerController extends Controller
{
    //
    public function index() {

        $managers =Manager::all();

        return view('admin.managers.index', compact('managers'));

    }

    public function create() {

        return view('admin.managers.create');

    }

    public function store(Request $request) {

        $this->validate($request, [
            'nom' => 'required',
            'prenom' => 'required',
            'adresse' => 'required',
            'phone' => 'required|numeric',
            'login'=> 'required',
            'passe' => 'required'

        ]);
   //     $manager = Manager::findOrFail($id);


        $manager = new Manager();

        $manager->nom = $request->nom;
        $manager->prenom = $request->prenom;
        $manager->adresse = $request->adresse;
        $manager->phone = $request->phone;
        $manager->login = $request->login;
        $manager->passe = $request->passe;

       // $manager->station_id = 1;
       $manager->station_id = $request->station_id;
        $manager->save();

        return redirect()->route('managers.show', $manager);

    }

    public function show($id) {

        /*$p = Product::find($id);
        $p = Product::first($id);
        $p = Product::where('prix', '=', $prix);*/

        $manager = Manager::findOrFail($id);



        return view('admin.managers.show', compact('manager'));

    }

    public function edit($id) {

        $manager = Manager::findOrFail($id);

        return view('admin.managers.edit', compact('manager'));

    }

    public function update(Request $request, $id) {

        $this->validate($request, [
            'nom' => 'required',
            'prenom' => 'required',
            'adresse' => 'required',
            'phone' => 'required|numeric',
            'login' => 'required',
            'passe' => 'required'

        ]);

        $manager = Manager::findOrFail($id);

        $manager->fill($request->all());
        $manager->save();

        return redirect()->route('managers.show', $manager->id);

    }

    public function delete($id) {

        $manager = Manager::findOrFail($id);
        $manager->delete();

        return redirect()->route('managers.index');

    }
}
