<?php
require 'Pegawai.php';
//ciptakan object
$naomi = new Pegawai('066', 'Naomi Misora', 'Manager', 'Kristen Katholik', 'Menikah');
$fuad = new Pegawai('018', 'Fuad Al Zein', 'Asmen', 'Islam', 'Menikah');
$mina = new Pegawai('099', 'Mina Kitano', 'Staff', 'Kristen Protestan', 'Menikah');
$xuang = new Pegawai('088', 'Xuang Hutang', 'Kabag', 'Konghuchu', 'Belum Menikah');
$eimi = new Pegawai('069', 'Eimi Fukada', 'Manager', 'Budha', 'Menikah');
//dst ...
//cetak struktur gaji

echo '<h3 align="center">' . Pegawai::PT . '</h3>';
$naomi->mencetak();
$fuad->mencetak();
$mina->mencetak();
$xuang->mencetak();
$eimi->mencetak();
//dst ...
echo 'Jumlah Pegawai: ' . Pegawai::$jml;
