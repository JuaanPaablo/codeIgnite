<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }

    public function saludo(){
        return view('layouts/header').view('saludo').view('layouts/footer');
    }
}
