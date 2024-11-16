<?php
// Nama file tempat data disimpan
$file = 'jurnal_data.txt';

// Periksa apakah file ada dan baca datanya
if (file_exists($file)) {
    $lines = file($file, FILE_IGNORE_NEW_LINES);
    $entries = [];

    // Proses setiap baris data
    foreach ($lines as $line) {
        list($tanggal, $deskripsi) = explode('|', $line);
        $entries[] = [
            'tanggal' => $tanggal,
            'deskripsi' => $deskripsi
        ];
    }

    // Kembalikan data sebagai JSON
    echo json_encode($entries);
} else {
    echo json_encode([]);
}
?>
