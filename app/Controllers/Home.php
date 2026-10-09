<?php
namespace App\Controllers;

use App\Models\TaskModel;

class Home extends BaseController
{
    public function index()
    {
        $model = new TaskModel();

        return view('welcome', [
            'title' => 'Welcome - Tasks for Today',
            'today' => date('F j, Y'),
            'tasks' => $model->getTodayTasks(),
        ]);
    }
}