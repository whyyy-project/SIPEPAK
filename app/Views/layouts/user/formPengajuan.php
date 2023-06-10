<?= $this->extend('template/template'); ?>
<?= $this->section('isi'); ?>


<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-1">
        <h1 class="h3 mb-0 text-gray-800">Isi Form Pengajuan</h1>
        <hr>
    </div>
    <div class="row mb-3 ml-3">
        <p class="text-sm">
            <a href="<?= base_URL(); ?>user" class="btn btn-link">Dashboard</a> »
            <a href="<?= base_URL(); ?>ajukan" class="btn btn-link">Pilih Bidang</a> »
            <span class="ml-2">
                <?= $bidang; ?>
            </span>
        </p>
    </div>
    <!-- end page heading -->
    <?php if (session()->getFlashData('success')) : ?>
        <div class="alert alert-success">
            <?= session()->getFlashData('success') ?>
        </div>
    <?php endif ?>

    <?php if (session()->getFlashData('error')) : ?>
        <div class="alert alert-danger">
            <?= session()->getFlashData('error') ?>
        </div>
    <?php endif ?>


    <!-- form -->
    <div class="row">
        <div class="col-md-12">

            <!-- Daftar Nama Atasan -->
            <div class="card shadow mb-4">
                <!-- Card Header - Accordion -->
                <a href="#collapseCardAtasan" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardAtasan">
                    <h6 class="m-0 font-weight-bold text-primary">Daftar Nama Atasan</h6>
                </a>
                <!-- Card Content - Collapse -->
                <div class="collapse" id="collapseCardAtasan">
                    <table class="table table-hover">
                        <thead class="text-center">
                            <tr>
                                <th>Nama</th>
                                <th>Jabatan</th>
                                <th>Pengajuan</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            <?php foreach ($atasan as $at) : ?>
                                <tr>
                                    <td>
                                        <?= $at['nama_atasan']; ?>
                                    </td>
                                    <td>
                                        <?= $at['jabatan']; ?>
                                    </td>
                                    <td>ke-<?= $at['no_urut'] ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- end Daftar Nama Atasan -->

            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Form Pengajuan Proposal</h6>
                </div>
                <div class="card-body">
                    <form method="post" enctype="multipart/form-data" action="<?= base_url() ?>ajukan/simpan/<?= $slug ?>">
                        <?php if (session()->has('errors')) : ?>
                            <div class="alert alert-danger">
                                <ul>
                                    <?php foreach (session('errors') as $error) : ?>
                                        <li><?= $error ?></li>
                                    <?php endforeach ?>
                                </ul>
                            </div>
                        <?php endif ?>
                        <div class="mb-3 row">
                            <label for="judul" class="col-md-4 col-form-label">Judul Proposal <sup class="text-danger">*</sup></label>
                            <div class="col-md-8">
                                <input required type="text" name="judul" class="form-control text-center" id="judul" autocomplete="off" placeholder="Judul Proposal" value="<?= old('judul') ?>">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-md-4 col-form-label">Waktu Acara <sup class="text-danger">*</sup></label>
                            <div class="col-md-4">
                                <input required type="date" name="mulai" class="form-control text-center" value="<?= old('mulai') ?>">
                            </div>
                            <div class="col-md-4">
                                <input required type="date" name="selesai" class="form-control text-center" value="<?= old('selesai') ?>">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="keterangan" class="col-md-4 col-form-label">Keterangan Kegiatan <sup class="text-danger">*</sup></label>
                            <div class="col-md-8">
                                <textarea name="keterangan" id="keterangan" class="form-control text-center" placeholder="Keterangan" required><?= old("keterangan") ?></textarea>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="pdf" class="col-md-4 col-form-label">Upload Proposal <small>(.pdf)</small> <sup class="text-danger">*</sup></label>
                            <div class="col-md-8">
                                <input required type="file" class="form-control" name="pdf" id="pdf">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="status" class="col-md-4 col-form-label">Pilih Opsi <sup class="text-danger">*</sup></label>
                            <div class="col-md-8">
                                <select name="status" class="form-control text-center" id="status">
                                    <option value="draft" <?= old('status') === 'draft' ? 'selected' : '' ?>>Simpan sebagai Draft</option>
                                    <option value="filed" <?= old('status') === 'filed' ? 'selected' : '' ?>>Ajukan</option>
                                </select>
                            </div>
                        </div>


                        <div class="row justify-content-center mb-4">

                            <button type="reset" class="btn btn-danger mr-2">Reset</button>
                            <button type="submit" class="btn btn-success">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- /.container-fluid -->


<?= $this->endSection(); ?>