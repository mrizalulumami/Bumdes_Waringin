<div class="container-fluid">


    <!-- Begin Page Content -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg-8">
            <?= form_open_multipart('postingan/services'); ?>
            
            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">Judul Servis</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="judul_serv" name="judul_serv" value="<?= $service['judul_serv']; ?>">
                    <?= form_error('judul_serv', '<small class="text-danger pl-3">,</small>'); ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">Ketrangan Servis</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="ket_serv" name="ket_serv" value="<?= $service['ket_serv']; ?>">
                    <?= form_error('ket_serv', '<small class="text-danger pl-3">,</small>'); ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">Icon </label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="icon_serv" name="icon_serv" value="<?= $service['icon_serv']; ?>">
                    <?= form_error('icon_serv', '<small class="text-danger pl-3">,</small>'); ?>
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