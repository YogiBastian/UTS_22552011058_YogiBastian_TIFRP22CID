<?php
$file = 'forum_data.txt';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $judul = $_POST['judul'];
    $konten = $_POST['konten'];

    $data = $judul . "|" . $konten . PHP_EOL;

    if (file_put_contents($file, $data, FILE_APPEND)) {
        echo json_encode(["status" => "success", "message" => "Topik berhasil disimpan"]);
    } else {
        echo json_encode(["status" => "error", "message" => "Gagal menyimpan topik"]);
    }
} else {
    echo json_encode(["status" => "error", "message" => "Permintaan tidak valid"]);
}
?>
