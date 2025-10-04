<?php

namespace App\Controllers;

class User extends BaseController
{
    public function dashboard(): string
    {
        $data = [
            'title' => 'Dashboard User',
            'content' => 'Testing'
        ];
        return view('user', $data);
    }
}