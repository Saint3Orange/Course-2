<?php

/*namespace App\Http\Controllers;

class WelcomeController extends Controller
{
    public function show()
    {
        return view('welcome');
    }
}*/

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class WelcomeController extends Controller
{
    public function get()
    {
        echo 'test controller';
    }
    public function index($name) {
        echo $name;
    }
}



