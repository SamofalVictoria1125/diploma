<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Http\Requests\ProductRequest;
use App\Models\Category;
use App\Models\Firm;
use App\Models\Product;

class CategoriesController extends Controller
{
    public function index() {
        $categories = Category::all();

        return view('pages.admin.categories.index', ['categories' => $categories]);
    }

    public function show(Category $category) {
        $firms = Firm::all();

        return view('pages.admin.categories.show', ['category' => $category, 'firms' => $firms]);
    }

    public function store(CategoryRequest $req) {
        $category = new Category();
        $category->name = $req->input('name');
        $category->label = $req->input('label');
        $category->save();

        return redirect()->to('/admin/categories')->with('success', 'Категория добавлена');
    }

    public function product(Category $category, ProductRequest $req) {
        Product::create([
            'name' => $req->get('name'),
            'info' => $req->get('info'),
            'price' => $req->get('price'),
            'firm_id' => $req->get('firm_id'),
            'category_id' => $category->id
        ]);

        return redirect()->back();
    }

    public function update(Category $category, CategoryRequest $req) {
        $category->name = $req->input('name');
        $category->label = $req->input('label');
        $category->save();

        return redirect()->back();
    }

    public function delete($id) {
        Category::find($id)->delete();

        return redirect()->back();
    }


}
