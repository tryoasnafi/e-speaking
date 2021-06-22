<?php

namespace App\Controllers;

class Video extends BaseController
{
    public function index()
    {
        return view('dashboard/video');
    }

    public function store()
    {
        $data = [
            'user_id' => $this->request->getVar('user_id'),
            'title' => $this->request->getVar('title'),
            'link' => $this->request->getVar('link'),
        ];

        $this->db->table('videos')->insert($data);

        if ($this->db->affectedRows() > 0) {
            return redirect()->back()->with('success', "Yee video kamu berhasil diupload! Tunggu Reviewnya yaa!");
        }
    }
}
