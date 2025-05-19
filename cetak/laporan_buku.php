<!DOCTYPE html>
<html>

<head>
    <title>Laporan Peminjaman Buku</title>
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

    <div id="content">
        <button class="btn-cetak " onclick="window.print()">Cetak Laporan</button>
        <table id="tabel-tampil">
            <tr>
                <th id="label-tampil-no">No</th>
                <th>ID Buku</th>
                <th>Judul Buku</th>
                <th>Kategori</th>
                <th>Pengarang</th>
                <th>Penerbit</th>
                <th>Status</th>
            </tr>

            <?php
            // Pastikan koneksi database tersedia
            include '../koneksi.php'; // Sesuaikan path dengan lokasi file koneksi

            if (!$db) {
                die("Koneksi database gagal: " . mysqli_connect_error());
            }

            // Query untuk mengambil data buku
            $sql = "SELECT * FROM tbbuku ORDER BY idbuku DESC";
            $q_tampil_buku = mysqli_query($db, $sql);

            // Cek apakah query berhasil dieksekusi
            if (!$q_tampil_buku) {
                die("Query gagal: " . mysqli_error($db));
            }

            // Cek apakah ada data di tabel
            if (mysqli_num_rows($q_tampil_buku) > 0) {
                $nomor = 1;
                while ($r_tampil_buku = mysqli_fetch_array($q_tampil_buku)) {
            ?>
                    <tr>
                        <td><?php echo $nomor++; ?></td>
                        <td><?php echo $r_tampil_buku['idbuku']; ?></td>
                        <td><?php echo $r_tampil_buku['judulbuku']; ?></td>
                        <td><?php echo $r_tampil_buku['kategori']; ?></td>
                        <td><?php echo $r_tampil_buku['pengarang']; ?></td>
                        <td><?php echo $r_tampil_buku['penerbit']; ?></td>
                        <td><?php echo $r_tampil_buku['status']; ?></td>
                    </tr>
            <?php
                }
            } else {
                echo "<tr><td colspan='7' style='text-align:center;'>Data tidak ditemukan</td></tr>";
            }
            ?>
        </table>
    </div>
</body>

</html>