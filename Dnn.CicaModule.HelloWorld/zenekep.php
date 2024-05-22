<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['fileInput'])) {
    $file = $_FILES['fileInput'];
    $fileName = $file['name'];
    $fileTmpName = $file['tmp_name'];
    $fileError = $file['error'];

    if ($fileError === UPLOAD_ERR_OK) {
        // Az útvonal, ahol a képet el kell menteni
        $uploadDir = '/portals/0/Images/Modul/Modul_kepek';
        $uploadPath = $uploadDir . $fileName;

        // A kép áthelyezése a megfelelő helyre
        if (move_uploaded_file($fileTmpName, $uploadPath)) {
            echo "A kép sikeresen feltöltve: " . $uploadPath;
        } else {
            echo "Hiba történt a kép feltöltése során.";
        }
    } else {
        echo "Hiba történt a kép feltöltése során.";
    }
} else {
    echo "A kép feltöltése POST kérés útján történhet meg.";
}
?>