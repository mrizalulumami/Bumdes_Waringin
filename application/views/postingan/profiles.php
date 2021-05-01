<div class="container-fluid">


    <!-- Begin Page Content -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg-8">
            <?= form_open_multipart('postingan/profiles'); ?>
            <div class="form-group row">
                <div class="col-sm-2">Gambar</div>
                <div class="col-sm-10">
                    <div class="row">
                        <div class="col-sm-3">
                            <img src="<?= base_url('assets/img/artikel/artikel_profile/') . $art_prof['gambar_prof']; ?>" class="img-thumbnail">
                        </div>
                        <div class="col-sm-9">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="gambar_prof" name="gambar_prof">
                                <label for="gambar_prof" class="custom-file-label">Choose File</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">Judul Profile</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="judul_prof" name="judul_prof" value="<?= $art_prof['judul_prof']; ?>">
                    <?= form_error('judul_prof', '<small class="text-danger pl-3">,</small>'); ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">Deskripsi</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="deskrips" name="deskrips" value="<?= $art_prof['deskrips']; ?>">
                    <?= form_error('deskrips', '<small class="text-danger pl-3">,</small>'); ?>
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