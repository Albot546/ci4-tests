<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Createfood extends Migration
{
    public function up()
    {
        $this->forge->addField([
        'id'    => ['type' => 'INT', 'constraint' => 5, 'unsigned' => true, 'auto_increment' => true],
        'nama'  => ['type' => 'VARCHAR', 'constraint' => '100'],
        'harga' => ['type' => 'DECIMAL', 'constraint' => '10,2'],
    ]);
    $this->forge->addKey('id', true);
    $this->forge->createTable('food');
    }
    public function down()
    {
       $this->forge->dropTable('food');
    }
}
