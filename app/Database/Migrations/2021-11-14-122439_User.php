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
		]);
		$this->forge->addKey('user_id', true);
		$this->forge->createTable('user');
    }

    public function down()
    {
		$this->forge->dropTable('user');
    }
}
