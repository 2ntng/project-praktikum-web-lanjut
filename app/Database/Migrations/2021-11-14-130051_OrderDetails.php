<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class OrderDetails extends Migration
{
    public function up()
    {
      $this->forge->addField([
        'order_id'				=> [
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
        'payment_id'			=> [
          'type'				=> 'INT',
          'constraint'		=> 10,
          'unsigned'			=> true,
        ],
        'total'			=> [
          'type'				=> 'INT',
          'constraint'		=> 16,
          'unsigned'			=> true,
        ],
        'created_at'			=> [
          'type'				=> 'TIMESTAMP',
          'null'				=> true
        ],
      ]);
      $this->forge->addKey('order_id', true);
      $this->forge->createTable('order_details');
    }

    public function down()
    {
		  $this->forge->dropTable('order_details');
    }
}
