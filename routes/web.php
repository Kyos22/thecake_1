<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\TheCakeController;
use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'login'], function(){
    Route::get('/',[TheCakeController::class,'login']);
});
    

Route::group([], function () {

    // Route::get('/',[ProductController::class,'list_category']);
    
    Route::post('/check_login',[TheCakeController::class,'check_session']);
    Route::get('/',[IndexController::class,'index']);
    Route::get('/myaccount',[TheCakeController::class,'user']); 
    Route::get('/users',[TheCakeController::class,'users']);
    Route::get('/admin',[TheCakeController::class,'admin']);
    Route::get('/logoutuser',[IndexController::class,'logout_user']);
    Route::get('/logoutadmin',[IndexController::class,'logout_admin']);
    // Route::post('/sortby/{id_category}',[ProductController::class,'sort_by']);
    
});
    

Route::group(['prefix' => 'register'], function(){
    Route::get('/register',[TheCakeController::class,'register']);
    Route::post('/save_account',[TheCakeController::class,'save_account']);

});

Route::group(['prefix' => 'allcategories'], function(){
    Route::get('/cateproduct/{name_category}',[ProductController::class,'cateProduct']);
    Route::get('/detailproduct/{name_product}',[ProductController::class,'detailproduct']);
    Route::get('/cateproductuser/{name_category}',[ProductController::class,'cateProductuser']);
    Route::get('/detailproductuser/{name_product}',[ProductController::class,'detailproductuser']);

    Route::get('/allproduct',[ProductController::class,'allProduct']);
    Route::get('/allproductuser',[ProductController::class,'allProductuser']);
});
Route::group(['prefix' => 'pages'], function(){
    Route::get('/blog',[ProductController::class,'blog']);
    Route::get('/bloguser',[ProductController::class,'bloguser']);
    Route::get('/bloglist/{id_blog}',[ProductController::class,'bloglist']);
    Route::get('/bloglistuser/{id_blog}',[ProductController::class,'bloglistuser']);
    Route::get('/aboutus',[TheCakeController::class,'aboutus']);
    Route::get('/aboutususer',[TheCakeController::class,'aboutususer']);
    Route::get('/news',[TheCakeController::class,'news']);
    Route::get('/newsuser',[TheCakeController::class,'newsuser']);
    Route::get('/collectionlist',[TheCakeController::class,'collectionlist']);
    Route::get('/collectionlistuser',[TheCakeController::class,'collectionlistuser']);
    Route::get('/faq',[TheCakeController::class,'faq']);
    Route::get('/faquser',[TheCakeController::class,'faquser']);

    Route::get('contact',[TheCakeController::class,'contact'])->name('contact');
    Route::get('contactuser',[TheCakeController::class,'contactuser'])->name('contact');
    Route::post('postcontact',[TheCakeController::class,'postcontact']);

  
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
    Route::get('/deletephoto/{id_photo}', [AdminController::class, 'delete_photo']);
    Route::get('/deletecategory/{id_category}', [AdminController::class, 'delete_category']);
    Route::get('/deleteblog/{id_blog}', [AdminController::class, 'delete_blog']);
    Route::get('/editproduct/{id_product}', [AdminController::class, 'edit_product']);
    Route::get('/editblog/{id_blog}', [AdminController::class, 'edit_blog']);
    Route::get('/editcategory/{id_category}', [AdminController::class, 'edit_category']);
    Route::get('/editproduct/{id_product}', [AdminController::class, 'list_cate_ineditproduct']);
    Route::post('/update_product/{id_product}', [AdminController::class, 'update_product']);
    Route::post('/update_category/{id_category}', [AdminController::class, 'update_category']);
    Route::post('/update_blog/{id_blog}', [AdminController::class, 'update_blog']);
    Route::get('/formcreateadmin',[AdminController::class,'registeradmin']);
    Route::get('/showdelete',[AdminController::class,'showdelete']);
    Route::get('/showdelete',[AdminController::class,'showdelete']);
    Route::post('/delete_all',[AdminController::class,'delete_all'])->name('item.delete');

    Route::get('/showblog',[AdminController::class,'show_blog']);
    Route::get('/addblog',[AdminController::class,'add_blog']);
    Route::post('/save_blog',[AdminController::class,'save_blog']);


    

    
});
    Route::get('/cart', [CartController::class, 'cart']);
    Route::post('/addcart/{id_product}', [CartController::class, 'addcart']);
    Route::get('/deletecart/{id}',[CartController::class,'deletecart']);
    Route::post('/checkout',[CartController::class,'checkout']);