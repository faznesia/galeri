<?php
$target_dir = "uploads";
$target_file = $target_dir . basename($_FILES["photo"]["name"]);
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

// Cek apakah file adalah gambar
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["photo"]["tmp_name"]);
    if($check === false) {
        echo "File is not an image.";
        exit;
    }
}

// Batasi jenis file yang diperbolehkan
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    exit;
}

// Pindahkan file ke folder uploads
if (move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file)) {
    echo "The file ". basename( $_FILES["photo"]["name"]). " has been uploaded.";
} else {
    echo "Sorry, there was an error uploading your file.";
}
?>
