<?php

use App\Http\Livewire\Empleados\CreateEmpleados;
use App\Http\Livewire\Empleados\EditarEmpleados;
use App\Http\Livewire\Empleados\EliminarEmpleados;
use App\Http\Livewire\Empleados\IndexEmpleados;
use App\Http\Livewire\Empleados\MostarEmpleados;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/empleados',IndexEmpleados::class)->name('empleados.index');
Route::get('/empleados/crear',CreateEmpleados::class)->name('empleados.create');
Route::get('/empleados/{empleado}/editar',EditarEmpleados::class)->name('empleados.editar');
Route::get('/empleados/{empleado}/eliminar',EliminarEmpleados::class)->name('empleados.eliminar');
Route::get('/empleados/{empleado}/mostrar',MostarEmpleados::class)->name('empleados.mostrar');
