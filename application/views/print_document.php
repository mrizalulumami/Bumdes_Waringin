<div class="container-fluid">
    <br>
    <br>
    <br>
    <br>
    <div class="row">
        <div class="col-lg" style=" margin-left: 40px;  margin-right: 40px;">
            <table class="table table-borderless" style="width: 100%;" align="center">
                <tr>
                    <td scope="col" align="center">
                        <div class="img center">
                            <img src="<?= base_url('assets/img/logolaporan/patuhkarya.png'); ?>" width="140" height="150">
                        </div>
                    </td>
                    <td scope="col">
                        <div class="header" style="text-align: center;">
                            <h5 class="kop">PEMERINTAH KABUPATEN LOMBOK TIMUR</h5>
                            <h5 class="kop">KECAMATAN SURALAGA</h5>
                            <h4 class="kop">BADAN USAHA MILIK DESA WARINGIN</h4>
                            <h7 class="kop2">JLJurusan SUralaga Geres Lombok Timur Telp. 087863310608 Kode Pos: 83652
                                Website: http://www.Bumdes.waringin.id Email: waringin@gmail.com </h7>
                        </div>
                    </td>
                    <td scope="col" align="center">
                        <div class="img center">
                            <img src="<?= base_url('assets/img/logolaporan/bumdes.png'); ?>" width="150" height="150">
                        </div>
                    </td>
                </tr>
            </table>
            <div style="text-align: center;">
                <hr size="50px" color="black">
            </div>
            <div align="center"><u>
                    <h5 class="kop"><u><b>LAPORAN KETERANGAN PEMINJAM BUMDES</b></u></h5>
                </u></div>
            <div align="center">
                <h5 class="kop">Nomor : 1.001/___ /PEM/2020</h5>
            </div>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-lg" style=" margin-left: 40px;  margin-right: 40px;">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Foto</th>
                        <th scope="col">Nama</th>
                        <th scope="col">NIK</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">TTL</th>
                        <th scope="col">Jml.Pinjaman</th>
                        <th scope="col">Ket.</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($dat_peminjam as $dp) : ?>
                        <tr>
                            <th scope="row" style="font-size: 12px;"><?= $i; ?></th>
                            <td align="center">
                                <div class="">
                                    <img src="<?= base_url('assets/img/peminjam/') . $dp['foto']; ?>" class="img" width="40" height="40">
                                </div>
                            </td>
                            <td style="font-size: 12px;"><?= $dp['nama'] ?></td>
                            <td style="font-size: 12px;"><?= $dp['nik'] ?></td>
                            <td style="font-size: 12px;"><?= $dp['alamat'] ?></td>
                            <td style="font-size: 12px;"><?= $dp['ttl'] ?></td>
                            <td style="font-size: 12px;"><?= $dp['total'] ?></td>
                            <td style="font-size: 12px;"><?= $dp['ket'] ?></td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>

            <script type="text/javascript">
                window.print();
            </script>
        </div>
    </div>
</div>
<!-- /.container-fluid -->