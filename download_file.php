<?php
$box = $_GET['box'] ?? null;
if (!$box) {
    die("No box specified.");
}

$dir = "file-storage/$box";
$files = glob("$dir/*");
if (!$files) {
    die("No file in this box.");
}

$file = $files[0];               // take the first file
$filename = basename($file);     // just the name

// tell the browser to download the file
header("Content-Type: application/octet-stream");
header("Content-Disposition: attachment; filename=\"$filename\"");
header("Content-Length: " . filesize($file));

// send the file
readfile($file);

// delete it after download
unlink($file);
