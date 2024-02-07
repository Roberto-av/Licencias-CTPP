<?php

use App\Http\Controllers;
use Illuminate\Support\Facades\Route; 


Route::view('/principal', 'principal')->name('principal');
Route::view('/licencias', 'licencias')->name('licencias');
Route::view('/documentos', 'documentos')->name('documentos');
Route::view('/ayuda', 'ayuda')->name('ayuda');
Route::view('/status', 'status')->name('status');

Route::view('/emitir-licencia-en-vivo', 'licencias.emitir-licencia-en-vivo')->name('emitir-licencia-en-vivo');
Route::view('/emitir-licencia-en-muerto', 'licencias.emitir-licencia-en-muerto')->name('emitir-licencia-en-muerto');
Route::view('/emitir-licencia-especial', 'licencias.emitir-licencia-especial')->name('emitir-licencia-especial');

Route::view('/ambiental', 'departamentos.ambiental')->name('ambiental');
Route::view('/civil', 'departamentos.civil')->name('civil');
Route::view('/electrico', 'departamentos.electrico')->name('electrico');
Route::view('/instrum y control', 'departamentos.instrum y control')->name('instrum y control');
Route::view('/mecanico', 'departamentos.mecanico')->name('mecanico');
Route::view('/operacion', 'departamentos.operacion')->name('operacion');
Route::view('/quimico', 'departamentos.quimico')->name('quimico');
Route::view('/seguridad', 'departamentos.seguridad')->name('seguridad');

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

