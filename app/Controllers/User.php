<?php

namespace App\Controllers;

class User extends BaseController
{
    public function dashboard(): string
    {
        return view('user');
    }
}