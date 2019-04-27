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

Route::get('users','UserController@index');

Route::post('operaciones', function(Request $request) {
    $op = $request->input('operacion');
    $num1 = $request->input('num1');
    $num2 = $request->input('num2');

    if($op=='suma'){
        $res = $num1+$num2;
        return response()->json($res, 200);
    }else if($op=='multiplicacion'){
        $res = $num1*$num2;
        return response()->json($res, 200);
    }else {
        return response()->json(array("error: operacion no permitida."), 400);
    }
});