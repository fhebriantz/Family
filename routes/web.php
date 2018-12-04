<?php

Route::get('/', 'Controller@method')
    ->name('my_route_name');
    
Route::get('product/category/{id}','Web\Web_ProductController@show_list_category_prod'); 
Route::get('product/main/{id}','Web\Web_ProductController@show_list_main_prod'); 


Route::get('/', 'Web\Web_IndexController@show');

Route::get('/english', 'Web\Web_IndexController@english');
Route::get('/bahasa', 'Web\Web_IndexController@bahasa');


Route::get('/logout', 'LogoutController@index');

Route::get('/product/filter','Web\Web_ProductController@filter');

Auth::routes();

Route::get('/index', 'Web\Web_IndexController@show');

Route::get('about', 'Web\Web_AboutController@show');

Route::get('product', 'Web\Web_ProductController@show');
// menampilkan form view di cms
Route::get('product/{id}','Web\Web_ProductController@view'); 

Route::get('contact', 'Web\Web_ContactController@show');

Route::get('news', 'Web\Web_NewsController@show');
Route::get('news/{id}','Web\Web_NewsController@view');

Route::post('question/input', 'Web\Web_QuestionController@insert');

Route::get('/home', 'ImagesController@showcms')->name('home');

Route::get('cms/question', 'QuestionController@show');

Route::delete('cms/{id}/delete','QuestionController@delete');

// ----------------------------------Widget

Route::get('cms/widget', 'WidgetController@showcms');

Route::get('cms/widget/{id}/edit','WidgetController@edit'); 

Route::put('cms/widget/{id}/edit','WidgetController@update');

//------------------------------------------------------------------ USER

Route::get('cms/forgotpass', 'LoginController@list_user'); 

Route::get('cms/forgotpass/input', 'LoginController@input');
// menampilkan form edit di cms
Route::get('cms/forgotpass/{id}/edit','LoginController@edit'); 

// forgotpass CATEGORY ===========FUNGSI=======================
// memanggil fungsi insert
Route::post('/cms/forgotpass/input','LoginController@insert'); 
// memanggil fungsi update
Route::put('cms/forgotpass/{id}/edit','LoginController@update');  
// memanggil fungsi delete
Route::delete('cms/forgotpass/{id}/delete','LoginController@delete');

// ------------------------------------------------------------------------------------------------ABOUT

Route::get('login_cms', 'LoginController@show'); 
Route::post('login_cms', 'LoginController@login');
Route::get('logout_cms', 'LoginController@logout');

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

// --------------------------------------------------------------------------------------------Images

// Images===========TAMPIL=======================
// menampilkan tabel highlight di frontend
Route::get('/highlights', 'ImagesController@show');
// menampilkan tabel highlight di cms
Route::get('cms/highlight', 'ImagesController@showcms'); 
// menampilkan form input di cms
Route::get('cms/highlight/input', 'ImagesController@input');
// menampilkan form edit di cms
Route::get('cms/highlight/{id}/edit','ImagesController@edit');  
// menampilkan form view di cms
Route::get('cms/highlight/{id}/view','ImagesController@view');  

// Images===========FUNGSI=======================

// memanggil fungsi insert
Route::post('/cms/highlight/input','ImagesController@insert'); 
// memanggil fungsi update
Route::put('cms/highlight/{id}/edit','ImagesController@update');  

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
// show price
Route::get('cms/product/show_price', 'Product_detailController@show_price'); 
// hide price
Route::get('cms/product/hide_price', 'Product_detailController@hide_price'); 
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


// menampilkan tabel di cms
Route::get('/cms/mainan', 'MainanController@showcms'); 
// menampilkan form input di cms
Route::get('/cms/mainan/input', 'MainanController@input');
// menampilkan form edit di cms
Route::get('/cms/mainan/{id}/edit','MainanController@edit');
// memanggil fungsi insert
Route::post('/cms/mainan/input','MainanController@insert'); 
// memanggil fungsi update
Route::put('/cms/mainan/{id}/edit','MainanController@update');
// memanggil fungsi delete
Route::delete('/cms/mainan/{id}/delete','MainanController@delete');

// menampilkan tabel di cms
Route::get('/cms/ban', 'BanController@showcms'); 
// menampilkan form input di cms
Route::get('/cms/ban/input', 'BanController@input');
// menampilkan form edit di cms
Route::get('/cms/ban/{id}/edit','BanController@edit');
// memanggil fungsi insert
Route::post('/cms/ban/input','BanController@insert'); 
// memanggil fungsi update
Route::put('/cms/ban/{id}/edit','BanController@update');
// memanggil fungsi delete
Route::delete('/cms/ban/{id}/delete','BanController@delete');

// menampilkan tabel di cms
Route::get('/cms/sandaran', 'SandaranController@showcms'); 
// menampilkan form input di cms
Route::get('/cms/sandaran/input', 'SandaranController@input');
// menampilkan form edit di cms
Route::get('/cms/sandaran/{id}/edit','SandaranController@edit');
// memanggil fungsi insert
Route::post('/cms/sandaran/input','SandaranController@insert'); 
// memanggil fungsi update
Route::put('/cms/sandaran/{id}/edit','SandaranController@update');
// memanggil fungsi delete
Route::delete('/cms/tag/sandaran/{id}/delete','SandaranController@delete');


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


// menampilkan tabel di cms
Route::get('cms/contact', 'ContactController@showcms'); 
// menampilkan form edit di cms
Route::get('cms/contact/{id}/edit','ContactController@edit');  

// memanggil fungsi update
Route::put('cms/contact/{id}/edit','ContactController@update');  

// ABOUT===========FUNGSI=======================
// memanggil fungsi delete
Route::delete('cms/faq/{id}/delete','FaqController@delete');
// memanggil fungsi insert
Route::post('/cms/faq/input','FaqController@insert'); 
// memanggil fungsi update
Route::put('cms/faq/{id}/edit','FaqController@update');  


// Images===========TAMPIL=======================
// menampilkan tabel slidertext di cms
Route::get('cms/slidertext', 'SlidertextController@show_slidertext'); 
// menampilkan form edit di cms
Route::get('cms/slidertext/{id}/edit','SlidertextController@edit_slidertext');  

// Images===========FUNGSI=======================
// memanggil fungsi update
Route::put('cms/slidertext/{id}/edit','SlidertextController@update_slidertext');  

// ---------------------------------------------------------------------------------PRODUCT CATEGORY



Auth::routes();
