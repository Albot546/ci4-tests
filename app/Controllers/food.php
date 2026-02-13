<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Food extends BaseController
{
    public function index()
    {
        $data = [
        'title' => 'Daftar food',
        'items' => ['Laptop', 'Mouse', 'Keyboard']
        ];

        //  $data = [
        // ['nama' => 'shushi', 'type' => 'solids' ]

        // ];
        return view('food_view', $data);
    }


    public function inputData()
    {
        $data = [
            'name' => $this->request->getPost('name'),
            'rating' => $this->request->getPost('rating')
        ];

        // Pass the retrieved data to the new view
        return view('data', $data);
    }

    
}
