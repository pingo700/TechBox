<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('Home');
    }

    public function sobre()
    {
        return view('Sobre');
    }

    public function servico()
    {
        return view('Servico');
    }

    public function portfolio()
    {
        return view('Portfolio');
    }

    public function contato(){
        return view('Contato');
    }
}
