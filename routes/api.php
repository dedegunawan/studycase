<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/vapi/v1/ping', [\App\Http\Controllers\WrapperApiController::class, 'ping'])
    ->middleware(\App\Http\Middleware\NpmMiddleware::class)
    ->name('ping');
Route::get('/vapi/v1/time', [\App\Http\Controllers\WrapperApiController::class, 'time'])
    ->middleware(\App\Http\Middleware\NpmMiddleware::class)
    ->name('time');

Route::get('/user/identitas', function () {
    return [
        'code' => 0,
        'data' => [
            'npm' => '197006078',
            'nama' => 'Muhammad Zakaria',
            'email' => 'zakaria@unsil.ac.id'
        ]
    ];
})
    ->middleware(\App\Http\Middleware\NpmMiddleware::class)
    ->name('identitas');
