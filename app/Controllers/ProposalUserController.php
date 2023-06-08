<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use \App\Models\UploadProposalModel;

class ProposalUserController extends BaseController
{
    protected $Upload;

    public function __construct()
    {
        $this->Upload = new UploadProposalModel;
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
            $renamePdf = date('Y-m-d') . " - " . user()->email . $this->request->getPost('judul') . " - " . $pdfFile->getName();
            // Data proposal
            $proposalData = [
                'id' => user()->id,
                'judul' => $this->request->getPost('judul'),
                'mulai' => $this->request->getPost('mulai'),
                'selesai' => $this->request->getPost('selesai'),
                'keterangan' => $this->request->getPost('keterangan'),
                'pdf' => $renamePdf,
                'status' => $this->request->getPost('status'),
            ];
            // dd($proposalData);

            // Pindahkan file ke direktori tujuan
            $pdfFile->move(ROOTPATH . '\Proposal-PDF', $renamePdf);
            if (!$pdfFile) {
                return redirect()->to($link)->with('error', 'Terjadi kesalahan saat menyimpan atau memindahkan file.');
            }
            // Simpan data proposal ke database menggunakan model
            $simpanProposal = $this->Upload->insert($proposalData);

            // jika berhasil
            if ($simpanProposal && $pdfFile) {
                return redirect()->to($link)->with('success', 'Berhasil Mengajukan Proposal.');
            } else {
                return redirect()->to($link)->with('error', 'Terjadi kesalahan saat menyimpan data');
            }
        } else {
            // Jika tidak ada file yang diunggah, tampilkan pesan error
            return redirect()->to($link)->with('error', 'Tidak Ada file yang di upload.');
        }
    }
}
