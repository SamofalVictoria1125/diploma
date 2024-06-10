<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ShopRequest;
use App\Models\Shop;

class ShopsController extends Controller
{
    public function store(ShopRequest $req) {
        $shop = new Shop();
        $shop->name = $req->input('name');
        $shop->address = $req->input('address');
        $shop->info = $req->input('info');
        $shop->save();

        return view('pages.admin.shop');
    }
}
