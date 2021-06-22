<?php

namespace App\Controllers;

use App\Models\Modelkonten as ModelsModelkonten;

class Materi extends BaseController
{
    protected $materiModel;
    public function __construct()
    {
        $this->materiModel = new ModelsModelkonten();
    }

    public function index()
    {
        $data = [
            // 'materi' => $this->materiModel->findAll()
            'materi' => $this->materiModel->paginate(3, 'materi'),
            'pager' => $this->materiModel->pager

        ];
        return view('dashboard/materi_speaking', $data);
    }
}
