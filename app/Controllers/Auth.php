<?php

namespace App\Controllers;

use App\Models\UserModel;

class Auth extends BaseController
{
    public function login()
    {
        // If already logged in, redirect to task list
        if (session()->get('isLoggedIn')) {
            return redirect()->to('/tasks');
        }

        $data['title'] = 'Login'; // <-- Add this line

        return view('auth/login', $data); // <-- Pass $data to view
    }

    public function processLogin()
    {
        $session = session();
        $userModel = new UserModel();

        $username = trim($this->request->getPost('username'));
        $password = trim($this->request->getPost('password'));

        $user = $userModel->where('username', $username)->first();

        if ($user && password_verify($password, $user['password'])) {
            $sessionData = [
                'id'         => $user['id'],
                'username'   => $user['username'],
                'full_name'  => $user['full_name'],
                'isLoggedIn' => true,
            ];
            $session->set($sessionData);
            return redirect()->to('/tasks');
        }

        return redirect()->back()->with('error', 'Invalid username or password.');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}