<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Antrian extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 20,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'antrian_id' => [
                'type'           => 'VARCHAR',
                'constraint'     => '225',
            ],
            'no_rm' => [
                'type'           => 'VARCHAR',
				'constraint'     => '225',
            ],
            'poli' => [
                'type'           => 'VARCHAR',
				'constraint'     => '225',
            ],
            'dokter' => [
                'type'           => 'VARCHAR',
				'constraint'     => '225',
            ],
            'nomor_urut' => [
                'type'           => 'INT',
                'constraint'     => 20,
                'unsigned'       => true,
            ],
            'tgl_boking'       => [
                'type'           => 'DATE',
                'null'           => TRUE,
            ],
            'cekin'              => [
                'type'           => 'DATETIME',
                'null'           => TRUE,
            ],
            'selesai'            => [
                'type'           => 'DATETIME',
                'null'           => TRUE,
            ],
            'batal'              => [
                'type'           => 'DATETIME',
                'null'           => TRUE,
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
        $this->forge->addKey('id', true);
        $this->forge->createTable('antrians');
    }

    public function down()
    {
        $this->forge->dropTable('antrians');
    }
}
