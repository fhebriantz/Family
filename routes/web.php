<?php


Route::get('product/category/{id}','Web\Web_ProductController@show_list_category_prod'); 
Route::get('product/main/{id}','Web\Web_ProductController@show_list_main_prod'); 


Route::get('/', function () {
    return view('pages/user/login');
});

Route::get('/logout', 'LogoutController@index');

Auth::routes();

Route::get('index', 'Web\Web_IndexController@show');

Route::get('about', 'Web\Web_AboutController@show');

Route::get('product', 'Web\Web_ProductController@show');
// menampilkan form view di cms
Route::get('product/{id}','Web\Web_ProductController@view'); 

Route::get('contact', 'Web\Web_ContactController@show');

Route::get('news', 'Web\Web_NewsController@show');
Route::get('news/{id}','Web\Web_NewsController@view');

Route::post('question/input', 'Web_QuestionController@insert');

Route::get('/home', 'AboutController@showcms');

Route::get('cms/question', 'QuestionController@show');

Route::delete('cms/{id}/delete','QuestionController@delete');

Route::get('cms/forgotpass', 'ForgotpassController@show'); 

// ------------------------------------------------------------------------------------------------ABOUT

// ABOUT===========TAMPIL=======================
// menampilkan tabel about di frontend
Route::get('/abouts', 'AboutController@show');
// menampilkan tabel about di cms
Route::get('cms/about', 'AboutController@showcms'); 
// menampilkan form input di cms
Route::get('cms/about/input', 'AboutController@input');
// menampilkan form edit di cms
Route::get('cms/about/{id}/edit','AboutController@edit');  
// menampilkan form view di cms
Route::get('cms/about/{id}/view','AboutController@view');  

// ABOUT===========FUNGSI=======================

// memanggil fungsi insert
Route::post('/cms/about/input','AboutController@insert'); 
// memanggil fungsi update
Route::put('cms/about/{id}/edit','AboutController@update');  
// memanggil fungsi delete
Route::delete('cms/about/{id}/delete','AboutController@delete');

// ------------------------------------------------------------------------------------------------News

// News===========TAMPIL=======================
// menampilkan tabel news di frontend
Route::get('/newss', 'NewsController@show');
// menampilkan tabel news di cms
Route::get('cms/news', 'NewsController@showcms'); 
// menampilkan form input di cms
Route::get('cms/news/input', 'NewsController@input');
// menampilkan form edit di cms
Route::get('cms/news/{id}/edit','NewsController@edit');  
// menampilkan form view di cms
Route::get('cms/news/{id}/view','NewsController@view');  

// News===========FUNGSI=======================

// memanggil fungsi insert
Route::post('/cms/news/input','NewsController@insert'); 
// memanggil fungsi update
Route::put('cms/news/{id}/edit','NewsController@update');  

Route::put('cms/news/{id}/edit/delete1','NewsController@delete1'); 
// memanggil fungsi delete
Route::delete('cms/news/{id}/delete','NewsController@delete');

// --------------------------------------------------------------------------------------------Highlight

// Highlight===========TAMPIL=======================
// menampilkan tabel highlight di frontend
Route::get('/highlights', 'HighlightController@show');
// menampilkan tabel highlight di cms
Route::get('cms/highlight', 'HighlightController@showcms'); 
// menampilkan form input di cms
Route::get('cms/highlight/input', 'HighlightController@input');
// menampilkan form edit di cms
Route::get('cms/highlight/{id}/edit','HighlightController@edit');  
// menampilkan form view di cms
Route::get('cms/highlight/{id}/view','HighlightController@view');  

// Highlight===========FUNGSI=======================

// memanggil fungsi insert
Route::post('/cms/highlight/input','HighlightController@insert'); 
// memanggil fungsi update
Route::put('cms/highlight/{id}/edit','HighlightController@update');  

// ---------------------------------------------------------------------------------PRODUCT CATEGORY

// PRODUCT CATEGORY ===========TAMPIL============
// menampilkan tabel di frontend
Route::get('/products', 'Category_productController@show');
// menampilkan tabel di cms
Route::get('cms/product', 'Category_productController@showcms'); 
// menampilkan form input di cms
Route::get('cms/product/input', 'Category_productController@input');
// menampilkan form edit di cms
Route::get('cms/product/{id}/edit','Category_productController@edit'); 
// menampilkan form view di cms
Route::get('cms/product/{id}/view','Category_productController@view'); 

