<?php

namespace App\Http\Controllers;

use App\Type;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SelectController extends Controller{
    // submitの遷移先 
    protected $redirectTo = '/plan_edit';

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Type
     */
    protected function create(array $data)
    {
        return Type::create([
            'q6' => $data['q6'],
            'q7' => $data['q7'],
            'q8' => $data['q8'],
            'q9' => $data['q9'], 
            'q10' => $data['q10'],
        ]);
    }

}
