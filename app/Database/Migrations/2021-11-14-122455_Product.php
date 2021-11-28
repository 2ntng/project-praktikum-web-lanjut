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
			'user_id'				=> [
				'type'				=> 'INT',
				'constraint'		=> 10,
				'unsigned'			=> true,
			],
			'category_id'				=> [
				'type'				=> 'INT',
				'constraint'		=> 10,
				'unsigned'			=> true
			],
			'name'			=> [
				'type'				=> 'VARCHAR',
				'constraint'		=> 100
			],
			'description'			=> [
				'type'				=> 'VARCHAR',
				'constraint'		=> 256
			],
            'price'			=> [
				'type'				=> 'INT',
				'constraint'		=> 64,
				'unsigned'			=> true
			],
			'stock'			=> [
				'type'				=> 'INT',
				'constraint'		=> 64,
				'unsigned'			=> true
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
		$this->forge->addKey('product_id', true);
		$this->forge->createTable('product');
    }

    public function down()
    {
		$this->forge->dropTable('product');
    }
}
