<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
use CodeIgniter\I18n\Time;

class ProductCategory extends Migration
{
    public function up()
    {
        $this->forge->addField([
			'category_id'				=> [
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
				'constraint'		=> 256
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
		$this->forge->addKey('category_id', true);
		$this->forge->createTable('product_category');

		// Insert Sample Category
		$data = [
            'name' => 'Fashion',
            'description' => 'Fashion',
			'created_at' => new Time('now'),
			'updated_at' => new Time('now')
        ];
        $this->db->table('product_category')->insert($data);
		$data = [
            'name' => 'Electronics',
            'description' => 'Electronics',
			'created_at' => new Time('now'),
			'updated_at' => new Time('now')
        ];
        $this->db->table('product_category')->insert($data);
    }

    public function down()
    {
		$this->forge->dropTable('product_category');
    }
}
