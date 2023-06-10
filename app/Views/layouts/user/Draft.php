<?= $this->extend('template/template'); ?>
<?= $this->section('isi'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-1">
        <h1 class="h3 mb-0 text-gray-800">Daftar <strong>Pengajuan</strong></h1>
    </div>
    <!-- end page heading -->
    <div class="row ml-3">
        <p class="text-sm">
            <a href="<?= base_URL(); ?>user" class="btn btn-link">Dashboard</a> »
            <span class="ml-2">
                Daftar Pengajuan
            </span>
        </p>
    </div>

    <div class="row">
        <div class="col">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Data Pengajuan</h6>
                </div>
                <div class="card-body">


                    <!-- tabel pengajuan -->
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr class="text-center">
                                    <th>Judul Proposal</th>
                                    <th>Waktu</th>
                                    <th>PDF</th>
                                    <th>Status</th>
                                    <th>opsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($dataProposal as $dp) : ?>
                                    <tr class="text-center">
                                        <td><?= $dp['judul'] ?></td>
                                        <td><?= $dp['mulai'] ?> - <?= $dp['selesai'] ?></td>
                                        <td>
                                            <a href="<?= base_url() ?>download/<?= $dp['pdf'] ?>" class="btn btn-outline-dark">Download</a>
                                        </td>
                                        <td>
                                            <?php foreach ($dataStatus as $ds) : ?>
                                                <?php if ($ds['id_pengajuan'] == $dp['id_pengajuan']) : ?>
                                                    <p>
                                                        <?= $ds['nama_atasan'] ?>
                                                    </p>
                                                <?php endif; ?>
                                            <?php endforeach; ?>
                                            </select>
                                        </td>
                                        <td>
                                            <a href="#" class="btn btn-outline-primary">Detail</a>
                                            <!-- <a href="#" class="btn btn-outline-success">Edit</a>
                                            <a href="#" class="btn btn-outline-danger">Delete</a> -->
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- end tabel pengajuan -->

                </div>
            </div>
        </div>
    </div>



</div>
<!-- /.container-fluid -->
<?= $this->endSection(); ?>