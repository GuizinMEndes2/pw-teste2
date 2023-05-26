<?php

use App\Http\Controllers\ProdutosController;
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

//teste da aula 25/05

// Route::get('/teste/{alguma_coisa?}', function($alguma_coisa = null){
//     return $alguma_coisa;
// });

// Route::get('teste-view/{param?}', function($param = null){
//     return view('teste-view', [
//         'valor_da_controller' => $param,
//     ]);
// });


Route::get('/', function () {
    return view('welcome');

});

Route::get('/produtos', [ProdutosController::class, 'index'])->name('produtos');

Route::get('/produtos/add',[ProdutosController::class, 'add'])->name('produtos.add');

Route::post('/produtos/add', [ProdutosController::class, 'addSave'])->name('produtos.addSave');
