<?php
//array acalar (1 dimensi)
$m1 = ['nim' => '0922001', 'nama' => 'Jamal', 'nilai' => 89];
$m2 = ['nim' => '0922002', 'nama' => 'Elsa', 'nilai' => 70];
$m3 = ['nim' => '0922003', 'nama' => 'Kepin', 'nilai' => 87];
$m4 = ['nim' => '0922004', 'nama' => 'Budi', 'nilai' => 78];
$m5 = ['nim' => '0922005', 'nama' => 'Siska', 'nilai' => 46];
$m6 = ['nim' => '0922006', 'nama' => 'Aimi', 'nilai' => 55];
$m7 = ['nim' => '0922007', 'nama' => 'Joni', 'nilai' => 98];
$m8 = ['nim' => '0922008', 'nama' => 'Fukada', 'nilai' => 54];
$m9 = ['nim' => '0922009', 'nama' => 'Raihan', 'nilai' => 66];
$m10 = ['nim' => '0922010', 'nama' => 'Unus', 'nilai' => 90];

//array assosiative
$mahasiswa = [$m1, $m2, $m3, $m4, $m5, $m6, $m7, $m8, $m9, $m10];

$judul = ['No', 'NIM', 'Nama', 'Nilai', 'Keterangan', '$grade', 'Predikat'];

//aggregate function array
$jml_mhs = count(array_column($mahasiswa, 'nama'));
$nilai_max = max(array_column($mahasiswa, 'nilai'));
$nilai_min = min(array_column($mahasiswa, 'nilai'));
$jml_nilai = array_column($mahasiswa, 'nilai');
$total_nilai = array_sum($jml_nilai);
$nilai_rata2 = $total_nilai / $jml_mhs;

$data_mhs = [
    'Nilai Tertinggi' => $nilai_max,
    'Nilai Terendah' => $nilai_min,
    'Nilai Rata-Rata' => $nilai_rata2,
    'Jumlah Mahasiswa' => $jml_mhs
];

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>
    <h1 class="text-center">Tabel Nilai Mahasiswa</h1><br>
    <table class="table table-striped">
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
            foreach ($mahasiswa as $msh) {

                $ket = ($msh['nilai'] >= 60) ? 'Lulus' : 'Gagal';

                if ($msh['nilai'] <= 54) {
                    $grade = 'E';
                } else if ($msh['nilai'] <= 64 && $msh['nilai'] >= 55) {
                    $grade = 'D';
                } else if ($msh['nilai'] <= 74 && $msh['nilai'] >= 65) {
                    $grade = 'C';
                } else if ($msh['nilai'] <= 84 && $msh['nilai'] >= 75) {
                    $grade = 'B';
                } else if ($msh['nilai'] <= 100 && $msh['nilai'] >= 85) {
                    $grade = 'A';
                } else {
                    $grade;
                }

                switch ($grade) {
                    case 'E':
                        $predikat = 'Buruk';
                        break;
                    case 'D':
                        $predikat = 'Kurang';
                        break;
                    case 'C':
                        $predikat = 'Cukup';
                        break;
                    case 'B':
                        $predikat = 'Bagus';
                        break;
                    case 'A':
                        $predikat = 'Memuaskan';
                        break;
                    default:
                        $predikat;
                }
            ?>
                <tr>
                    <td><?= $no ?></td>
                    <td><?= $msh['nim'] ?></td>
                    <td><?= $msh['nama'] ?></td>
                    <td><?= $msh['nilai'] ?></td>
                    <td><?= $ket ?></td>
                    <td><?= $grade ?></td>
                    <td><?= $predikat ?></td>
                </tr>
            <?php $no++;
            } ?>
        </tbody>
        <tfoot>
            <?php
            foreach ($data_mhs as $data_id => $data_v) {
            ?>
                <tr>
                    <th colspan="3"><?= $data_id ?></th>
                    <th><?= $data_v ?></th>
                </tr>
            <?php } ?>
        </tfoot>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>