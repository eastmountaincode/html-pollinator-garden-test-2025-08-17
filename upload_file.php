<?php
$target_box = $_POST["box"];
$target_dir = "/file-storage/$target_box/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$max_size_mb = 25 * 1024 * 1024; // 1 kilobtypes (KB) = 1024 bytes, and 1 megabyte (MB) = 1024 kilobytes (KB)

// try to upload the file - if it succeeds, go to index.php, effectively refreshing the page
if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    header("Location: /index.php");
    exit();
} else {
    echo "Sorry, there was an error uploading your file.";
}
  

?>