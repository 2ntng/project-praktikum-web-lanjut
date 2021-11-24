<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'username' => 'iamSuperAdmin',
            'password' => password_hash('butAUserToo', PASSWORD_DEFAULT),
            'fullname' => 'Super Admin',
            'email' => 'seppokshop@gmail.com',
            'role' => '0'
        ];

        // Insert Super Admin Data
        $this->db->table('user')->insert($data);
    }
}
