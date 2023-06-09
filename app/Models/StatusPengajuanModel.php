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
    public function GetDataAtasan()
    {
        return $this->db->table('tb_status_pengajuan')
            ->select('tb_pengajuan.id_pengajuan, tb_status_pengajuan.status as status_pengajuan, tb_data_section.no_urut, tb_atasan.nama_atasan')
            ->join('tb_data_section', 'tb_data_section.id_data_section = tb_status_pengajuan.id_data_section', 'right')
            ->join('tb_atasan', 'tb_atasan.id_atasan = tb_data_section.id_atasan', 'left')
            ->join('tb_pengajuan', 'tb_pengajuan.id_pengajuan = tb_status_pengajuan.id_pengajuan')
            ->orderBy('tb_data_section.no_urut', 'asc')
            ->get()
            ->getResultArray();
    }
}
