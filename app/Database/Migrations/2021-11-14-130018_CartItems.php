<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CartItems extends Migration
{
    public function up()
    {
      $this->forge->addField([
        'cart_item_id'				=> [
          'type'				=> 'INT',
          'constraint'		=> 10,
          'unsigned'			=> true,
          'auto_increment'	=> true
        ],
        'cart_id'				=> [
          'type'				=> 'INT',
          'constraint'		=> 10,
          'unsigned'			=> true,
        ],
        'product_id'			=> [
          'type'				=> 'INT',
          'constraint'		=> 10,
          'unsigned'			=> true,
        ],
        'quantity'			=> [
          'type'				=> 'INT',
          'constraint'		=> 5,
          'unsigned'			=> true,
        ],
      ]);
      $this->forge->addKey('cart_item_id', true);
      $this->forge->createTable('cart_items');
    }

    public function down()
    {
		  $this->forge->dropTable('cart_items');
    }
}
