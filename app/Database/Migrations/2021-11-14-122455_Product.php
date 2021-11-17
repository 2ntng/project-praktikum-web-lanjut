<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Product extends Migration
{
    public function up()
    {
        $this->forge->addField([
			'product_id'				=> [
				'type'				=> 'INT',
				'constraint'		=> 10,
				'unsigned'			=> true,
				'auto_increment'	=> true
			],
			'name'			=> [
				'type'				=> 'VARCHAR',
				'constraint'		=> 100
			],
			'description'			=> [
				'type'				=> 'VARCHAR',
				'constraint'		=> 100
			],
            'price'			=> [
				'type'				=> 'VARCHAR',
				'constraint'		=> 100
			],
			'supply'			=> [
				'type'				=> 'VARCHAR',
				'constraint'		=> 100
			],
		]);
		$this->forge->addKey('product_id', true);
		$this->forge->createTable('product');
    }

    public function down()
    {
		$this->forge->dropTable('product');
    }
}
