<?php
$target_dir = "file-storage/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$target_box = $_POST["box"];
$uploadOk = 1;

if ($_FILES['fileToUpload']['size'] > 26214400) {
    echo "File too large";
    $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "File upload error";
  // if everything is ok, try to upload file
  } else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
      //echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
      header("Location: index.html");
      exit();
    } else {
      echo "Sorry, there was an error uploading your file.";
    }
  }

?>