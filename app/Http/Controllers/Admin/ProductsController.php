<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Models\Product;

class ProductsController extends Controller
{
    public function submit(ProductRequest $req){
        //$validation = $req->validate([
        //'name' => 'required|min:5|max:12',
        //'info' => 'required|min:10|max:60',
        //'firma' => 'required|max:20'
        //]);

        $product = new Product();
        $product->name = $req->input('name');
        $product->info = $req->input('info');
        $product->firm = $req->input('firm');



        $product->save();

        return redirect()->route('catalog')->with('success', 'Товар был успешно добавлен');
    }

    public function delete($id) {
            Product::find($id)->delete();

        return redirect()->route('catalog');
    }

}
