<?php

namespace App\Controllers;

use DateTime;

class Register extends BaseController
{
    public function index()
    {
        if (current_url(true)->getSegment(2) == 'mentor') {
            return view('register_mentor');
        }

        return view('register');
    }

    public function store()
    {
        $uri = current_url(true);
        $now = new DateTime();
        $data = $this->request->getPost();

        if ($this->validation->run($data, 'register') == FALSE) {
            return redirect()->back()->with('error', $this->validation->getErrors());
        }

        $data = [
            'name' => $this->request->getVar('name'),
            'email' => strtolower($this->request->getVar('email')),
            'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
            'role' => $uri->getSegment(2) == 'mentor' ? 'mentor' : 'siswa',
            'created_at' => $now->format('Y-m-d H:i:s'),
        ];

        $this->db->table('users')->insert($data);

        if ($this->db->affectedRows() > 0) {
            return redirect()->back()->with('success', "Akun kamu berhasil didaftarkan");
        }
    }
}
