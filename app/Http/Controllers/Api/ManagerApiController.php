<?php
/**
 * Created by PhpStorm.
 * User: khouloud
 * Date: 28/11/2017
 * Time: 20:38
 */

namespace App\Http\Controllers\Api;
use App\Manager;
use Illuminate\Http\Request;

class ManagerApiController
{

    public function index() {

        $managers = Manager::all();

        return response()->json([
            /*"status" => "success",
            "message" => "products list",
            "payload" => $products*/
            "managers" => $managers
        ]);

    }


    public function store(Request $request) {

        $this->validate($request, [
            'nom' => 'required',
            'prenom' => 'required',
            'adresse' => 'required',
            'phone' => 'required|numeric',
            'login' => 'required',
            'passe' => 'required'

        ]);

        $manager = Manager::create($request->all());

        return response()->json([
            "message" => "manager ajouté",
            "manager" => $manager
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

        $manager = Manager::findOrFail($id);

        return response()->json([
            "manager" => $manager
        ]);

        //return view('admin.products.show', compact('product'));

    }

    public function update(Request $request, $id) {

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

