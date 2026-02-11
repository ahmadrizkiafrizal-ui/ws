<?php
// Folder tempat menyimpan foto
$target_dir = "uploads/";
// Nama file unik berdasarkan waktu
$target_file = $target_dir . date("Ymd_His") . ".jpg";

if ($_FILES["imageFile"]["size"] > 0) {
    if (move_uploaded_file($_FILES["imageFile"]["tmp_name"], $target_file)) {
        echo "OK: Foto tersimpan di " . $target_file;
    } else {
        echo "Error: Gagal menyimpan file.";
    }
} else {
    echo "Error: Tidak ada data yang diterima.";
}
?>
