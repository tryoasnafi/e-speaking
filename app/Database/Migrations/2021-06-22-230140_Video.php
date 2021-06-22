<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Video extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id'          => [
				'type'           => 'INT',
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'user_id' => [
				'type'       => 'INT',
			],
			'mentor_id' => [
				'type'       => 'INT',
				'null'		 => true,
			],
			'title' => [
				'type' => 'VARCHAR',
				'constraint' => 255,
			],
			'link' => [
				'type' => 'VARCHAR',
				'constraint' => 255,
			],
			'star_score' => [
				'type' => 'INT',
				'constraint' => 2,
				'null' => true,
			],
			'review' => [
				'type' => 'TEXT',
				'null' => true,
			],
			'created_at DATETIME DEFAULT CURRENT_TIMESTAMP',
			'updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP',
		]);

		$this->forge->addKey('id', true);
		$this->forge->createTable('videos');
	}

	public function down()
	{
		$this->forge->dropTable('videos');
	}
}
