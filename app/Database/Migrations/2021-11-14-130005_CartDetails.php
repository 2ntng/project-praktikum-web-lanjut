<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CartDetails extends Migration
{
    public function up()
    {
      $this->forge->addField([
        'cart_id'				=> [
          'type'				=> 'INT',
          'constraint'		=> 10,
          'unsigned'			=> true,
          'auto_increment'	=> true
        ],
        'user_id'			=> [
          'type'				=> 'INT',
          'constraint'		=> 10,
          'unsigned'			=> true,
        ],
      ]);
      $this->forge->addKey('cart_id', true);
      $this->forge->createTable('cart_details');
    }

    public function down()
    {
		  $this->forge->dropTable('cart_details');
    }
}
