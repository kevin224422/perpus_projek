<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data Anggota</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-r from-gray-100 to-gray-200 min-h-screen flex items-center justify-center p-6">
    <div class="container mx-auto bg-white shadow-2xl rounded-lg p-6 w-full max-w-5xl">
        <h3 class="text-3xl font-extrabold text-blue-700 mb-6 text-center">🧑‍🤝‍🧑 Input Data Anggota</h3>
        
        <div class="mt-8 p-6 bg-gray-100 rounded-lg shadow-md">
            <form action="proses/anggota-input-proses.php" method="post" class="space-y-4">
                <div>
                    <label class="block text-gray-700 font-semibold">ID Anggota</label>
                    <input type="text" name="id_anggota" class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400 shadow-sm">
                </div>
                <div>
                    <label class="block text-gray-700 font-semibold">Nama</label>
                    <input type="text" name="nama" class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400 shadow-sm">
                </div>
                <div>
                    <label class="block text-gray-700 font-semibold">Jenis Kelamin</label>
                    <div class="flex gap-6 mt-2">
                        <label class="inline-flex items-center cursor-pointer">
                            <input type="radio" name="jenis_kelamin" value="Pria" class="form-radio text-blue-500">
                            <span class="ml-2 text-gray-700">Pria</span>
                        </label>
                        <label class="inline-flex items-center cursor-pointer">
                            <input type="radio" name="jenis_kelamin" value="Wanita" class="form-radio text-pink-500">
                            <span class="ml-2 text-gray-700">Wanita</span>
                        </label>
                    </div>
                </div>
                <div>
                    <label class="block text-gray-700 font-semibold">Alamat</label>
                    <textarea name="alamat" rows="3" class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400 shadow-sm"></textarea>
                </div>
                <div class="text-center">
                    <button type="submit" name="simpan" class="px-6 py-2 bg-blue-600 text-white font-semibold rounded-lg shadow-md hover:bg-blue-700 transition cursor-pointer">
                        💾 Simpan
                    </button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
