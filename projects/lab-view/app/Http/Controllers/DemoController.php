<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    // simple data passing
    public function hello()
    {
        $name = 'LaraveL Learner';
        return view('hello', ['name' => $name]);
    }
    // parameterized route
    public function greet($name)
    {
        return view('greet', ['name' => ucfirst($name)]);
    }

    //query string
    public function search(Request $request)
    {
        $keyword = $request->query('q', 'name');
        return view('search', ['keyword' => $keyword]);
    }
}
