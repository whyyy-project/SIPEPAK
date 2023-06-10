<?php

namespace App\Models;

use CodeIgniter\Model;

class UploadProposalModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'tb_pengajuan';
    protected $primaryKey       = 'id_pengajuan';
    protected $useAutoIncrement = false;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['id_pengajuan', 'id', 'judul', 'mulai', 'selesai', 'keterangan', 'pdf', 'status'];

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
    public function getDataPengajuan($id_user)
    {
        return $this->db->table('tb_pengajuan')
            ->select('tb_pengajuan.id_pengajuan, tb_pengajuan.judul, tb_pengajuan.mulai, tb_pengajuan.selesai, tb_pengajuan.pdf, tb_pengajuan.id')
            ->join('users', 'users.id = tb_pengajuan.id', 'left')
            ->join('tb_mahasiswa', 'tb_mahasiswa.id = tb_pengajuan.id', 'left')
            ->where('tb_pengajuan.id', $id_user)
            ->where('tb_pengajuan.status', 'filed')
            ->orderBy('tb_pengajuan.mulai', 'asc')
            ->get()
            ->getResultArray();
    }
    public function getDataDraft($id_user)
    {
        return $this->db->table('tb_pengajuan')
            ->select('tb_pengajuan.id_pengajuan, tb_pengajuan.judul, tb_pengajuan.mulai, tb_pengajuan.selesai, tb_pengajuan.pdf, tb_pengajuan.id')
            ->join('users', 'users.id = tb_pengajuan.id', 'left')
            ->join('tb_mahasiswa', 'tb_mahasiswa.id = tb_pengajuan.id', 'left')
            ->where('tb_pengajuan.id', $id_user)
            ->where('tb_pengajuan.status', 'draft')
            ->orderBy('tb_pengajuan.mulai', 'asc')
            ->get()
            ->getResultArray();
    }
}
