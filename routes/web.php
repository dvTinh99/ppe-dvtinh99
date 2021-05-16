<?php

Route::get("/ppe",function (){

    return \App\Models\User::all();;
});