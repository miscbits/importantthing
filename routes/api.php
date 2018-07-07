<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::group(["middleware" => ['auth:api', 'can:administrate'], "namespace" => "Admin"],function() {
	Route::apiResource('roles', 'RolesController');
	Route::apiResource('permissions', 'PermissionsController');
	Route::apiResource('roles/{role}/permissions' ,'RolePermissionsController');
	Route::apiResource('users/{user}/roles' ,'UserRolesController');
});