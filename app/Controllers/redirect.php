<?php

namespace App\Controllers;

class redirect extends BaseController
{
    public function index(): string
    {
        return view('home');
    }

    public function welcome(): string
    {
        return view('welcome_message');
    }
    
    public function detail(): string
    {
        return view('details');
    }
    
    public function create(): string
    {
        return view('create');
    }
    public function data(): string
    {
        return view('data');
    }
        public function food()
    {
        $data = [
        'title' => 'Daftar food',
        'items' => ['Laptop', 'Mouse', 'Keyboard']
        ];
        return view('food_view', $data);
    }
    public function test(): string
    {
        return view('layout\template');
    }
}