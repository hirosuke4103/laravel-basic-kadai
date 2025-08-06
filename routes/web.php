<?php

use Illuminate\Support\Facades\Route;
<<<<<<< HEAD
=======
// ルーティングを設定するコントローラを宣言する
use App\Http\Controllers\PostController;
>>>>>>> 73a481d (最初のコミット)

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

Route::get('/', function () {
    return view('welcome');
});
<<<<<<< HEAD
=======

Route::get('/posts', [PostController::class, 'index']);
>>>>>>> 73a481d (最初のコミット)
