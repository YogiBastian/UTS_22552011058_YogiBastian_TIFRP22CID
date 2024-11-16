<?php
// Baca data dari file users.txt
$file = "users.txt";
$data = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

// Konversi data ke format JSON
$users = [];
foreach ($data as $line) {
    list($fullname, $email_or_phone, $password) = explode('|', $line);
    $users[] = [
        'fullname' => $fullname,
        'email_or_phone' => $email_or_phone,
        'password' => $password
    ];
}

// Kembalikan data sebagai JSON
header('Content-Type: application/json');
echo json_encode($users);
?>
