<?php
$target_box = $_POST["box"];
$target_dir = "file-storage/$target_box/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$max_size_mb = 25 * 1024 * 1024; // 1 kilobtypes (KB) = 1024 bytes, and 1 megabyte (MB) = 1024 kilobytes (KB)

if ($_FILES['fileToUpload']['size'] > $max_size_mb) {
    echo "File too large";
    exit();
}

if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    //echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
    header("Location: /index.php");
    exit();
} else {
    echo "Sorry, there was an error uploading your file.";
}
  

?>