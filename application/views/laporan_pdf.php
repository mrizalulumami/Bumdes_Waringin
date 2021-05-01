<!DOCTYPE html>
<html lang="en"><head>
    <title></title>
</head><body>
    <h1><?= $title; ?></h1>
    <table>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Foto</th>
                <th scope="col">Nama</th>
                <th scope="col">NIK</th>
                <th scope="col">Alamat</th>
                <th scope="col">TTL</th>
                <th scope="col">Foto KK</th>
            </tr>
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
                </tr>
                <?php $i++; ?>
            <?php endforeach; ?>
    </table>
</body></html>