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

            <h1 class="h3 mb-4 text-gray-800">Postingan Selamat Datang</h1>


            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Foto</th>
                        <th scope="col">judul Sambutan</th>
                        <th scope="col">Isi Sambutan</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($art_selamat as $asel) : ?>
                        <tr>
                            <th scope="row"><?= $i; ?></th>
                            <td>
                                <div class="">
                                    <img src="<?= base_url('assets/img/artikel/artikel_sambutan/') . $asel['gambar']; ?>" class="img-thumbnail" width="40" height="40">
                                </div>
                            </td>
                            <td><?= $asel['judul_sambutan'] ?></td>
                            <td><?= $asel['isi_sambutan'] ?></td>
                            <td>
                                <a href="<?= base_url('halamanutama') ?>" class="badge badge-pill badge-info"><i class="fas fa-search-plus"></i></a>
                                <a href="<?= base_url('postingan/editdata'); ?>" class="badge badge-pill badge-success"><i class="fas fa-edit"></i></a>
                                <a href="<?php echo site_url('postingan/deletesambutan/') . $asel['id_artsel'] ?>" class="badge badge-pill badge-danger" onclick="return confirm('Yakin ingion menghapus data?')"><i class="fas fa-trash-alt"></i></a>
                            </td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

    <div class="row">
        <div class="col-lg">
            <?php if (validation_errors()) : ?>
                <div class="alert alert-danger" role="alert">
                    <?= validation_errors(); ?>
                </div>
            <?php endif; ?>
            <?= form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>'); ?>

            <?= $this->session->set_flashdata('message'); ?>

            <h1 class="h3 mb-4 text-gray-800">Postingan Profil</h1>


            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Foto</th>
                        <th scope="col">judul Sambutan</th>
                        <th scope="col">Isi Sambutan</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($art_prof as $ap) : ?>
                        <tr>
                            <th scope="row"><?= $i; ?></th>
                            <td>
                                <div class="">
                                    <img src="<?= base_url('assets/img/artikel/artikel_profile/') . $ap['gambar_prof']; ?>" class="img-thumbnail" width="40" height="40">
                                </div>
                            </td>
                            <td><?= $ap['judul_prof'] ?></td>
                            <td><?= $ap['deskrips'] ?></td>
                            <td>
                                <a href="#" class="badge badge-pill badge-info"><i class="fas fa-search-plus"></i></a>
                                <a href="#" class="badge badge-pill badge-success"><i class="fas fa-edit"></i></a>
                                <a href="<?php echo site_url('postingan/deleteprofiles/') . $ap['id_artprof'] ?>" class="badge badge-pill badge-danger" onclick="return confirm('Yakin ingion menghapus data?')"><i class="fas fa-trash-alt"></i></a>
                            </td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

    <div class="row">
        <div class="col-lg">
            <?php if (validation_errors()) : ?>
                <div class="alert alert-danger" role="alert">
                    <?= validation_errors(); ?>
                </div>
            <?php endif; ?>
            <?= form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>'); ?>

            <?= $this->session->set_flashdata('message'); ?>

            <h1 class="h3 mb-4 text-gray-800">Postingan Servis</h1>


            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Foto</th>
                        <th scope="col">judul Sambutan</th>
                        <th scope="col">Isi Sambutan</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($servis as $sv) : ?>
                        <tr>
                            <th scope="row"><?= $i; ?></th>
                            <td><?= $sv['icon_serv'] ?></td>
                            <td><?= $sv['judul_serv'] ?></td>
                            <td><?= $sv['ket_serv'] ?></td>
                            <td>
                                <a href="#" class="badge badge-pill badge-info"><i class="fas fa-search-plus"></i></a>
                                <a href="#" class="badge badge-pill badge-success"><i class="fas fa-edit"></i></a>
                                <a href="<?php echo site_url('postingan/deleteservice/') . $sv['id_artiservis'] ?>" class="badge badge-pill badge-danger" onclick="return confirm('Yakin ingion menghapus data?')"><i class="fas fa-trash-alt"></i></a>
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