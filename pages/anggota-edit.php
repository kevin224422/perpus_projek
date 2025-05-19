<?php
include 'koneksi.php';
$id_anggota = $_GET['id'];
$q_tampil_anggota = mysqli_query($db, "SELECT * FROM tbanggota WHERE idanggota='$id_anggota'");
$r_tampil_anggota = mysqli_fetch_array($q_tampil_anggota);
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Anggota</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center p-6">
    <div class="container mx-auto bg-white shadow-lg rounded-lg p-6 w-full max-w-lg">
        <h3 class="text-2xl font-bold text-gray-800 mb-4 text-center">Edit Data Anggota</h3>
        <form action="proses/anggota-edit-proses.php" method="post">
            <div class="mb-4">
                <label class="block text-gray-700">ID Anggota</label>
                <input type="text" name="id_anggota" value="<?php echo $r_tampil_anggota['idanggota']; ?>" class="w-full p-2 border rounded bg-gray-200" readonly>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Nama</label>
                <input type="text" name="nama" value="<?php echo $r_tampil_anggota['nama']; ?>" class="w-full p-2 border rounded">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Jenis Kelamin</label>
                <input type="text" name="jenis_kelamin" value="<?php echo $r_tampil_anggota['jeniskelamin']; ?>" class="w-full p-2 border rounded">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Alamat</label>
                <textarea name="alamat" rows="2" class="w-full p-2 border rounded"><?php echo $r_tampil_anggota['alamat']; ?></textarea>
            </div>
            <div class="flex justify-end">
                <input type="submit" name="simpan" value="Simpan" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600 cursor-pointer">
            </div>
        </form>
    </div>
</body>
</html>
