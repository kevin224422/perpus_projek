<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data Transaksi</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-r from-blue-400 to-purple-500 min-h-screen flex items-center justify-center p-6">
    <div class="container mx-auto bg-white shadow-2xl rounded-xl p-8 w-full max-w-4xl transform transition duration-500 hover:scale-105">
        <h3 class="text-3xl font-extrabold text-purple-700 mb-6 text-center">📝 Input Data Transaksi</h3>
        <form action="#" method="post" class="space-y-6">
            <div>
                <label class="block text-gray-800 font-semibold">📌 ID Transaksi</label>
                <input type="text" name="id_transaksi" class="w-full p-3 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-purple-500">
            </div>
            <div>
                <label class="block text-gray-800 font-semibold">👤 ID Anggota</label>
                <select name="id_anggota" class="w-full p-3 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-purple-500">
                    <option value="AG001">AG001</option>
                    <option value="AG002">AG002</option>
                </select>
            </div>
            <div>
                <label class="block text-gray-800 font-semibold">📚 ID Buku</label>
                <select name="id_buku" class="w-full p-3 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-purple-500">
                    <option value="BK001">BK001</option>
                    <option value="BK002">BK002</option>
                </select>
            </div>
            <div>
                <label class="block text-gray-800 font-semibold">📅 Tanggal Pinjam</label>
                <input type="date" name="tanggal_pinjam" class="w-full p-3 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-purple-500">
            </div>
            <div>
                <label class="block text-gray-800 font-semibold">📆 Tanggal Kembali</label>
                <input type="date" name="tanggal_kembali" class="w-full p-3 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-purple-500">
            </div>
            <div class="text-center">
                <button type="submit" name="simpan" class="px-6 py-3 bg-purple-600 text-white font-semibold rounded-lg shadow-lg hover:bg-purple-700 transition-transform transform hover:scale-110">💾 Simpan</button>
            </div>
        </form>
    </div>
</body>
</html>
