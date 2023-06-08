<?php

namespace App\Models;

use CodeIgniter\Model;

class StatusPengajuanModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'tb_status_pengajuan';
    protected $primaryKey       = 'id_status';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['id_data_section', 'id_pengajuan', 'status'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    // protected $deletedField  = 'deleted_at';

    public function InsertData($data)
    {
        return $this->insert($data);
    }
}
