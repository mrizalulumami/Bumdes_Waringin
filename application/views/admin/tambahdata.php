<div class="container-fluid">


    <!-- Begin Page Content -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg-9">
            <?= form_open_multipart('admin/tambahdata'); ?>
            <div class="form-group row">
                <div class="col-sm-2">Foto Peminjam</div>
                <div class="col-sm-10">
                    <div class="row">
                        <div class="col-sm-3">
                            <img src="<?= base_url('assets/img/peminjam/') . $data_peminjam['foto']; ?>" class="img-thumbnail">
                        </div>
                        <div class="col-sm-9">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="foto" name="foto">
                                <label for="foto" class="custom-file-label">Choose File</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-2">Foto KK</div>
                <div class="col-sm-10">
                    <div class="row">
                        <div class="col-sm-3">
                            <img src="<?= base_url('assets/img/kk_peminjam/') . $data_peminjam['foto_kk']; ?>" class="img-thumbnail">
                        </div>
                        <div class="col-sm-9">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="foto_kk" name="foto_kk">
                                <label for="foto_kk" class="custom-file-label">Choose File</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="email" class="col-sm-2 col-form-label">Nama Lengkap</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nama" name="nama">
                    <?= form_error('nama', '<small class="text-danger pl-3">,</small>'); ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">NIK</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nik" name="nik">
                    <?= form_error('nik', '<small class="text-danger pl-3">,</small>'); ?>
                </div>
            </div>

            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">TTL</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" id="tempat" name="tempat">
                    <?= form_error('tempat', '<small class="text-danger pl-3">,</small>'); ?>
                </div>
                <div class="col-sm-5">
                    <input type="text" class="form-control datepicker" id="tggllahir" name="tggllahir">
                    <?= form_error('tggllahir', '<small class="text-danger pl-3">,</small>'); ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">Alamat</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="alamat" name="alamat">
                    <?= form_error('alamat', '<small class="text-danger pl-3">,</small>'); ?>
                </div>
            </div>

            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">Total Pinjaman</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" id="total" name="total">
                    <?= form_error('total', '<small class="text-danger pl-3">,</small>'); ?>
                </div>
                <label for="name" class="col-sm-1 col-form-label">Ket.</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="ket" name="ket">
                    <?= form_error('ket', '<small class="text-danger pl-3">,</small>'); ?>
                </div>
            </div>
            <div class="form-group row justify-content-end">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary btn-user btn-block">Tambah</button>
                </div>
            </div>
            </form>
        </div>
    </div>

</div>