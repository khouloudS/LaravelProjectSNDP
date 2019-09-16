<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {

        $products = Product::all();

        return view('admin.products.index', compact('products'));

    }

    public function create() {

        return view('admin.products.create');

    }

    public function store(Request $request) {

        $this->validate($request, [
            'nom' => 'required',
            'categorie' => 'required',
            'marque' => 'required',
            'prix' => 'required|numeric',
            'quantite' => 'required|numeric'
        ]);

        $product = Product::create($request->all());

        /*$p = new Product();
        $p->nom = $request->nom;
        $p->nom = $request->nom;
        $p->nom = $request->nom;
        $p->nom = $request->nom;*/

        return redirect()->route('products.show', $product->id);

    }

    public function show($id) {

        /*$p = Product::find($id);
        $p = Product::first($id);
        $p = Product::where('prix', '=', $prix);*/

        $product = Product::findOrFail($id);

        return view('admin.products.show', compact('product'));

    }

    public function edit($id) {

        $product = Product::findOrFail($id);

        return view('admin.products.edit', compact('product'));

    }

    public function update(Request $request, $id) {

        $product = Product::findOrFail($id);

        $product->fill($request->all());
        $product->save();

        return redirect()->route('products.show', $product->id);

    }

    public function delete($id) {

        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->route('products.index');

    }
}
