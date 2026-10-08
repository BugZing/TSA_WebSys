<?php

namespace App\Controllers;

use App\Models\UserModel;

class Profile extends BaseController
{
    public function index()
    {
        $userModel = new UserModel();

        // Fetch the single demo user record
        $data['user']  = $userModel->getDemoUser();
        $data['title'] = 'User Profile';

        return view('profile_page', $data);
    }
}