<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data Buku</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-r from-blue-100 to-blue-200 min-h-screen flex items-center justify-center p-6">
    <div class="container mx-auto bg-white shadow-2xl rounded-lg p-6 w-full max-w-5xl">
        <h3 class="text-3xl font-bold text-blue-700 mb-6 text-center">📚 Input Data Buku</h3>
        <form action="proses/buku-input-proses.php" method="post" class="space-y-4">
            <div>
                <label class="block text-gray-700 font-semibold">ID Buku</label>
                <input type="text" name="id_buku" class="w-full p-3 border rounded-lg shadow-sm">
            </div>
            <div>
                <label class="block text-gray-700 font-semibold">Judul Buku</label>
                <input type="text" name="judul_buku" class="w-full p-3 border rounded-lg shadow-sm">
            </div>
            <div>
                <label class="block text-gray-700 font-semibold">Kategori</label>
                <input type="text" name="kategori" class="w-full p-3 border rounded-lg shadow-sm">
            </div>
            <div>
                <label class="block text-gray-700 font-semibold">Pengarang</label>
                <input type="text" name="pengarang" class="w-full p-3 border rounded-lg shadow-sm">
            </div>
            <div>
                <label class="block text-gray-700 font-semibold">Penerbit</label>
                <input type="text" name="penerbit" class="w-full p-3 border rounded-lg shadow-sm">
            </div>
            <div>
                <label class="block text-gray-700 font-semibold">Status</label>
                <select name="status" class="w-full p-3 border rounded-lg shadow-sm">
                    <option value="Tersedia">Tersedia</option>
                    <option value="Dipinjam">Dipinjam</option>
                </select>
            </div>
            <div class="text-center">
                <input type="submit" name="simpan" value="💾 Simpan" class="px-6 py-2 bg-blue-600 text-white font-semibold rounded-lg shadow-md hover:bg-blue-700 transition cursor-pointer">
            </div>
        </form>
    </div>
</body>
</html>
