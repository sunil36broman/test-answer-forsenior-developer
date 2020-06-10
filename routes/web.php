<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/1a', function () {

    echo "=============1a=================";
    $user_infod = DB::table('buyers')
            ->select(DB::raw('SUM(diary_taken.amount)  as diary_balance, SUM(pen_taken.amount)  as pen_balance, SUM(eraser_taken.amount)  as eraser_balance, (SUM(diary_taken.amount) + SUM(pen_taken.amount) + SUM(eraser_taken.amount)) as total_item, buyers.id as buyer_id'))
            ->join('diary_taken', 'buyers.id', '=', 'diary_taken.buyer_id')
            ->join('pen_taken', 'buyers.id', '=', 'pen_taken.buyer_id')
            ->join('eraser_taken', 'buyers.id', '=', 'eraser_taken.buyer_id')
            ->groupBy('buyers.id')
            ->orderBy('total_item', 'desc')
            ->skip(1)->first();
            dd($user_infod);

});

Route::get('/1b', function () {

    echo "=============1b=================";
    $user_infod = DB::table('buyers')
        ->select(DB::raw('SUM(diary_taken.amount)  as diary_balance, SUM(pen_taken.amount)  as pen_balance, SUM(eraser_taken.amount)  as eraser_balance, (SUM(diary_taken.amount) + SUM(pen_taken.amount)+ SUM(eraser_taken.amount)) as total_item, buyers.id as buyer_id'))
        ->join('diary_taken', 'buyers.id', '=', 'diary_taken.buyer_id')
        ->join('pen_taken', 'buyers.id', '=', 'pen_taken.buyer_id')
        ->join('eraser_taken', 'buyers.id', '=', 'eraser_taken.buyer_id')
        ->groupBy('buyers.id')
        ->orderBy('total_item', 'asc')
        ->get();
        dd($user_infod);

});


Route::get('/2', function () {
    echo "=============2=================";
    $path = storage_path() . "/app/public/records.json";
    $json = json_decode(file_get_contents($path), true);
    foreach (array_chunk($json['RECORDS'],1000) as $t) {
          DB::table('records')->insert($t);
    }
});

Route::get('/3', function () {
     return view('three');
});


Route::get('/4', function () {
    return view('four');
});

Route::get('/5', function () {
    return view('five');
});

Route::get('/6', function () {
    return view('six');
});