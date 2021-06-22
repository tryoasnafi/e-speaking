<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Materi extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id'          => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'materi'	 => [
				'type'       => 'TEXT',
			],
			'img' => [
				'type'       => 'VARCHAR',
				'constraint' => 255,
				'null'		 => true,
			],
			'created_at DATETIME DEFAULT CURRENT_TIMESTAMP',
			'updated_at' => [
				'type' => 'DATETIME',
				'null' => true,
			],
		]);

		$this->forge->addKey('id', true);
		$this->forge->createTable('materi');
	}

	public function down()
	{
		$this->forge->dropTable('materi');
	}
}
