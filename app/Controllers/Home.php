<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('principal');
    }
    
    public function calendario(){
        return view('calendario');
    }
}
