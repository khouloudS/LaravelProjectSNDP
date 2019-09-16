<?php

namespace App\Http\Controllers;

use App\Product;
use App\Promotion;
use Illuminate\Http\Request;

class PromotionController extends Controller
{
    public function index() {

        $promotions = Promotion::all();

        return view('admin.promotions.index', compact('promotions'));

    }


    public function create($id) {

        $product = Product::findOrFail($id);

        return view('admin.promotions.create', compact('product'));

    }

    public function store(Request $request, $id) {

        $this->validate($request, [
            'pourcentage' => 'required|numeric',
            'datedebut' => 'required|date',
            'datefin' => 'required|date'
        ]);

        $product = Product::findOrFail($id);

        $promotion = new Promotion();

        $promotion->pourcentage = $request->pourcentage;
        $promotion->datedebut = $request->datedebut;
        $promotion->datefin = $request->datefin;
        $promotion->station_id = $request->station_id;

        /*
         * Calcul prix
         */

        $promotion->prixfinal = (float) $product->prix * ( 1 - (float) $request->pourcentage / 100 );

        /*
         * Fin Calcul prix
         */

        $promotion->product_id = $product->id;
        //$promotion->station_id = $request->station_id;


        $promotion->save();

        return redirect()->route('promotions.show', $promotion);
        //return view('admin.promotions.show', compact('promotion'));
    }

    public function show($id) {

        $promotion = Promotion::findOrFail($id);
        return view('admin.promotions.show', compact('promotion'));
    }

    public function edit($id) {

        $promotion = Promotion::findOrFail($id);

        return view('admin.promotions.edit', compact('promotion'));

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
