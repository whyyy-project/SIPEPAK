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
    public function getDataRiwayat($id_user)
    {
        return $this->db->table('tb_pengajuan')
            ->select('tb_pengajuan.id_pengajuan, tb_pengajuan.judul, tb_pengajuan.mulai, tb_pengajuan.selesai, tb_pengajuan.pdf, tb_pengajuan.id, tb_status_pengajuan.status, tb_status_pengajuan.keterangan, tb_atasan.nama_atasan')
            ->join('tb_status_pengajuan', 'tb_status_pengajuan.id_pengajuan = tb_pengajuan.id_pengajuan', 'left')
            ->join('users', 'users.id = tb_pengajuan.id', 'left')
            ->join('tb_mahasiswa', 'tb_mahasiswa.id = tb_pengajuan.id', 'left')
            ->join('tb_data_section', 'tb_data_section.id_data_section = tb_status_pengajuan.id_data_section')
            ->join('tb_atasan', 'tb_atasan.id_atasan = tb_data_section.id_atasan')
            ->where('tb_pengajuan.id', $id_user)
            ->where('tb_pengajuan.status', 'filed')
            ->whereNotIn('tb_status_pengajuan.status', ['pending', 'progress'])
            ->orderBy('tb_status_pengajuan.updated_at', 'desc')
            ->get()
            ->getResultArray();
    }
    public function getDataById($id)
    {
        return $this->where('id_pengajuan', $id)->limit(1)->findAll();
    }

    public function submitDraft($id_pengajuan)
    {
        $this->db->table('tb_pengajuan')
            ->where('id_pengajuan', $id_pengajuan)
            ->update(['status' => 'filed']);

        $id_data_section = $this->db->table('tb_pengajuan')
            ->select('tb_data_section.id_data_section')
            ->join('tb_status_pengajuan', 'tb_status_pengajuan.id_pengajuan = tb_pengajuan.id_pengajuan', 'left')
            ->join('tb_data_section', 'tb_data_section.id_data_section = tb_status_pengajuan.id_data_section')
            ->where('tb_pengajuan.id_pengajuan', $id_pengajuan)
            ->where('tb_data_section.no_urut', 1);

        $this->db->table('tb_status_pengajuan')
            ->where('id_data_section', $id_data_section)
            ->update(['status' => 'progress']);
    }
}
