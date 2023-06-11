<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BagianModel;
use App\Models\BagianAtasanModel;
use App\Models\UploadProposalModel;
use App\Models\StatusPengajuanModel;
use CodeIgniter\I18n\Time;

class UserController extends BaseController
{
    protected $bidangModel;
    protected $bidangAtasanModel;
    protected $pengajuan;
    protected $dataPengajuan;

    public function __construct()
    {
        $this->bidangModel = new BagianModel();
        $this->bidangAtasanModel = new BagianAtasanModel();
        $this->pengajuan = new UploadProposalModel();
        $this->dataPengajuan = new StatusPengajuanModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Pengajuan | User'
        ];
        return view('layouts/user/dashboard', $data);
    }
    public function mengajukan()
    {
        $data = [
            'title'   => 'Pengajuan | User',
            'section' => $this->bidangModel->getData()
        ];
        return view('layouts/user/mengajukan', $data);
    }
    public function isiForm($slug)
    {
        $data = [
            'title'  => 'Form Pengajuan | User',
            'slug'   => $slug,
            'atasan' => $this->bidangAtasanModel->getDataBySlug($slug),
            'bidang' => $this->bidangAtasanModel->getBidang($slug),
            'message' => 'Data Bidang atau Atasan ' . $slug . ' Tidak Ditemukan'
        ];
        if ($this->bidangAtasanModel->getDataBySlug($slug) == null) {
            return view('errors/html/error_404', $data);
        }
        return view('layouts/user/formPengajuan', $data);
    }
    public function daftarPengajuan()
    {
        $id_user = user()->id;
        $dataProposal = $this->pengajuan->getDataPengajuan($id_user);
        // Loop melalui dataProposal untuk mengubah format tanggal
        foreach ($dataProposal as $proposal) {
            $mulai = Time::createFromFormat('Y-m-d', $proposal['mulai']);
            $selesai = Time::createFromFormat('Y-m-d', $proposal['selesai']);
            // Mengubah format tanggal menjadi "d F Y"
            $formattedDate1 = $mulai->format('d F Y');
            $formattedDate2 = $selesai->format('d F Y');
            // Menyimpan tanggal yang sudah diubah formatnya ke dalam dataProposal
            $proposal['mulai'] = $formattedDate1;
            $proposal['selesai'] = $formattedDate2;
        }
        $data = [
            'title'   => 'Data Pengajuan | User',
            'id_user' => $id_user,
            'dataProposal' => $dataProposal,
            'dataStatus' => $this->dataPengajuan->GetDataAtasan(),
        ];
        return view('layouts/user/daftarPengajuan', $data);
    }
    public function Draft()
    {
        $id_user = user()->id;
        $dataProposal = $this->pengajuan->getDataDraft($id_user);
        // Loop melalui dataProposal untuk mengubah format tanggal
        foreach ($dataProposal as $proposal) {
            $mulai = Time::createFromFormat('Y-m-d', $proposal['mulai']);
            $selesai = Time::createFromFormat('Y-m-d', $proposal['selesai']);
            // Mengubah format tanggal menjadi "d F Y"
            $formattedDate1 = $mulai->format('d F Y');
            $formattedDate2 = $selesai->format('d F Y');
            // Menyimpan tanggal yang sudah diubah formatnya ke dalam dataProposal
            $proposal['mulai'] = $formattedDate1;
            $proposal['selesai'] = $formattedDate2;
        }
        $data = [
            'title'   => 'Data Pengajuan | User',
            'id_user' => $id_user,
            'dataProposal' => $dataProposal,
            'dataStatus' => $this->dataPengajuan->GetDataAtasan(),
        ];
        return view('layouts/user/Draft', $data);
    }
    public function submitDraft($idPengajuan)
    {
        // jika data kosong
        if ($this->pengajuan->getDataById($idPengajuan) == null) {
            return redirect()->to('/draft')->with('error', 'Data Proposal tidak Ditemukan.');
        }
        $this->pengajuan->submitDraft($idPengajuan);
        return redirect()->to('/draft')->with('success', 'Berhasil Mengirim Proposal.');
    }
    public function Riwayat()
    {
        $id_user = user()->id;
        $dataProposal = $this->pengajuan->getDataRiwayat($id_user);
        // Loop melalui dataProposal untuk mengubah format tanggal
        foreach ($dataProposal as $proposal) {
            $mulai = Time::createFromFormat('Y-m-d', $proposal['mulai']);
            $selesai = Time::createFromFormat('Y-m-d', $proposal['selesai']);
            // Mengubah format tanggal menjadi "d F Y"
            $formattedDate1 = $mulai->format('d F Y');
            $formattedDate2 = $selesai->format('d F Y');
            // Menyimpan tanggal yang sudah diubah formatnya ke dalam dataProposal
            $proposal['mulai'] = $formattedDate1;
            $proposal['selesai'] = $formattedDate2;
        }
        $data = [
            'title'   => 'Data Pengajuan | User',
            'id_user' => $id_user,
            'dataProposal' => $dataProposal,
        ];
        return view('layouts/user/riwayat', $data);
    }
}
