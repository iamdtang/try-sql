<?php

use Illuminate\Http\Request;

Route::get('/', function () {
  return view('index');
});

Route::post('/query', function (Request $request) {
  $results = DB::select($request->input('sql'));
  return response()->json($results);
});
