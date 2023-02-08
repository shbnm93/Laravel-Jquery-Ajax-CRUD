<?php
use Illuminate\Support\Facades\Route;
 
Route::get('/', [\App\Http\Controllers\MemberController::class, 'index']);
 
Route::get('/show', [\App\Http\Controllers\MemberController::class, 'getMembers']);
 
Route::post('/save', [\App\Http\Controllers\MemberController::class, 'save']);
 
Route::post('/delete', [\App\Http\Controllers\MemberController::class, 'delete']);
 
Route::post('/update', [\App\Http\Controllers\MemberController::class, 'update']);
