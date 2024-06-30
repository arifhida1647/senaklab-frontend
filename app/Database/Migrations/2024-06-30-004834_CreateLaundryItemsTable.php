<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateLaundryItemsTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'item_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true
            ],
            'item_name' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'waktu' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'category' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'description' => [
                'type' => 'TEXT',
                'null' => true
            ],
            'price' => [
                'type' => 'DECIMAL',
                'constraint' => '10,2',
            ],
            'timeCreated' => [
                'type' => 'DATETIME',
                'default' => 'current_timestamp()',
            ],
        ]);
        $this->forge->addKey('item_id', true);
        $this->forge->createTable('laundry_items');
    }

    public function down()
    {
        $this->forge->dropTable('laundry_items');
    }
}
