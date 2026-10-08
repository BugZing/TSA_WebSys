<?php

namespace App\Controllers;

class About extends BaseController
{
    public function index()
    {
        $data['developer_name'] = 'Your Name Here';
        $data['title']          = 'About Developer';

        return view('about_page', $data);
    }
}