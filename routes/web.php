<?php

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


// ページをどう飛ばすのか
// 1.トップページ
Route::get('/', function () {
    return view('top');
});


// 2.マイページ
Route::get('/mypage', function () {
    return view('mypage');
});


// 3.プラン編集
Route::get('/plan_edit', function () {
    return view('plan_edit');
});


// 4.プラン閲覧
Route::get('/plan_see', function () {
    return view('plan_see');
});

// 5.プラン閲覧
Route::get('/plan_see', function () {
    return view('plan_see');
});

// 6.セレクト画面
Route::get('/select', function () {
    return view('select');
});
// 7.セレクト画面2
Route::get('/select2', function () {
    return view('select2');
});
// 8.セレクト画面3
Route::get('/select3', function () {
    return view('select3');
});
// 9.セレクト画面4
Route::get('/select4', function () {
    return view('select4');
});
// 10.セレクト画面5
Route::get('/select5', function () {
    return view('select5');
});

// ログイン周り+メインページのルート
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');


// もっと検索する画面
Route::post('/q1', function (Request $request) {

});
Route::post('/q2', function (Request $request) {

});
Route::post('/q3', function (Request $request) {

});
Route::post('/q4', function (Request $request) {

});
Route::post('/q5', function (Request $request) {

});



// // ログイン後のルート

// serect.blade.phpのデータPOSTのルート
Route::post('hoge/form', 'HogeController@postHoge');