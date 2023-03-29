<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class User extends Migration
{
    public function up()
    {
        $this->forge->addField([
			'id'          => [
				'type'           => 'INT',
				'constraint'     => 20,
				'unsigned'       => TRUE,
				'auto_increment' => TRUE
			],
			'id_rm'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '225',
			],
            'id_nik'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '225',
			],
			'nomor_wa'       => [
				'type'           => 'int',
				'constraint'     => '20',
			],
			'created_at'       => [
				'type'           => 'DATETIME',
				'null'           => TRUE,
			],
			'updated_at'       => [
				'type'           => 'DATETIME',
				'null'           => TRUE,
			],

		]);
		$this->forge->addKey('id', TRUE);
		$this->forge->createTable('users');
    }

    public function down()
    {
        $this->forge->dropTable('users');
    }
}
