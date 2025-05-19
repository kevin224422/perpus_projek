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
<body class="bg-gradient-to-br from-green-400 to-green-700 min-h-screen flex items-center justify-center">

    <div class="bg-white p-8 rounded-xl shadow-lg w-full max-w-md">
        <h2 class="text-2xl font-bold text-center text-green-700 mb-6">🔐 Login Admin</h2>

        <?php if (isset($_GET['error'])): ?>
            <div class="mb-4 p-3 bg-red-100 text-red-700 rounded-md border border-red-400 text-sm">
                <?php echo htmlspecialchars($_GET['error']); ?>
            </div>
        <?php endif; ?>

        <form action="../proses/login-admin.php" method="post" class="space-y-5">
            <div>
                <label for="iduser" class="block text-gray-700 font-medium">ID User</label>
                <input type="text" name="iduser" required class="w-full p-3 mt-1 border rounded-md focus:outline-none focus:ring-2 focus:ring-green-500">
            </div>

            <div>
                <label for="password" class="block text-gray-700 font-medium">Password</label>
                <input type="password" name="password" required class="w-full p-3 mt-1 border rounded-md focus:outline-none focus:ring-2 focus:ring-green-500">
            </div>

            <div>
                <input type="submit" value="Login" class="w-full bg-green-600 text-white font-semibold py-3 rounded-md hover:bg-green-700 transition duration-300 cursor-pointer">
            </div>
        </form>
    </div>

</body>
</html>