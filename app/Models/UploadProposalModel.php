<?php

namespace App\Models;

use CodeIgniter\Model;

class UploadProposalModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'tb_pengajuan';
    protected $primaryKey       = 'id_pengajuan';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['id', 'judul', 'mulai', 'selesai', 'keterangan', 'pdf', 'status'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    // protected $deletedField  = 'deleted_at';

    public function insertProposal($data)
    {
        return $this->insert($data);
    }
}
