<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class PaymentDetails extends Migration
{
  public function up()
  {
    $this->forge->addField([
      'payment_id'				=> [
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
      'amount'			=> [
        'type'				=> 'INT',
        'constraint'		=> 16,
        'unsigned'			=> true,
      ],
      'status'			=> [
				'type'				=> 'VARCHAR',
				'constraint'		=> 16
			],
      'created_at'			=> [
        'type'				=> 'TIMESTAMP',
        'null'				=> true
      ],
    ]);
    $this->forge->addKey('payment_id', true);
    $this->forge->createTable('payment_details');
  }

  public function down()
  {
    $this->forge->dropTable('payment_details');
  }
}
