<?php
require_once 'Lingkaran.php';
require_once 'PersegiPanjang.php';
require_once 'Segitiga.php';

$ling = new Lingkaran(10);
$pepan = new PersegiPanjang(10, 3);
$segi = new Segitiga(5, 6);

$data_bidang = [$ling, $pepan, $segi];
$judul = ['NO', 'Nama Bidang', 'Keterangan', 'Luas Bidang', 'Keliling Bidang'];

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kumpulan Bidang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <h1 class="text-center">Kumpulan Bidang</h1><br>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <?php
                    foreach ($judul as $jdl) {
                    ?>
                        <th><?= $jdl ?></th>
                    <?php } ?>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($data_bidang as $data) { ?>
                    <tr>
                        <th><?= $no++ ?></th>
                        <?= $data->cetak() ?>
                    <?php } ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>