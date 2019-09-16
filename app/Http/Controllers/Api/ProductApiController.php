<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Http\Request;

class ProductApiController extends Controller
{
    public function index() {

        $products = Product::all();

        return response()->json([
            /*"status" => "success",
            "message" => "products list",
            "payload" => $products*/
            "products" => $products
        ]);

    }


    public function store(Request $request) {

        $this->validate($request, [
            'nom' => 'required',
            'categorie' => 'required',
            'marque' => 'required',
            'prix' => 'required',
            'quantite' => 'required'
        ]);

        $product = Product::create($request->all());

        return response()->json([
            "message" => "produit ajouté",
            "produit" => $product
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

        $product = Product::findOrFail($id);

        return response()->json([
            "produit" => $product
        ]);

        //return view('admin.products.show', compact('product'));

    }

    public function update(Request $request, $id) {

     /*   $product = Product::findOrFail($id);

        $product->fill($request->all());
        $product->save();
*/
        //return redirect()->route('products.show', $product->id);

        return "update";
    }

    public function delete($id) {

        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->route('products.index');

    }
}
