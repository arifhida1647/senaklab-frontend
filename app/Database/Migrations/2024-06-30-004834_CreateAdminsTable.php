<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateInboxTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'inbox_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true
            ],
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => '30',
            ],
            'name' => [
                'type' => 'VARCHAR',
                'constraint' => '30',
            ],
            'pesan' => [
                'type' => 'TEXT',
            ],
            'subject' => [
                'type' => 'TEXT',
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'default' => 'current_timestamp()',
            ],
        ]);
        $this->forge->addKey('inbox_id', true);
        $this->forge->createTable('inbox');
    }

    public function down()
    {
        $this->forge->dropTable('inbox');
    }
}
