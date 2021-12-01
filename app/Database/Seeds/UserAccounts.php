<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class UserAccounts extends Seeder
{
    public function run()
    {
        for ($i = 0; $i < 10; $i++) {
            $data = [
                'username' => static::faker()->userName(),
                'password' => password_hash(static::faker()->password(), PASSWORD_DEFAULT),
                'fullname' => static::faker()->name(),
                'email' => static::faker()->email(),
                'role' => '1',
                'created_at' => new Time('now'),
                'updated_at' => new Time('now')
            ];
            $this->db->table('user')->insert($data);
        }
    }
}
