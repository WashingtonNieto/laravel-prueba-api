<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EstudianteController;


Route::get('/estudiantes', [EstudianteController::class, 'index']);
Route::post('/estudiantes', [EstudianteController::class, 'guardar']);
Route::get('/estudiantes/{id}', [EstudianteController::class, 'show']);
Route::put('/estudiantes/{id}', [EstudianteController::class, 'actualizar']);
Route::patch('/estudiantes/{id}', [EstudianteController::class, 'actualizarParcial']);
Route::delete('/estudiantes/{id}', [EstudianteController::class, 'eliminar']);

