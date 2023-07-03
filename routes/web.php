<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\TheCakeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::group([], function () {
    
    

    Route::get('/',[ProductController::class,'list_category']);
    
    Route::post('/check_login',[TheCakeController::class,'check_session']);
    Route::get('/user',[TheCakeController::class,'user']);
    
    Route::get('/users',[TheCakeController::class,'users']);
    Route::get('/admin',[TheCakeController::class,'admin']);
});

Route::group([], function () {
   
    Route::get('/check',[IndexController::class,'index']);
});


Route::group(['prefix' => 'login'], function(){
    Route::get('/login',[TheCakeController::class,'login']);
    
    

Route::group([], function () {
    
    Route::get('/',[IndexController::class,'index']);

    Route::get('/',[ProductController::class,'list_category']);
    
    Route::post('/check_login',[TheCakeController::class,'check_session']);
    Route::get('/user',[TheCakeController::class,'user']);
    
    Route::get('/users',[TheCakeController::class,'users']);
    Route::get('/admin',[TheCakeController::class,'admin']);
});
    
});
Route::group(['prefix' => 'logout'], function(){
    Route::get('/log_out',[TheCakeController::class,'log_out']);
});
Route::group(['prefix' => 'register'], function(){
    Route::get('/register',[TheCakeController::class,'register']);
    Route::post('/save_account',[TheCakeController::class,'save_account']);

});

Route::group(['prefix' => 'allcategories'], function(){
    Route::get('/cateproduct/{name_category}',[ProductController::class,'cateProduct']);
    Route::get('/detailproduct/{name_product}',[ProductController::class,'detailproduct']);
    

});
Route::group(['prefix' => 'admin'], function() {
    Route::get('/add', [AdminController::class, 'add']);
    Route::post('/save', [AdminController::class, 'save']);
    Route::post('/savephoto', [AdminController::class, 'save_photo']);
    Route::get('/add', [AdminController::class, 'list_category']);
    Route::get('/addphoto', [AdminController::class, 'addphoto']);
    Route::get('/addphoto', [AdminController::class, 'list_product']);
    Route::get('/showproduct', [AdminController::class, 'show_product']);
    // Route::get('/showproduct', [AdminController::class, 'validate_add_photo']);
    Route::get('/showphoto', [AdminController::class, 'show_photo']);
    Route::get('/searchbykeyword_product_inphoto', [AdminController::class, 'searchbykeyword_product_inphoto']);
    Route::get('/searchbykeyword', [AdminController::class, 'searchbykeyword']);
    Route::get('/searchbykeyword_categoryinshowproduct', [AdminController::class, 'searchbykeyword_categoryinshowproduct']);
    Route::get('/showcategory', [AdminController::class, 'show_category']);
    Route::get('/searchbykeyword_categoryinshowcategory', [AdminController::class, 'searchbykeyword_categoryinshowcategory']);
    Route::get('/addcategory', [AdminController::class, 'add_category']);
    Route::post('/save_category', [AdminController::class, 'save_category']);
    Route::get('/detailproduct/{id_product}', [AdminController::class, 'detail_product']);
    Route::get('/detailcategory/{id_category}', [AdminController::class, 'detail_category']);
    Route::get('/deleteproduct/{id_product}', [AdminController::class, 'delete_product']);
    Route::get('/editproduct/{id_product}', [AdminController::class, 'edit_product']);
    Route::get('/editproduct/{id_product}', [AdminController::class, 'list_cate_ineditproduct']);
    Route::post('/update_product', [AdminController::class, 'update_product']);
});