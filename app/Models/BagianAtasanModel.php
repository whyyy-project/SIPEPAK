<?php

namespace App\Models;

use CodeIgniter\Model;

class BagianAtasanModel extends Model
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
    // protected $useTimestamps = false;
    // protected $dateFormat = 'datetime';
    // protected $createdField = 'created_at';
    // protected $updatedField = 'updated_at';
    // protected $deletedField = 'deleted_at';

}