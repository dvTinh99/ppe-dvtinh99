<?php
//
//Route::get("/ppe",function (){
//    return \App\Models\User::all();;
//});
//Route::post("/register", [\ppe\dvtinh\Http\Controllers\AuthController::class, 'register']);

Route::group(['prefix' => 'ppe-core'], function() {


});
Route::get('test-jenkin', function(){
	dd("ok nhes");
});

Route::get('test-jenkin2', function(){
	dd("ok nhe");
});
Route::post("/register", [\ppe\dvtinh\Http\Controllers\AuthController::class, 'register']);
