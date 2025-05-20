<?php
session_start();
if (isset($_SESSION['admin'])) {
    header("Location: ../index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-blue-100 to-blue-300 min-h-screen flex items-center justify-center font-sans">

    <div class="bg-white shadow-2xl rounded-3xl p-10 w-full max-w-md relative overflow-hidden">
        <!-- Icon & Title -->
        <div class="text-center mb-8">
            <div class="text-5xl">📚</div>
            <h2 class="text-2xl font-extrabold text-blue-700 mt-2 tracking-wide">SISTEM INFORMASI PERPUSTAKAAN</h2>
            <p class="text-sm text-gray-500 mt-1">🔐 Login Admin Panel</p>
        </div>

        <!-- Error Message -->
        <?php if (isset($_GET['error'])): ?>
            <div class="mb-4 p-3 bg-red-100 text-red-700 rounded-md border border-red-400 text-sm">
                <?php echo htmlspecialchars($_GET['error']); ?>
            </div>
        <?php endif; ?>

        <!-- Form -->
        <form action="../proses/login-admin.php" method="post" class="space-y-6">
            <div>
                <label for="iduser" class="block text-gray-700 font-medium">ID User</label>
                <input type="text" name="iduser" required placeholder="Masukkan ID"
                    class="w-full mt-1 p-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500 transition duration-300 shadow-sm">
            </div>

            <div>
                <label for="password" class="block text-gray-700 font-medium">Password</label>
                <input type="password" name="password" required placeholder="••••••••"
                    class="w-full mt-1 p-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500 transition duration-300 shadow-sm">
            </div>

            <div>
                <button type="submit"
                    class="w-full bg-blue-600 text-white font-bold py-3 rounded-xl hover:bg-blue-700 transition duration-300 transform hover:scale-105 shadow-md">
                    Masuk Sekarang
                </button>
            </div>
        </form>

        <!-- Footer -->
        <div class="mt-6 text-center text-sm text-gray-400">
            &copy; <?= date('Y') ?> Perpustakaan Umum
        </div>
    </div>

</body>
</html>
