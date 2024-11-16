<?php
$file = 'jurnal_data.txt';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $tanggal = $_POST['tanggal'];
    $deskripsi = $_POST['deskripsi'];

    if (file_exists($file)) {
        $lines = file($file, FILE_IGNORE_NEW_LINES); // Ambil semua baris tanpa baris kosong
        $updated_lines = [];

        foreach ($lines as $line) {
            list($saved_tanggal, $saved_deskripsi) = explode('|', $line);

            // Jika tanggal dan deskripsi cocok, jangan tambahkan ke array
            if ($saved_tanggal === $tanggal && $saved_deskripsi === $deskripsi) {
                continue;
            }

            $updated_lines[] = $line; // Tambahkan baris yang valid ke array baru
        }

        // Pastikan file tidak menyimpan baris kosong setelah penghapusan
        if (!empty($updated_lines)) {
            file_put_contents($file, implode(PHP_EOL, $updated_lines) . PHP_EOL);
        } else {
            // Jika semua entri dihapus, kosongkan file
            file_put_contents($file, '');
        }

        echo json_encode(["status" => "success", "message" => "Data berhasil dihapus"]);
    } else {
        echo json_encode(["status" => "error", "message" => "File tidak ditemukan"]);
    }
} else {
    echo json_encode(["status" => "error", "message" => "Permintaan tidak valid"]);
}
?>
