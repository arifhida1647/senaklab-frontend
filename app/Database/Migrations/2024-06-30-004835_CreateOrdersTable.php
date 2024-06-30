<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateOrdersTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'order_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true
            ],
            'user_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'null' => true
            ],
            'item_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'null' => true
            ],
            'order_date' => [
                'type' => 'TIMESTAMP',
                'default' => 'current_timestamp()',
            ],
            'status' => [
                'type' => 'ENUM',
                'constraint' => ['Pending', 'In Progress', 'Completed', 'Cancelled'],
                'default' => 'Pending',
            ],
            'total_amount' => [
                'type' => 'DECIMAL',
                'constraint' => '10,2',
                'null' => true
            ],
            'payment_proof_path' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true
            ],
        ]);
        $this->forge->addKey('order_id', true);
        $this->forge->addKey('user_id');
        $this->forge->addKey('item_id');
        $this->forge->createTable('orders');
    }

    public function down()
    {
        $this->forge->dropTable('orders');
    }
}
