<?php

namespace App\Models;

use CodeIgniter\Model;

class BagianAtasanModel extends Model
{
    protected $DBGroup = 'default';
    protected $table = 'tb_data_section';
    protected $primaryKey = 'id_data_section';
    protected $useAutoIncrement = true;
    protected $returnType = 'array';
    protected $useSoftDeletes = false;
    protected $protectFields = true;
    protected $allowedFields = [];

    public function getDataBySlug($slug)
    {
        $builder = $this->db->table('tb_atasan');
        $builder->select('tb_data_section.id_data_section, tb_atasan.nama_atasan, tb_atasan.jabatan, tb_data_section.no_urut')
            ->join('tb_data_section', 'tb_atasan.id_atasan = tb_data_section.id_atasan')
            ->join('tb_section', 'tb_section.id_section = tb_data_section.id_section')
            ->where('tb_section.slug', $slug)
            ->orderBy('tb_data_section.no_urut', 'ASC');

        $query = $builder->get();
        return $query->getResultArray();
    }
    public function getBidang($slug)
    {
        $builder = $this->db->table('tb_section');
        $builder->select('bidang')
            ->where('slug', $slug);

        $query = $builder->get();
        return $query->getRow('bidang');
    }
}
