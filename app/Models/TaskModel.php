<?php

namespace App\Models;

use CodeIgniter\Model;

class TaskModel extends Model
{
    protected $table            = 'tasks';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $allowedFields    = ['title', 'status', 'task_date', 'created_at'];

    // Fetch tasks matching today's date
    public function getTodaysTasks()
    {
        return $this->where('task_date', date('Y-m-d'))->findAll();
    }
}