<?php

namespace App\Models;

use CodeIgniter\Model;

class BagianModel extends Model
{
    protected $DBGroup = 'default';
    protected $table = 'tb_section';
    protected $primaryKey = 'id_section';
    protected $useAutoIncrement = true;
    protected $returnType = 'array';
    protected $useSoftDeletes = false;
    protected $protectFields = true;
    protected $allowedFields = [];

    // Dates
    // protected $useTimestamps = true;
    // protected $dateFormat = 'datetime';
    // protected $createdField = 'created_at';
    // protected $updatedField = 'updated_at';
    // protected $deletedField  = 'deleted_at';

    public function getData()
    {
        return $this->where('status_section', 1)->orderBy('bidang', 'asc')->findAll();
    }
}