// PRODUCT CATEGORY ===========FUNGSI=======================
// memanggil fungsi insert
Route::post('/cms/product/input','Category_productController@insert'); 
// memanggil fungsi update
Route::put('cms/product/{id}/edit','Category_productController@update');  
// memanggil fungsi delete
Route::delete('cms/product/{id}/delete','Category_productController@delete');

// -------------------------------------------------------------------------------SUBPRODUCT CATEGORY

// SUBPRODUCT CATEGORY ===========TAMPIL============
// menampilkan tabel di frontend
Route::get('/product/subproduct', 'Category_subproductController@show');
// menampilkan tabel di cms
Route::get('cms/product/subproduct', 'Category_subproductController@showcms'); 
// menampilkan form input di cms
Route::get('cms/product/subproduct/input', 'Category_subproductController@input');
// menampilkan form edit di cms
Route::get('cms/product/subproduct/{id}/edit','Category_subproductController@edit');
// menampilkan form view di cms
Route::get('cms/product/subproduct/{id}/view','Category_subproductController@view');  
// SUBPRODUCT CATEGORY ===========FUNGSI============
// memanggil fungsi insert
Route::post('/cms/product/subproduct/input','Category_subproductController@insert'); 
// memanggil fungsi update
Route::put('cms/product/subproduct/{id}/edit','Category_subproductController@update');  
// memanggil fungsi delete
Route::delete('cms/product/subproduct/{id}/delete','Category_subproductController@delete');

// -------------------------------------------------------------------------------------------DETAIL

// DETAIL ===========TAMPIL============
// menampilkan tabel di frontend
Route::get('/product/subproduct/detail', 'Product_detailController@show');
// menampilkan tabel di cms
Route::get('cms/product/subproduct/detail', 'Product_detailController@showcms'); 
// menampilkan form input di cms
Route::get('cms/product/subproduct/detail/input', 'Product_detailController@input');
// menampilkan form edit di cms
Route::get('cms/product/subproduct/detail/{id}/edit','Product_detailController@edit'); 
// menampilkan form view di cms
Route::get('cms/product/subproduct/detail/{id}/view','Product_detailController@view'); 

// DETAIL ===========FUNGSI============
// memanggil fungsi insert
Route::post('/cms/product/subproduct/detail/input','Product_detailController@insert'); 
// memanggil fungsi update
Route::put('cms/product/subproduct/detail/{id}/edit','Product_detailController@update');  


Route::put('cms/product/subproduct/detail/{id}/edit/delete1','Product_detailController@delete1'); 
Route::put('cms/product/subproduct/detail/{id}/edit/delete2','Product_detailController@delete2'); 
Route::put('cms/product/subproduct/detail/{id}/edit/delete3','Product_detailController@delete3'); 
Route::put('cms/product/subproduct/detail/{id}/edit/delete4','Product_detailController@delete4'); 
Route::put('cms/product/subproduct/detail/{id}/edit/delete5','Product_detailController@delete5'); 
// memanggil fungsi delete
Route::delete('cms/product/subproduct/detail/{id}/delete','Product_detailController@delete');

//---------------------------------------------------------------------------------------------FAQ

// FAQ===========TAMPIL=======================
// menampilkan tabel di frontend
Route::get('/faq', 'FaqController@show');
// menampilkan tabel di cms
Route::get('cms/faq', 'FaqController@showcms'); 
// menampilkan form input di cms
Route::get('cms/faq/input', 'FaqController@input');
// menampilkan form edit di cms
Route::get('cms/faq/{id}/edit','FaqController@edit');  
// menampilkan form view di cms
Route::get('cms/faq/{id}/view','FaqController@view');  

// ABOUT===========FUNGSI=======================
// memanggil fungsi delete
Route::delete('cms/faq/{id}/delete','FaqController@delete');
// memanggil fungsi insert
Route::post('/cms/faq/input','FaqController@insert'); 
// memanggil fungsi update
Route::put('cms/faq/{id}/edit','FaqController@update');  



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
