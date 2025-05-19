<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Nama Anggota</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin-right: 50px;
            margin-top: 30px;
            font-size: 18px;
            text-align: center;
            padding-left: 20%;
        }

        th,
        td {
            padding: 5px;
            border: 1px solid #ddd;
        }

        th {
            background-color: #f4f4f4;
            font-weight: bold;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        @media (max-width: 600px) {
            table {
                font-size: 14px;
            }

            th,
            td {
                padding: 4px;
            }
        }
    </style>
</head>


<body>
    <div id="label-page">
        <h3>Tampil Data Buku</h3>
    </div>
    <?php
    include '../koneksi.php'; // Pastikan koneksi database tersedia

    if (!$db) {
        die("Koneksi database gagal: " . mysqli_connect_error());
    }

    $sql = "SELECT * FROM tbanggota ORDER BY idanggota DESC";
    $q_tampil_anggota = mysqli_query($db, $sql);

    if (!$q_tampil_anggota) {
        die("Query gagal: " . mysqli_error($db));
    }
    ?>

    <div id="content">
        <button class="btn-cetak" onclick="window.print()">Cetak Laporan</button>
        <table id="tabel-tampil">
            <tr>
                <th id="label-tampil-no">No</th>
                <th>ID Anggota</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
            </tr>

            <?php
            $nomor = 1;
            if (mysqli_num_rows($q_tampil_anggota) > 0) {
                while ($r_tampil_anggota = mysqli_fetch_array($q_tampil_anggota)) {
            ?>
                    <tr>
                        <td><?php echo $nomor++; ?></td>
                        <td><?php echo $r_tampil_anggota['idanggota']; ?></td>
                        <td><?php echo $r_tampil_anggota['nama']; ?></td>
                        <td><?php echo $r_tampil_anggota['jeniskelamin']; ?></td>
                        <td><?php echo $r_tampil_anggota['alamat']; ?></td>

                    </tr>
            <?php
                }
            } else {
                echo "<tr><td colspan='6' style='text-align:center;'>Data tidak ditemukan</td></tr>";
            }
            ?>
        </table>
    </div>
</body>

</html>