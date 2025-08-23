<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="./stylesheet.css">
</head>

<body>
    <div style="text-align: center">
        <h2>HTML Pollinator Garden</h2>
    </div>
    <div id="box1" class="library-box">
        <marquee>Braids of grain spin wildly; a room with no walls is collecting, pooling in the mirror. A spigot becomes available.</marquee>
        <form action="/upload_file.php" method="post" enctype="musltipart/form-data" class="flex-container" onsubmit="return checkSize(this)">
            <input id="fileInput1" type="file" name="fileToUpload" required onchange="toggleButton(this)" <?php echo $disabledBoxFull1; ?>>
            <input type="hidden" name="box" value="box1">
            <input id="submitBtn1" style="width: 100px" type="submit" value="Upload" disabled <?php echo $disabledBoxFull1; ?>>
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
                $disabledBoxFull1 = "disabled";  // file already exists
            } else {
                echo "<p>empty</p>";
                $disabledBoxFull1 = "";          // allow upload
            }
        ?>

    </div>
    <div id="box2" class="library-box library-box-not-top">
        <marquee>Braids of grain spin wildly; a room with no walls is collecting, pooling in the mirror. A spigot becomes available.</marquee>
        <form action="/upload_file.php" method="post" enctype="musltipart/form-data" class="flex-container" onsubmit="return checkSize(this)">
            <input type="file" name="fileToUpload" required onchange="toggleButton(this)" <?php echo $disabledBoxFull2; ?>>
            <input type="hidden" name="box" value="box2">
            <input id="submitBtn" style="width: 100px" type="submit" value="Upload" disabled <?php echo $disabledBoxFull2; ?>>
        </form>
        <?php 
            $dir = 'file-storage/box2';
            $file = null;
            $files = glob($dir . '/*'); 
            if ($files) {
                $file = basename($files[0]);      
            }
            
            if ($file) {
                echo "<p>file in box2: $file</p>";
                $disabledBoxFull2 = "disabled";  // file already exists

            } else {
                echo "<p>box2: empty</p>";
                $disabledBoxFull2 = "";
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

    function toggleButton(fileInput) {
        const button = document.getElementById("submitBtn");
        button.disabled = fileInput.files.length === 0;
    }
</script>