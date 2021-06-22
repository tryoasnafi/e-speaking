<?php

namespace App\Controllers;

use DateTime;

class Auth extends BaseController
{
    public function index()
    {
        return view('login');
    }

    public function login()
    {
        $session = session();
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        $data = $this->db->table('users')->getWhere(['email' => $email])->getResult();
        if ($data) {
            $verify_pass = password_verify($password, $data[0]->password);
            if ($verify_pass) {
                $ses_data = [
                    'user_id'       => $data[0]->id,
                    'user_name'     => $data[0]->name,
                    'user_email'    => $data[0]->email,
                    'user_role'     => $data[0]->role,
                    'logged_in'     => TRUE
                ];
                $session->set($ses_data);
                return redirect()->to('/dashboard');
            } else {
                $session->setFlashdata('msg', 'Wrong Password');
                return redirect()->to('/login');
            }
        } else {
            $session->setFlashdata('msg', 'Email not Found');
            return redirect()->to('/login');
        }
    }

    public function logout()
    {
        session()->stop();
        session()->destroy();
        return redirect()->to('/login');
    }
}
