<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Buku</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
</head>
<body class="bg-gradient-to-br from-blue-100 to-gray-200 min-h-screen flex flex-col">
    <div class="container mx-auto p-6">
        <!-- Header -->
        <div class="bg-white shadow-lg rounded-lg p-6 flex flex-col items-center">
            <h3 class="text-3xl font-extrabold text-gray-800 mb-4 flex items-center">
                📚 Data Buku
            </h3>
        </div>

        <div class="bg-white shadow-lg rounded-lg p-6 mt-6">
            <!-- Tombol Tambah -->
            <div class="mb-6 text-right">
                <a href="index.php?p=buku-input" class="px-5 py-2 flex items-center gap-2 bg-green-500 text-white font-semibold rounded-lg shadow-md hover:bg-green-600 transition duration-300">
                    <i class="ph ph-book-plus"></i> Tambah Buku
                </a>
            </div>

            <!-- Tabel -->
            <div class="overflow-x-auto">
                <table class="w-full border-collapse shadow-md rounded-lg overflow-hidden">
                    <thead>
                        <tr class="bg-blue-700 text-white">
                            <th class="border p-3">No</th>
                            <th class="border p-3">ID Buku</th>
                            <th class="border p-3">Judul Buku</th>
                            <th class="border p-3">Kategori</th>
                            <th class="border p-3">Pengarang</th>
                            <th class="border p-3">Penerbit</th>
                            <th class="border p-3">Status</th>
                            <th class="border p-3">Opsi</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        <?php
                        include 'koneksi.php';
                        $sql="SELECT * FROM tbbuku ORDER BY idbuku DESC";
                        $q_tampil_buku = mysqli_query($db, $sql);
                        $nomor=1;
                        while($r_tampil_buku=mysqli_fetch_array($q_tampil_buku)){
                        ?>
                        <tr class="hover:bg-gray-100 transition duration-200">
                            <td class="border p-3 text-center font-medium text-gray-700"><?php echo $nomor++; ?></td>
                            <td class="border p-3 text-center text-gray-600"><?php echo $r_tampil_buku['idbuku']; ?></td>
                            <td class="border p-3 text-center text-gray-600"><?php echo $r_tampil_buku['judulbuku']; ?></td>
                            <td class="border p-3 text-center text-gray-600"><?php echo $r_tampil_buku['kategori']; ?></td>
                            <td class="border p-3 text-center text-gray-600"><?php echo $r_tampil_buku['pengarang']; ?></td>
                            <td class="border p-3 text-center text-gray-600"><?php echo $r_tampil_buku['penerbit']; ?></td>
                            <td class="border p-3 text-center text-gray-600"><?php echo $r_tampil_buku['status']; ?></td>
                            <td class="border p-3 text-center flex justify-center gap-2">
                                <a href="index.php?p=buku-edit&id=<?php echo $r_tampil_buku['idbuku']; ?>" class="px-4 py-1 bg-yellow-500 text-white font-semibold rounded-lg shadow-md hover:bg-yellow-600 transition duration-300 flex items-center">
                                    <i class="ph ph-pencil mr-1"></i> Edit
                                </a>
                                <a href="proses/buku-hapus.php?id=<?php echo $r_tampil_buku['idbuku']; ?>" class="px-4 py-1 bg-red-500 text-white font-semibold rounded-lg shadow-md hover:bg-red-600 transition duration-300 flex items-center">
                                    <i class="ph ph-trash mr-1"></i> Hapus
                                </a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Footer -->
        <footer class="bg-blue-700 text-white text-center p-4 mt-6 rounded-lg shadow-lg">
            <h3>📖 Sistem Informasi Perpustakaan (SIPUS) | Praktikum</h3>
        </footer>
    </div>
</body>
</html>
