<?php

namespace App\Controllers;

use App\Models\TaskModel;

class Tasks extends BaseController
{
    public function index()
    {
        $taskModel = new TaskModel();

        // Fetch every task ordered chronologically by task_date
        $data['tasks'] = $taskModel->orderBy('task_date', 'ASC')->findAll();
        $data['title'] = 'All Tasks';

        return view('tasks_page', $data);
    }
}