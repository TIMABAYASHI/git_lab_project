<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SelectController extends Controller
{
    public function postSelect(Request $request){
        if (Input::get('foo')){
            $this->foo();
        }elseif (Input::get('bar')){
            $this->bar();
        }
         $user = new User;
         $user->username = $request->name;
         $user->mail = $request->email;
         $user->age = $request->age;
         $user->save();
    }
}
