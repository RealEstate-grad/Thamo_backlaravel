<?php

use App\Http\Controllers\AdmenController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
/////////////////////admen/////////////
Route::post('login', [AdmenController::class, 'login']);
Route::post('register_User', [AdmenController::class, 'register_User']);
Route::get('number_estate_user_company_agent_city', [AdmenController::class, 'number_estate_user_company_agent_city']);
Route::get('get_all_user', [AdmenController::class, 'get_all_user']);
Route::post('freez/{id}', [AdmenController::class, 'freez']);
Route::get('get_all_company', [AdmenController::class, 'get_all_company']);
Route::get('get_all_company_pending', [AdmenController::class, 'get_all_company_pending']);
Route::post('remove_freez/{id}', [AdmenController::class, 'remove_freez']);
Route::get('get_all_cities', [AdmenController::class, 'get_all_cities']);
Route::post('add_city', [AdmenController::class, 'add_city']);
Route::post('update_city/{id}', [AdmenController::class, 'update_city']);
Route::post('delete_city/{id}', [AdmenController::class, 'delete_city']);
Route::post('add_places', [AdmenController::class, 'add_places']);
Route::get('get_all_places/{id}', [AdmenController::class, 'get_all_places']);
Route::post('update_places/{id}', [AdmenController::class, 'update_places']);
Route::post('delete_places/{id}', [AdmenController::class, 'delete_places']);
Route::get('show_one_places/{id}', [AdmenController::class, 'show_one_places']);
Route::get('show_one_city/{id}', [AdmenController::class, 'show_one_city']);
Route::get('show_one_company/{id}', [AdmenController::class, 'show_one_company']);
Route::post('update_user/{id}', [AdmenController::class, 'update_user']);
Route::get('show_one_user/{id}', [AdmenController::class, 'show_one_user']);
Route::post('update_company_aaa/{id}', [AdmenController::class, 'update_company_aaa']);
