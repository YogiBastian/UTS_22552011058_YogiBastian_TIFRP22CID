<?php
// Mendapatkan data dari form
$fullname = $_POST['fullname'];
$email_or_phone = $_POST['email_or_phone'];
$password = $_POST['password'];

// File tempat menyimpan data
$file = "users.txt";

// Membuat string data pengguna
$data = $fullname . "|" . $email_or_phone . "|" . $password . PHP_EOL;

// Menyimpan data ke file
if (file_put_contents($file, $data, FILE_APPEND)) {
    // Jika berhasil, tampilkan alert dan arahkan ke login.html
    echo "<script>
            alert('Registrasi berhasil! Anda akan diarahkan ke halaman login.');
            window.location.href = 'login.html';
          </script>";
} else {
    // Jika gagal, tampilkan pesan kesalahan
    echo "<script>
            alert('Terjadi kesalahan saat menyimpan data. Silakan coba lagi.');
            window.location.href = 'register.html';
          </script>";
}
?>
