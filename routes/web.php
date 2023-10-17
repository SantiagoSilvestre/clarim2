<?php

use App\Http\Controllers\IndexController;
use App\Mail\MensagemTesteMail;
use Illuminate\Support\Facades\Mail;
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

Route::get('/', [IndexController::class, 'index']);

Route::get('/teste', function () {
    // return new MensagemTesteMail();
   Mail::to('s@s.com')->send(new MensagemTesteMail());
   return 'E-mail enviado com sucesso!';
});
