<?php

namespace App;

use Illuminate\Support\Facades\Route;

class Crud
{

    public static function name(){

    $route_name = Route::getCurrentRoute()->getName();
    $crud_name = ucfirst(implode(" ", array_reverse(explode(".", $route_name))));

    return $crud_name;
    }

}
