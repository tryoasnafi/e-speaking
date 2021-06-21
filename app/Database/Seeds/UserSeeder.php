<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use DateTime;

class UserSeeder extends Seeder
{
	public function run()
	{
		$now = new DateTime();

		$data = [
			[
				'name' => 'Tina Ramadhani',
				'email' => 'tina@gmail.com',
				'password' => password_hash('passwordtina', PASSWORD_DEFAULT),
				'role' => 'siswa',
				'created_at' => $now->format('Y-m-d H:i:s'),
			],
			[
				'name' => 'Sodikin Maulana',
				'email' => 'sodik@gmail.com',
				'password' => password_hash('passwordsodik', PASSWORD_DEFAULT),
				'role' => 'mentor',
				'created_at' => $now->format('Y-m-d H:i:s'),
			],
			[
				'name' => 'Admin',
				'email' => 'admin@gmail.com',
				'password' => password_hash('passwordadmin', PASSWORD_DEFAULT),
				'role' => 'admin',
				'created_at' => $now->format('Y-m-d H:i:s'),
			]
		];

		// Using Query Builder
		$this->db->table('users')->insertBatch($data);
	}
}
