<?php

namespace App\Controllers;

use App\Models\TaskModel;

class Tasks extends BaseController
{
    public function index()
    {
        $taskModel = new TaskModel();
        $data['tasks'] = $taskModel->orderBy('task_date', 'ASC')->findAll();
        $data['title'] = 'All Tasks';

        return view('tasks_page', $data);
    }

    // Save New Task
    public function store()
    {
        $taskModel = new TaskModel();
        $taskModel->save([
            'title'      => $this->request->getPost('title'),
            'status'     => $this->request->getPost('status'),
            'task_date'  => $this->request->getPost('task_date'),
            'created_at' => date('Y-m-d H:i:s'),
        ]);

        return redirect()->to('/tasks');
    }

    // Update Existing Task
    public function update($id)
    {
        $taskModel = new TaskModel();
        $taskModel->update($id, [
            'title'     => $this->request->getPost('title'),
            'status'    => $this->request->getPost('status'),
            'task_date' => $this->request->getPost('task_date'),
        ]);

        return redirect()->to('/tasks');
    }

    // Delete Task
    public function delete($id)
    {
        $taskModel = new TaskModel();
        $taskModel->delete($id);

        return redirect()->to('/tasks');
    }
}