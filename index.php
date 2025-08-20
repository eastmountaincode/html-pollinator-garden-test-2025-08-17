<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="./stylesheet.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playwrite+CU:wght@100..400&display=swap" rel="stylesheet">
</head>

<body>
    <div id="box1" class="library-box">
        <h1>Braids of grain spin wildly; a room with no walls is collecting, pooling in the mirror. A spigot becomes available.</h1>
        <form action="/upload_file.php" method="post" enctype="multipart/form-data" class="flex-container">
            <input type="file" name="fileToUpload">
            <input type="hidden" name="box" value="box">
            <input style="width: 100px" type="submit">
        </form>
        <?php 
            $dir = 'file-storage/box1';
            echo "<p>dirname: $dir<p>";
        ?>

    </div>
</body>