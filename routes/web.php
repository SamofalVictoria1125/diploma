<?php

use App\Http\Controllers\Admin\CategoriesController;
use App\Http\Controllers\Admin\ProductsController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ShopsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('account', function(){
    return view('pages.account');
})->name('account');

Route::get('shops', function(){
    return view('shops');
})->name('shops');

Route::get('category', function(){
    return view('pages.admin.category');
})->name('category');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group(['middleware' => ['auth', 'role:admin']], function () {
    Route::prefix('admin')->group(function () {

        Route::prefix('categories')->group(function () {
            Route::get('/', [CategoriesController::class, 'index']);
            Route::get('/{category}', [CategoriesController::class, 'show']);
            Route::get('/{category}/delete', [CategoriesController::class, 'delete'])->name('category-delete');
            Route::put('/{category}', [CategoriesController::class, 'update']);
//            Route::get('/{category}/product/delete', [ProductsController::class, 'delete'])->name('product-delete');
            Route::post('/{category}/product', [CategoriesController::class, 'product']);
            Route::post('/', [CategoriesController::class, 'store'])
                ->name('categories-store');
        });

        Route::get('/shop', function () {
            return view('pages.admin.shop');
        });
        Route::post('/shop/store', [ShopsController::class, 'store']);




        Route::prefix('catalog')->group(function (){
            Route::get('/', function () {
                return view('pages.admin.catalog');
            });


            Route::post('/submit', [\App\Http\Controllers\Admin\ProductsController::class, 'submit'])
                ->name('catalog-submit');


        });

    });



});
