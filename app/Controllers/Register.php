<?php

namespace App\Controllers;

use DateTime;

class Register extends BaseController
{
    public function index()
    {
        return view('register');
    }

    public function store()
    {
        $now = new DateTime();
        $data = $this->request->getPost();

        if ($this->validation->run($data, 'register') == FALSE) {
            return redirect()->back()->with('error', $this->validation->getErrors());
        }

        $data = [
            'name' => $this->request->getVar('name'),
            'email' => $this->request->getVar('email'),
            'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
            'role' => $this->request->getVar('role') ?? 'siswa',
            'created_at' => $now->format('Y-m-d H:i:s'),
        ];

        $this->db->table('users')->insert($data);

        if ($this->db->affectedRows() > 0) {
            return redirect()->back()->with('success', 'Akun kamu berhasil didaftarkan');
        }
    }
}
