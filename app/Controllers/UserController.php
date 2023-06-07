<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BagianModel;
use App\Models\BagianAtasanModel;

class UserController extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Pengajuan | User'
        ];
        return view('layouts/user/dashboard', $data);
    }
    public function mengajukan()
    {
        $dataModel = new BagianModel();
        $data = [
            'title'   => 'Pengajuan | User',
            'section' => $dataModel->getData()
        ];
        // return view('template/template');
        return view('layouts/user/mengajukan', $data);
    }
    public function isiForm($slug)
    {
        $dataModel = new BagianModel();
        $dataModel = new BagianAtasanModel();
        $data = [
            'title'  => 'Form Pengajuan | User',
            'slug'   => $slug,
            'atasan' => $dataModel->getDataBySlug($slug),
            'bidang' => $dataModel->getBidang($slug),
            'message' => 'Data Bidang atau Atasan ' . $slug . ' Tidak Ditemukan'
        ];
        if ($dataModel->getDataBySlug($slug) == null) {
            return view('errors/html/error_404', $data);
        }
        return view('layouts/user/formPengajuan', $data);
    }
    public function uploadProposal($slug)
    {
        $link = '/ajukan/' . $slug;
        $validation =  \Config\Services::validation();
        $validation->setRules([
            'pdf_file' => 'uploaded[pdf_file]|mime_in[pdf_file,application/pdf]',
            'judul' => 'required',
        ]);

        if (!$validation->run($this->request->getPost())) {
            // Jika validasi gagal, tampilkan pesan error dan redirect kembali ke form
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        // Cek apakah ada file yang diunggah
        if ($this->request->getFile('pdf_file')->isValid()) {
            // Dapatkan file yang diunggah
            $pdfFile = $this->request->getFile('pdf_file');

            // Pindahkan file ke direktori tujuan
            $pdfFile->move('/upload', $pdfFile->getName());

            // Tambahkan kode lain sesuai kebutuhan Anda, misalnya menyimpan nama file di database
            // ...

            // Redirect atau tampilkan pesan sukses
            return redirect()->to($link);
        } else {
            // Jika tidak ada file yang diunggah, tampilkan pesan error
            return redirect()->back()->with('error', 'No file uploaded.');
        }
    }
}
