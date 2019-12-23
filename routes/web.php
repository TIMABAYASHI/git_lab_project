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


// 3.会員登録に飛ぶページ
Route::get('/plan_edit', function () {
    return view('plan_edit');
});


// 4.プラン閲覧 
Route::get('/plan_post', function () {
    return view('plan_post');
});

// 5.プランみるとこ
Route::get('/plan_see', function () {
    return view('plan_see');
});

// 6.編集完了『確定』後画面。SNS送信するか確認するページ
Route::get('/board', function () {
    return view('board');
});

// 7.心情テストQ1〜5のページ
Route::get('/resist2', function () {
    return view('resist2');
});

// ログイン周り+メインページのルート
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

// データベースにPOSTする
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



use App\Type;
use Illuminate\Http\Request;
/**
* 新「情報」を追加 
*/

Route::post('/types', function (Request $request) {
// Eloquent モデル
$types = new Type;
$types->q6 = $request->q6;
$types->q7 = $request->q7;
$types->q8 = $request->q8;
$types->q9 = $request->q9;
$types->q10 = $request->q10;

$types->save(); 

});
