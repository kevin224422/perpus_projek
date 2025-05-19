<?php
    $id_transaksi = $_GET['id'];
    $q_tampil_transaksi = mysqli_query($db, "SELECT * FROM tbtransaksi WHERE idtransaksi='$id_transaksi'");
    $r_tampil_transaksi = mysqli_fetch_array($q_tampil_transaksi);

    $sql_anggota = "SELECT * FROM tbanggota ORDER BY idanggota DESC";
    $q_tampil_anggota = mysqli_query($db, $sql_anggota);

    $sql_buku = "SELECT * FROM tbbuku ORDER BY idbuku DESC";
    $q_tampil_buku = mysqli_query($db, $sql_buku);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Transaksi</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-r from-gray-100 to-gray-200 min-h-screen flex items-center justify-center p-6">
    <div class="container mx-auto bg-white shadow-2xl rounded-lg p-6 w-full max-w-3xl">
        <h3 class="text-3xl font-extrabold text-gray-800 mb-6 text-center">✏️ Edit Data Transaksi</h3>
        <form action="proses/transaksi-edit-proses.php" method="post">
            <div class="mb-4">
                <label class="block text-gray-700 font-semibold">ID Transaksi</label>
                <input type="text" name="id_transaksi" value="<?php echo $r_tampil_transaksi['idtransaksi']; ?>" 
                    readonly class="w-full p-2 border rounded-lg bg-gray-200 text-gray-600">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 font-semibold">ID Anggota</label>
                <select name="id_anggota" class="w-full p-2 border rounded-lg">
                    <?php while ($r_tampil_anggota = mysqli_fetch_array($q_tampil_anggota)): ?>
                        <option value="<?= $r_tampil_anggota['idanggota']; ?>"
                            <?php if ($r_tampil_anggota['idanggota'] == $r_tampil_transaksi['idanggota']) echo "selected"; ?>>
                            <?= $r_tampil_anggota['idanggota']; ?>
                        </option>
                    <?php endwhile; ?>
                </select>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 font-semibold">ID Buku</label>
                <select name="id_buku" class="w-full p-2 border rounded-lg">
                    <?php while ($r_tampil_buku = mysqli_fetch_array($q_tampil_buku)): ?>
                        <option value="<?= $r_tampil_buku['idbuku']; ?>"
                            <?php if ($r_tampil_buku['idbuku'] == $r_tampil_transaksi['idbuku']) echo "selected"; ?>>
                            <?= $r_tampil_buku['idbuku']; ?>
                        </option>
                    <?php endwhile; ?>
                </select>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 font-semibold">Tanggal Pinjam</label>
                <input type="date" name="tanggal_pinjam" value="<?php echo $r_tampil_transaksi['tglpinjam']; ?>" 
                    class="w-full p-2 border rounded-lg">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 font-semibold">Tanggal Kembali</label>
                <input type="date" name="tanggal_kembali" value="<?php echo $r_tampil_transaksi['tglkembali']; ?>" 
                    class="w-full p-2 border rounded-lg">
            </div>
            <div class="text-center">
                <button type="submit" name="simpan" class="px-6 py-2 bg-blue-500 text-white font-semibold rounded-lg shadow-md hover:bg-blue-600 transition duration-300">
                    Simpan
                </button>
            </div>
        </form>
    </div>
</body>
</html>
