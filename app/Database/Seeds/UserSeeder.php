<?php
namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $this->db->table('users')->insert([
            'username'   => 'Jagonzales',
            'full_name'  => 'Jian Robert Gonzales',
            'email'      => 'jian@example.com',
            'created_at' => date('2005-07-21 H:i:s'),
        ]);
    }
}