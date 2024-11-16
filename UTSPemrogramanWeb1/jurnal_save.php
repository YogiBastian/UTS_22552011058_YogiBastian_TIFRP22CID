<?php
// Nama file untuk menyimpan data
$file = 'jurnal_data.txt';

// Ambil data dari form (POST)
$tanggal = $_POST['tanggal'];
$deskripsi = $_POST['deskripsi'];

// Format data yang akan disimpan
$data = $tanggal . "|" . $deskripsi . PHP_EOL;

// Simpan data ke file
if (file_put_contents($file, $data, FILE_APPEND)) {
    echo json_encode(["status" => "success", "message" => "Data berhasil disimpan"]);
} else {
    echo json_encode(["status" => "error", "message" => "Gagal menyimpan data"]);
}
?>
