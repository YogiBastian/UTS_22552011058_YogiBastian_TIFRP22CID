<?php
$file = 'forum_data.txt';

if (file_exists($file)) {
    $lines = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $entries = [];

    foreach ($lines as $line) {
        list($judul, $konten) = explode('|', $line);
        $entries[] = [
            'judul' => $judul,
            'konten' => $konten,
        ];
    }

    echo json_encode($entries);
} else {
    echo json_encode([]);
}
?>
