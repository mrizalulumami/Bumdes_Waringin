<div class="container-fluid">
    <!-- Begin Page Content -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>



    <div class="row">
        <div class="col-lg">
            <?php if (validation_errors()) : ?>
                <div class="alert alert-danger" role="alert">
                    <?= validation_errors(); ?>
                </div>
            <?php endif; ?>
            <?= form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>'); ?>

            <?= $this->session->set_flashdata('message'); ?>


            <div class="navbar">
                <div class="navbar-left">
                    <a href="<?= base_url('admin/tambahdata'); ?>" class="btn btn-primary mb-3"><i class="fas fa-user-plus">Add Peminjam</i></a>
                    <a href="<?= base_url('admin/pdf'); ?>" class="btn btn-warning mb-3"><i class="fa fa-file"></i></i>Export PDF</a>
                    <a href="<?= base_url('admin/print'); ?>" class="btn btn-danger mb-3"><i class="fa fa-print"></i>Print</a>
                    <a href="#" class="btn btn-primary mb-3"><i class="fa fa-print"></i>Print</a>
                </div>
                <div class="navbar-right">
                    <form class="form-inline my-2 my-lg-0">
                        <?= form_open('admin/search') ?>
                        <input type="text" name="keyword" class="form-control mr-sm-2" placeholder="search">
                        <button type="submit" class="btn btn-success">Cari</button>
                        <?= form_close() ?>
                    </form>
                </div>
            </div>


            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Foto</th>
                        <th scope="col">Nama</th>
                        <th scope="col">NIK</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">TTL</th>
                        <th scope="col">Foto KK</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($dat_peminjam as $dp) : ?>
                        <tr>
                            <th scope="row"><?= $i; ?></th>
                            <td>
                                <div class="">
                                    <img src="<?= base_url('assets/img/peminjam/') . $dp['foto']; ?>" class="img-thumbnail" width="40" height="40">
                                </div>
                            </td>
                            <td><?= $dp['nama'] ?></td>
                            <td><?= $dp['nik'] ?></td>
                            <td><?= $dp['alamat'] ?></td>
                            <td><?= $dp['ttl'] ?></td>
                            <td>
                                <div class="">
                                    <img src="<?= base_url('assets/img/peminjam/') . $dp['foto_kk']; ?>" class="img-thumbnail" width="40" height="40">
                                </div>
                            </td>
                            <td>
                                <a href="" class="badge badge-pill badge-info"><i class="fas fa-search-plus"></i></a>
                                <a href="<?= base_url('admin/editdatapeminjam'); ?>" class="badge badge-pill badge-success"><i class="fas fa-edit"></i></a>
                                <a href="<?php echo site_url('admin/delete/') . $dp['id_peminjam'] ?>" class="badge badge-pill badge-danger" onclick="return confirm('Yakin ingion menghapus data?')"><i class="fas fa-trash-alt"></i></a>
                            </td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- /.container-fluid -->