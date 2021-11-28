<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class User extends Migration
{
    public function up()
    {
        $this->forge->addField([
			'user_id'				=> [
				'type'				=> 'INT',
				'constraint'		=> 10,
				'unsigned'			=> true,
				'auto_increment'	=> true
			],
			'username'			=> [
				'type'				=> 'VARCHAR',
				'constraint'		=> 100
			],
			'password'			=> [
				'type'				=> 'VARCHAR',
				'constraint'		=> 100
			],
            'fullname'			=> [
				'type'				=> 'VARCHAR',
				'constraint'		=> 100
			],
			'email'			=> [
				'type'				=> 'VARCHAR',
				'constraint'		=> 100
			],
			'role'			=> [
				'type'				=> 'INT',
				'constraint'		=> 2,
			],
			'created_at'			=> [
				'type'				=> 'TIMESTAMP',
				'null'				=> true
			],
			'updated_at'			=> [
				'type'				=> 'TIMESTAMP',
				'null'				=> true
			],
			'deleted_at'			=> [
				'type'				=> 'TIMESTAMP',
				'null'				=> true
			],
		]);
		$this->forge->addKey('user_id', true);
		$this->forge->createTable('user');

        // Insert Super Admin Data
		$data = [
            'username' => 'admin',
            'password' => password_hash('admin', PASSWORD_DEFAULT),
            'fullname' => 'Super Admin',
            'email' => 'gasskeun@gmail.com',
            'role' => '0'
        ];
        $this->db->table('user')->insert($data);
    }

    public function down()
    {
		$this->forge->dropTable('user');
    }
}
