<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="./stylesheet.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playwrite+CU:wght@100..400&display=swap" rel="stylesheet">
</head>

<body>
    <div id="box1" class="library-box">
        <marquee>Braids of grain spin wildly; a room with no walls is collecting, pooling in the mirror. A spigot becomes available.</marquee>
        <form action="/upload_file.php" method="post" enctype="multipart/form-data" class="flex-container" onsubmit="return checkSize(this)">
            <input type="file" name="fileToUpload" required>
            <input type="hidden" name="box" value="box1">
            <input style="width: 100px" type="submit">
        </form>
        <?php 
            $dir = 'file-storage/box1'; //define the directory name
            $file = null; // initialize file variable, this is like creating an empty container for our file
            $files = glob($dir . '/*'); // get every file in the directory (there should only be one)
            if ($files) {
                $file = basename($files[0]); // get the first item in the "files" variable. the basename() function gets ONLY the filename, excluding the rest of the filepath        
            }

            if ($file) {
                echo "<p>file in box1: $file</p>";
            } else {
                echo "<p>empty</p>";
            }

            
        ?>

    </div>
</body>

<script>
function checkSize(form) {
    const f = form.fileToUpload.files[0];
    if (!f) return true;
    const MAX = 25 * 1024 * 1024; // 25 MB
    if (f.size > MAX) {
        alert("File too large (max 25 MB).");
        return false; // stop submission
    }
    return true;
}
</script>