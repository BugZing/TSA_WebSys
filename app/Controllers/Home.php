<?php

namespace App\Controllers;

use App\Models\TaskModel;

class Home extends BaseController
{
    public function index()
    {
        $taskModel = new TaskModel();
        
        $data['tasks'] = $taskModel->getTodaysTasks();
        $data['title'] = "Welcome - Today's Tasks";

        return view('welcome_page', $data);
    }
}