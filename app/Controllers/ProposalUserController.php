<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use \App\Models\UploadProposalModel;
use \App\Models\BagianAtasanModel;
use \App\Models\StatusPengajuanModel;


class ProposalUserController extends BaseController
{
    protected $Upload;
    protected $atasan;
    protected $insertStatus;
    public function __construct()
    {
        $this->Upload = new UploadProposalModel;
        $this->atasan = new BagianAtasanModel;
        $this->insertStatus = new StatusPengajuanModel;
    }

    public function index($slug)
    {
        $link = "/ajukan/" . $slug;
        // Validasi data yang di-submit
        $validation = $this->validate([
            'judul' => 'required',
            'mulai' => 'required',
            'selesai' => 'required',
            'keterangan' => 'required',
            'pdf' => 'uploaded[pdf]|max_size[pdf,2048]|ext_in[pdf,pdf]',
            'status' => 'required|in_list[draft,filed]',

        ]);

        if (!$validation) {
            // Jika validasi gagal, tampilkan pesan error
            $errors = \Config\Services::validation()->getErrors();
            return redirect()->to($link)->withInput()->with('errors', $errors);
        }

        // Cek apakah ada file yang diunggah
        if ($this->request->getFile('pdf')->isValid()) {
            // Dapatkan file yang diunggah
            $pdfFile = $this->request->getFile('pdf');
            // dapatkan ekstensi file
            $ext = $pdfFile->getClientExtension();
            $titlePdf = url_title($pdfFile->getName(), '-', true) . '.' . $ext;
            $slugTitle = url_title($this->request->getVar('judul'), '_', true);
            // rename file
            $renamePdf = date('Y-m-d_H-i-s') . '_' . user()->email . '_' . $slugTitle . "_" . $titlePdf;


            // Data proposal

            $id_pengajuan = time() . user()->id . $slugTitle;
            $proposalData = [
                'id_pengajuan' => $id_pengajuan,
                'id' => user()->id,
                'judul' => $this->request->getPost('judul'),
                'mulai' => $this->request->getPost('mulai'),
                'selesai' => $this->request->getPost('selesai'),
                'keterangan' => $this->request->getPost('keterangan'),
                'pdf' => $renamePdf,
                'status' => $this->request->getPost('status'),
            ];

            // Pindahkan file ke direktori tujuan
            $pdfFile->move(ROOTPATH . '\Proposal-PDF', $renamePdf);
            if (!$pdfFile) {
                return redirect()->to($link)->with('error', 'Terjadi kesalahan saat menyimpan atau memindahkan file.');
            }

            // Simpan data proposal ke database menggunakan model
            $simpanProposal = $this->Upload->insert($proposalData);

            // jika berhasil
            if ($simpanProposal && $pdfFile) {

                // membuat data status pengajuan
                $dataAtasan = $this->atasan->getDataBySlug($slug);
                foreach ($dataAtasan as $urutan) :
                    $status = ($urutan['no_urut'] == 1 && $this->request->getPost('status') == "filed") ? "progress" : "pending";
                    $statusPengajuan = [
                        'id_data_section' => $urutan['id_data_section'],
                        'id_pengajuan' => $id_pengajuan,
                        'status' => $status,
                    ];
                    $this->insertStatus->insert($statusPengajuan);
                endforeach;

                // success
                return redirect()->to($link)->with('success', 'Berhasil Upload Proposal.');
            } else {
                return redirect()->to($link)->with('error', 'Terjadi kesalahan saat menyimpan data');
            }
        } else {
            // Jika tidak ada file yang diunggah, tampilkan pesan error
            return redirect()->to($link)->with('error', 'Tidak Ada file yang di upload.');
        }
    }
    public function downloadProposal($fileName)
    {
        $proposalPath = '../Proposal-PDF/' . $fileName; // Path file proposal
        // Verifikasi apakah file ada di direktori
        if (file_exists($proposalPath)) {
            // Set header response
            header('Content-Description: File Transfer');
            header('Content-Type: application/octet-stream');
            header('Content-Disposition: attachment; filename=' . $fileName);
            header('Content-Transfer-Encoding: binary');
            header('Expires: 0');
            header('Cache-Control: must-revalidate');
            header('Pragma: public');
            header('Content-Length: ' . filesize($proposalPath));
            // Baca file dan kirimkan ke output
            readfile($proposalPath);
        } else {
            // File tidak ditemukan, lakukan penanganan kesalahan yang sesuai
            return "File Not Found";
        }
    }
}
