<?php

namespace App\Models;

use CodeIgniter\Model;

class Modelkonten extends Model
{
    protected $table = 'materi';
    protected $useTimestamps = true;
    protected $allowedFields = ['img', 'materi'];
}
