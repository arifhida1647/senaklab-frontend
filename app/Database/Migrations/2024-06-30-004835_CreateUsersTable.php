<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateUsersTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'user_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true
            ],
            'username' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
            ],
            'password' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'full_name' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => true
            ],
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => true
            ],
            'phone_number' => [
                'type' => 'VARCHAR',
                'constraint' => '20',
                'null' => true
            ],
            'address' => [
                'type' => 'TEXT',
                'null' => true
            ],
            'street' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
                'null' => true
            ],
            'state' => [
                'type' => 'VARCHAR',
                'constraint' => '10',
                'null' => true
            ],
            'city' => [
                'type' => 'VARCHAR',
                'constraint' => '10',
                'null' => true
            ],
            'zip_code' => [
                'type' => 'INT',
                'constraint' => 11,
                'null' => true
            ],            'country' => [
                'type' => 'VARCHAR',
                'constraint' => '30',
                'null' => true
            ],
            'created_at' => [
                'type' => 'TIMESTAMP',
                'default' => 'current_timestamp()',
            ],
        ]);
        $this->forge->addKey('user_id', true);
        $this->forge->addUniqueKey('username');
        $this->forge->createTable('users');
    }

    public function down()
    {
        $this->forge->dropTable('users');
    }
}

           
