<?php
namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class TaskSeeder extends Seeder
{
    public function run()
    {
        $today     = date('Y-m-d');
        $yesterday = date('Y-m-d', strtotime('-1 day'));
        $tomorrow  = date('Y-m-d', strtotime('+1 day'));
        $now       = date('Y-m-d H:i:s');

        $data = [
            ['title' => 'Prepare daily stand-up notes',  'status' => 'pending',     'task_date' => $today,     'created_at' => $now],
            ['title' => 'Review pull requests',          'status' => 'in-progress', 'task_date' => $today,     'created_at' => $now],
            ['title' => 'Update project documentation',  'status' => 'pending',     'task_date' => $today,     'created_at' => $now],
            ['title' => 'Fix login page bug',            'status' => 'done',        'task_date' => $yesterday, 'created_at' => $now],
            ['title' => 'Back up the database',          'status' => 'done',        'task_date' => $yesterday, 'created_at' => $now],
            ['title' => 'Send weekly progress report',   'status' => 'pending',     'task_date' => $tomorrow,  'created_at' => $now],
            ['title' => 'Client meeting at 2 PM',        'status' => 'pending',     'task_date' => $tomorrow,  'created_at' => $now],
            ['title' => 'Design new dashboard mockup',   'status' => 'pending',     'task_date' => $tomorrow,  'created_at' => $now],
        ];

        $this->db->table('tasks')->insertBatch($data);
    }
}