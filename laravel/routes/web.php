<?php

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

Route::get('/', "PaginaController@index")->name('home');
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/faq', "PaginaController@faq");

Route::get('/register', "PaginaController@register");

Route::get('/login', "PaginaController@login");

// Route::get('/perfil', "PaginaController@perfil")->middleware(['auth']);

// ------------------------------------------------

Route::get('/productos', "ProductController@listado");

Route::get('/productos/{id}', "ProductController@detail");

Route::get('/producto/new', "ProductController@seenew")->middleware(['auth','admin']);

Route::post('/producto/new', "ProductController@create")->middleware(['auth','admin']);

Route::get('/eliminar/{id}', "ProductController@delete")->middleware(['auth','admin']);

Route::get('/editar/{id}', "ProductController@edit1")->middleware(['auth','admin']);

Route::post('/editar/{id}', "ProductController@edit2")->middleware(['auth','admin']);

Route::get('/pasarprecios', "ProductController@pasar")->middleware(['auth','admin']);

// ----------------------------------------------

Route::get('/carrito', "CartController@listado")->middleware(['auth'])->name('carrito');
//
Route::post('/compra/{id}', "CartController@add")->middleware(['auth']);
//
Route::get('/carrito/{id}', "CartController@cancel")->middleware(['auth']);

Route::get('/pedido', "CartController@pedido")->middleware(['auth']);

Route::get('/carrito/mas/{id}', "CartController@mas")->middleware(['auth']);

Route::get('/carrito/menos/{id}', "CartController@menos")->middleware(['auth']);

// ----------------------------------------------

// Buscador
// Route::get('/categorias/{name}', [
//     'uses' => 'FrontController@searchCategory',
//     'as' => 'front.search.category'
// ]);

Route::get('/categorias/{name}', "FrontController@searchCategory");

Route::get('/categorias/{name}/{subname}', "FrontController@searchSubcategory");

Route::get('/busqueda', "FrontController@search");

Route::get('/filtro/{filter}', "FrontController@filter");
Route::get('/filtro/{filter}/{categoty}', "FrontController@filter2");
Route::get('/filtro/{filter}/{categoty}/{subcategoty}', "FrontController@filter3");

// ----------------------------------------------
// pagos

// Route::post('/payment/pay', "PaymentController@pay")->name('pay');
//
// Route::get('/payment/approval', "PaymentController@approval")->name('approval');
//
// Route::get('/payment/cancelled', "PaymentController@cancelled")->name('cancelled');
Route::post('/payments/pay', 'PaymentController@pay')->name('pay');
Route::get('/payments/approval', 'PaymentController@approval')->name('approval');
Route::get('/payments/cancelled', 'PaymentController@cancelled')->name('cancelled');


// ----------------------------------------------


// Route::get('/producto', "CandyRashController@producto");
//
// Route::get('/perfil', "CandyRashController@perfil")->middleware(['auth']);;
//


// Route::get('/candys/new', "CandyRashController@new")->middleware(['auth', 'is_admin']);;
// Route::post('/candys/new', "CandyRashController@create")->middleware(['auth', 'is_admin']);;
//
// Route::get('/candys/{id}', "CandyRashController@detail")->middleware(['auth']);;
// //
// Route::get('/candys/edit/{id}', "CandyRashController@edit");
// Route::post('/candys/edit/{id}', "CandyRashController@edit2");
// Route::get('/candys/eliminate/{id}', "CandyRashController@eliminate");
// Route::post('/candys/eliminate/{id}', "CandyRashController@delete");
// //

// Route::get('/home', 'HomeController@index')->name('home');
//
//
// Route::get('/home', 'HomeController@index')->name('home');
//
//
// route::post('/candys' , 'CarritoController@crear');
//
// Route::get('/carrito', "CarritoController@listado")->middleware(['auth']);;
// Route::get('/carrito/{id}', "CarritoController@eliminar")->middleware(['auth']);;
// Route::get('/compras/{id}', "CarritoController@comprar")->middleware(['auth']);;
// Route::post('/carrito', "CarritoController@eliminar");

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
