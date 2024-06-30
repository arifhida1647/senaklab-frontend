<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateAdminLogTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'log_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true
            ],
            'admin_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'null' => true
            ],
            'action' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true
            ],
            'created_at' => [
                'type' => 'TIMESTAMP',
                'default' => 'current_timestamp()',
            ],
        ]);
        $this->forge->addKey('log_id', true);
        $this->forge->addKey('admin_id');
        $this->forge->createTable('admin_log');
    }

    public function down()
    {
        $this->forge->dropTable('admin_log');
    }
}
