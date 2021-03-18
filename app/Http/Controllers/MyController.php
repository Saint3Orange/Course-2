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
    public $products = [
            ['name' => 'Яблоко', 'date' => '25.03.2021'],
            ['name' => 'Молоко', 'date' => '15.03.2021'],
            ['name' => 'Хлеб', 'date' => '10.03.2021'],
            ['name' => 'Сыр', 'date' => '5.08.2021'],
        ];

    public function sendView(){
    return view('test-product',
            ['product' => $this->products]);

    }
}
