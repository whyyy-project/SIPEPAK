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


    <!-- form -->
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Basic Card Example</h6>
                </div>
                <div class="card-body">
                    <ul class="list-group mb-5">
                        <?php if ($atasan < 1): ?>
                            <h3 class="text-danger">Atasan Belum di tentukan admin</h3>
                        <?php endif; ?>
                        <?php foreach ($atasan as $at): ?>
                            <li class="list-group-item">
                                <?= $at['nama_atasan']; ?>
                                <?= $at['jabatan']; ?>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                    <div class="mb-3 row">
                        <label for="judul" class="col-md-4 col-form-label">Judul</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control text-center" id="judul" placeholder="Masukan Judul">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputtext" class="col-md-4 col-form-label">text</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" id="inputtext">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputtext" class="col-md-4 col-form-label">text</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" id="inputtext">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end form -->
</div>
<!-- /.container-fluid -->


<?= $this->endSection(); ?>