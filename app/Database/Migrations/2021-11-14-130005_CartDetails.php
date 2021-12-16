<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CartDetails extends Migration
{
    public function up()
    {
    }

    public function down()
    {
		  $this->forge->dropTable('cart_details');
    }
}
