<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\VocabularyController;

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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::group(['prefix' => 'vocabulary'], function () {
    // Route::post('/', 'VocabularyController@show');
    // Route::get('/random', 'VocabularyController@random');
    // Route::post('/', 'VocabularyController@store');

    Route::get('/', [VocabularyController::class, 'show']);
    Route::get('/random', [VocabularyController::class, 'random']);
    Route::post('/', [VocabularyController::class, 'store']);
});


// Route::group(['prefix' => 'vocabulary'], function () {
//     Route::get('/', 'VocabularyController@show');
//     // Route::get('/', function () {
//     //     return 'Vocab';
//     // });
// });
