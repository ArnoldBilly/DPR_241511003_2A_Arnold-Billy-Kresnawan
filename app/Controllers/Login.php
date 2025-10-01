<?php

namespace App\Controllers;

use App\Models\UserModels;

class Login extends BaseController
{
    public function index() {
        return view('login');
    }

    public function auth()
    {
        $session = session();
        $model = new UserModels();

        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $user = $model->where('username', $username)->first();

        if ($user) {
            if (password_verify($password, $user['password'])) {
                $session->set([
                    'user_id'       => $user['id_pengguna'],
                    'username'      => $user['username'],
                    'role'          => $user['role'],
                    'isLoggedIn'    => true
                ]);

                if ($user['role'] === 'admin') {
                    return redirect()->to('/admin');
                } else {
                    return redirect()->to('/user');
                }
            } else {
                return redirect()->back()->with('error', 'Password salah!');
            }
        } else {
            return redirect()->back()->with('error', 'User tidak ditemukan!');
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
        exit;
    }
}