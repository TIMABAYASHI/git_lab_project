<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SelectController extends Controller
{
    public function index()
    {
        // select1~5で全部作るか、1つのセレクトにJSで表示非表示で作るか
      return view('select');
    }

    // データ登録内容
    public function receiveData(Request $request)
    {
      $request->validate([
        'q1' => 'required',  // 必須・
        'q2' => 'required',  // 必須
        'q3' => 'required',  // 必須
        'q4' => 'required',  // 必須
        'q5' => 'required',  // 必須
      ]);

      return view('selects', ['status' => true]);
    }
}