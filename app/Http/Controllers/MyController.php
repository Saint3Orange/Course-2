<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function get()
    {
        echo 'test controller';
    }
    public function index($name)
    {
        echo $name;
    }
}
