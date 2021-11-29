<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class OrderItems extends Migration
{
  public function up()
  {
    $this->forge->addField([
      'order_item_id'		=> [
        'type'				=> 'INT',
        'constraint'		=> 10,
        'unsigned'			=> true,
        'auto_increment'	=> true
      ],
      'order_id'				=> [
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
      'price'			=> [
        'type'				=> 'INT',
        'constraint'		=> 64,
        'unsigned'			=> true,
      ],
    ]);
    $this->forge->addKey('order_item_id', true);
    $this->forge->createTable('order_items');
  }

  public function down()
  {
    $this->forge->dropTable('order_items');
  }
}
