<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class ChatMessage extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id'          => [
				'type'           => 'INT',
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'from_user_id' => [
				'type'       => 'INT',
			],
			'message' => [
				'type' => 'TEXT',
			],
			'timestamp TIMESTAMP DEFAULT CURRENT_TIMESTAMP'
		]);

		$this->forge->addKey('id', true);
		$this->forge->createTable('chat_messages');
	}

	public function down()
	{
		$this->forge->dropTable('chat_messages');
	}
}
