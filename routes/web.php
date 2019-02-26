<?php

use Illuminate\Http\Request;

Route::get('/', function () {
  return view('index');
});

Route::get('/exercises', function () {
  return view('exercises');
});

Route::post('/query', function (Request $request) {
  $results = DB::select($request->input('sql'));
  return response()->json($results);
});
