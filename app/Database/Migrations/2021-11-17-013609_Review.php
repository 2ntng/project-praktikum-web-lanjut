<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Review extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'review_id'		=> [
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
            'product_id'			=> [
                'type'				=> 'INT',
                'constraint'		=> 10,
                'unsigned'			=> true,
            ],
            'rate'			=> [
                'type'				=> 'INT',
                'constraint'		=> 1,
                'unsigned'			=> true,
            ],
            'review_detail'			=> [
                'type'				=> 'VARCHAR',
                'constraint'		=> 256
            ],
        ]);
        $this->forge->addKey('review_id', true);
        $this->forge->createTable('review');
    }

    public function down()
    {
        $this->forge->dropTable('review');
    }
}
