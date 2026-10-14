<?php
// auth.php
session_start();

// Memastikan user sudah login
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

// Helper untuk mengecek apakah user yang sedang login adalah admin
function is_admin() {
    return isset($_SESSION['role']) && $_SESSION['role'] === 'admin';
}

// Helper untuk memproteksi halaman agar HANYA bisa diakses oleh admin
function require_admin() {
    if (!is_admin()) {
        http_response_code(403);
        echo "<h2 style='color:red;'>403 Forbidden</h2>";
        echo "<p>Anda tidak memiliki hak akses (role) untuk membuka halaman ini.</p>";
        echo "<a href='index.php'>Kembali ke Dashboard</a>";
        exit;
    }
}
?>
