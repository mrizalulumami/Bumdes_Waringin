<div class="container-fluid">


    <!-- Begin Page Content -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg-8">
            <?= form_open_multipart('postingan/sambutan'); ?>
            <div class="form-group row">
                <div class="col-sm-2">Gambar</div>
                <div class="col-sm-10">
                    <div class="row">
                        <div class="col-sm-3">
                            <img src="<?= base_url('assets/img/artikel/artikel_sambutan/') . $art_sambutan['gambar']; ?>" class="img-thumbnail">
                        </div>
                        <div class="col-sm-9">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="gambar" name="gambar">
                                <label for="gambar" class="custom-file-label">Choose File</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">Judul Sambutan</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="judul_sambutan" name="judul_sambutan" value="<?= $art_sambutan['judul_sambutan']; ?>">
                    <?= form_error('judul_sambutan', '<small class="text-danger pl-3">,</small>'); ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">Isi Sambutan</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="isi_sambutan" name="isi_sambutan" value="<?= $art_sambutan['isi_sambutan']; ?>">
                    <?= form_error('isi_sambutan', '<small class="text-danger pl-3">,</small>'); ?>
                </div>
            </div>

            <div class="form-group row justify-content-end">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </div>
            </form>
        </div>
    </div>

</div>