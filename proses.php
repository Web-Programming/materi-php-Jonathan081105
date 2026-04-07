<?php


$nama = '';
$email = '';
$pesan = '';
$postErrors = [];
$postSuccess = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = trim($_POST['nama'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $pesan = trim($_POST['pesan'] ?? '');

    // Validasi sederhana
    if ($nama === '') {
        $postErrors[] = 'Nama wajib diisi.';
    }

    if ($email === '') {
        $postErrors[] = 'Email wajib diisi.';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $postErrors[] = 'Format email tidak valid.';
    }

    if ($pesan === '') {
        $postErrors[] = 'Pesan wajib diisi.';
    }

    if (empty($postErrors)) {
        $postSuccess = true;
    }
}
?>