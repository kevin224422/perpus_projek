<?php
include 'koneksi.php';
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: pages/admin-login.php");
    exit;
}
$tgl = date('Y-m-d');
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi Perpustakaan</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-blue-100 to-gray-200 min-h-screen flex flex-col">
    <div class="container mx-auto p-6">
        
        <div class="bg-white shadow-lg rounded-lg p-6 flex flex-col items-center">
            <img src="images/logo-perpustakaan3.png" alt="Logo Perpustakaan" class="w-24 h-24 mb-3">
            <h1 class="text-3xl font-bold text-blue-700">📚 PERPUSTAKAAN UMUM</h1>
            <p class="text-gray-600 text-center">Jl. Lembah Abang No 11, Telp: (021)55555555</p>
        </div>
        <div class="flex mt-6 gap-6">
            <aside class="w-1/4 bg-white shadow-lg rounded-lg p-4">
                <h2 class="text-lg font-semibold mb-2">📌 Navigasi</h2>
                <ul class="space-y-2">
                    <li><a href="index.php?p=beranda" class="flex items-center p-3 bg-blue-500 text-white rounded hover:bg-blue-600 transition">
                        <i class="ph ph-house mr-2"></i> Beranda</a></li>
                    <li><a href="index.php?p=anggota" class="flex items-center p-3 bg-gray-200 rounded hover:bg-gray-300 transition">
                        <i class="ph ph-users mr-2"></i> Data Anggota</a></li>
                    <li><a href="index.php?p=buku" class="flex items-center p-3 bg-gray-200 rounded hover:bg-gray-300 transition">
                        <i class="ph ph-book mr-2"></i> Data Buku</a></li>
                    <li><a href="index.php?p=transaksi-peminjaman" class="flex items-center p-3 bg-gray-200 rounded hover:bg-gray-300 transition">
                        <i class="ph ph-arrows-clockwise mr-2"></i> Transaksi Peminjaman</a></li>
                </ul>
                <h2 class="text-lg font-semibold mt-4 mb-2">📄 Laporan</h2>
                <ul class="space-y-2">
                    <li><a href="cetak/laporan_anggota.php/" target="_blank" class="flex items-center p-3 bg-gray-200 rounded hover:bg-gray-300 transition">
                        <i class="ph ph-file-text mr-2"></i> Lap. Data Anggota</a></li>
                    <li><a href="cetak/laporan_buku.php" target="_blank" class="flex items-center p-3 bg-gray-200 rounded hover:bg-gray-300 transition">
                        <i class="ph ph-file-text mr-2"></i> Lap. Data Buku</a></li>
                </ul>   
            <a href="./pages/logout.php" class="mt-6">
                    <button type="submit" class="w-full p-4 rounded-xl text-center font-semibold bg-red-500 hover:bg-red-600 text-white transition duration-300">
                        🔓 Logout
                    </button>
            </a>
            </aside>     
            <main class="flex-1 bg-white shadow-lg rounded-lg p-6">
                <?php
                $pages_dir = 'pages';
                if (!empty($_GET['p'])) {
                    $pages = scandir($pages_dir, 0);
                    unset($pages[0], $pages[1]);
                    $p = $_GET['p'];
                    if (in_array($p . '.php', $pages)) {
                        include($pages_dir . '/' . $p . '.php');
                    } else {
                        echo '<p class="text-red-500 font-semibold">⚠️ Halaman Tidak Ditemukan</p>';
                    }
                } else {
                    include($pages_dir . '/beranda.php');
                }
                ?>
            </main>
        </div>
        <footer class="bg-blue-700 text-white text-center p-4 mt-6 rounded-lg shadow-lg">
            <h3>📖 Sistem Informasi Perpustakaan (SIPUS) | Praktikum</h3>
        </footer>
    </div>
</body>
</html>
