<?php

namespace App\Controllers;

class MM extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }
}
