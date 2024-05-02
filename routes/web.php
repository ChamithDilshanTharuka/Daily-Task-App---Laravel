<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tasks',function(){
$data=App\Models\Task::all();

    return view('tasks')->with('tasks',$data);
});

Route::post('/saveTask','App\Http\Controllers\TaskController@store');

Route::get('/markascompleted/{id}','App\Http\Controllers\TaskController@UpdateTaskAsCompleted');

Route::get('/markasnotcompleted/{id}','App\Http\Controllers\TaskController@UpdateTaskAsNotCompleted');

Route::get('/deletetask/{id}','App\Http\Controllers\TaskController@DeleteTask');

Route::get('/updatetask/{id}','App\Http\Controllers\TaskController@UpdateTaskView');

Route::post('/updatethis','App\Http\Controllers\TaskController@updatetaskthis');