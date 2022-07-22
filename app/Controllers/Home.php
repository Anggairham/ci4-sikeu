<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        // print_r($this->router->routes);
        return view('welcome_message');
    }
    public function test()
    {
        echo "string";
    }
}
