<?php

use Illuminate\Http\Request;
use App\Empleado;


Route::get('empleados', function () {
  $empleados = Empleado::get();
  return $empleados;
});

Route::post('empleados', function (Request $request) {
  return $request->all();
});
