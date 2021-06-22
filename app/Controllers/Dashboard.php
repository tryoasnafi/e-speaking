<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index()
    {
        if (session('user_role') == 'admin') {
            return view('dashboard/admin');
        } else if (session('user_role') == 'mentor') {
            return view('dashboard/mentor');
        }

        return view('dashboard/siswa');
    }
}
