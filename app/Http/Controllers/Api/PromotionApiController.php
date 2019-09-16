<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Promotion;
use Illuminate\Http\Request;

class PromotionApiController extends Controller
{
    public function index() {

        $promotions = Promotion::all();

        return response()->json([
            /*"status" => "success",
            "message" => "products list",
            "payload" => $products*/
            "promotions" => $promotions
        ]);

    }


    public function store(Request $request) {

        $this->validate($request, [
            'pourcentage' => 'required|numeric',
            'datedebut' => 'required|date',
            'datefin' => 'required|date'
        ]);

        $promotion = Promotion::create($request->all());

        return response()->json([
            "message" => "promotion ajouté",
            "produit" => $promotion
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

        $promotion = Promotion::findOrFail($id);

        return response()->json([
            "promotion" => $promotion
        ]);

        //return view('admin.products.show', compact('product'));

    }

    public function update(Request $request, $id) {

        $promotion = Promotion::findOrFail($id);

        $promotion->fill($request->all());
        $promotion->save();

        return redirect()->route('promotions.show', $promotion->id);

    }

    public function delete($id) {

        $promotion = Promotion::findOrFail($id);
        $promotion->delete();

        return redirect()->route('promotions.index');

    }
}
