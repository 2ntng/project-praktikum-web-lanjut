<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

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
				'type'				=> 'TEXT',
				'constraint'		=> 100
			],
		]);
		$this->forge->addKey('category_id', true);
		$this->forge->createTable('product_category');
    }

    public function down()
    {
		$this->forge->dropTable('product_category');
    }
}
