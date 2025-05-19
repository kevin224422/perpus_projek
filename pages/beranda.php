<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-r from-gray-100 to-gray-200 min-h-screen flex items-center justify-center p-6">
    <div class="container mx-auto bg-white shadow-2xl rounded-lg p-6 w-full max-w-6xl text-center">
        <h3 class="text-3xl font-extrabold text-gray-800 mb-6">🏛️ Beranda Perpustakaan</h3>
        <div class="bg-blue-700 text-white p-6 rounded-lg shadow-lg">
            <h1 class="text-4xl font-extrabold">SELAMAT DATANG DI SISTEM INFORMASI PERPUSTAKAAN</h1>
        </div>
        <div class="mt-6">
            <h2 class="text-2xl italic text-gray-700">"📖 Membaca adalah jendela dunia"</h2>
        </div>
        <div class="mt-8 flex justify-center space-x-4">
            <a href="index.php?p=anggota" class="px-6 py-3 bg-blue-500 text-white font-semibold rounded-lg shadow-md hover:bg-blue-600 transition duration-300">Data Anggota</a>
            <a href="index.php?p=buku" class="px-6 py-3 bg-green-500 text-white font-semibold rounded-lg shadow-md hover:bg-green-600 transition duration-300">Data Buku</a>
            <a href="index.php?p=transaksi" class="px-6 py-3 bg-yellow-500 text-white font-semibold rounded-lg shadow-md hover:bg-yellow-600 transition duration-300">Data Transaksi</a>
        </div>
    </div>
</body>
</html>
