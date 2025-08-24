<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="./stylesheet.css">
</head>

<body>
    <div style="text-align: center" class="main-header">
        <h2 class='header-desktop'>✿ ❀ ❁ ❃ ❋ HTML Pollinator Garden ✿ ❀ ❁ ❃ ❋</h2>
        <h2 class='header-mobile'>✿ ❀ ❁ ❃ ❋ <br>HTML Pollinator Garden <br>✿ ❀ ❁ ❃ ❋</h2>

    </div>
    <!-- BOX 1 -->
    <div id="box1" class="library-box">
        <?php 
            $dir = 'file-storage/box1'; //define the directory name
            $file = null; // initialize file variable, this is like creating an empty container for our file
            $disabledUploadBoxFull1 = "";
            $disabledDownloadBoxEmpty1 = "disabled";
            $files = glob($dir . '/*'); // get every file in the directory (there should only be one)
            if ($files) {
                $file = basename($files[0]); // get the first item in the "files" variable. the basename() function gets ONLY the filename, excluding the rest of the filepath   
                if ($file) {
                    $disabledUploadBoxFull1 = "disabled";  // file already exists, don't allow upload
                    $disabledDownloadBoxEmpty1 = ""; // there is a file, allow download
                }   
                else {
                    $disabledUploadBoxFull1 = ""; // no file, allow upload
                    $disabledDownloadBoxEmpty1 = "disabled"; // no file, don't allow download
                }     
            }
        ?>
        <marquee class="marquee-header" scrollamount="4">Braids of grain spin wildly; a room with no walls is collecting, pooling in the mirror. A spigot becomes available.</marquee>
        <form class='library-form' action="/upload_file.php" method="post" enctype="multipart/form-data" onsubmit="return checkSize(this)">
            <input id="fileInput1" type="file" name="fileToUpload" required onchange="toggleButton(this, 'submitBtn1')" <?php echo $disabledUploadBoxFull1; ?>>
            <br>
            <input type="hidden" name="box" value="box1">
            <input style="margin-top: 5px" id="submitBtn1" type="submit" value="Offer" disabled <?php echo $disabledUploadBoxFull1; ?>>
        </form>

        <?php if ($file): ?>
            <form action="download_file.php" method="get" target="_blank" onsubmit="setTimeout(()=>location.reload(), 2000)">
                <input type="hidden" name="box" value="box1">
                <button style="margin-top: 5px" class='receive-button' type="submit">Receive</button>
            </form>
        <?php else: ?>
            <button style="margin-top: 5px" class='receive-button' type="button" disabled>Receive</button>
        <?php endif; ?>

        <?php
            if ($file) {
                echo "<p class='boxFullIndicator'>file in box1: $file</p>";
            } else {
                echo "<p class='boxFullIndicator'>box1: empty</p>";
            }
        ?>
        

    </div>
    <!-- BOX 2 -->
    <div id="box2" class="library-box library-box-not-top">
        <?php 
            $dir = 'file-storage/box2';
            $file = null;
            $disabledUploadBoxFull2 = "";
            $disabledDownloadBoxEmpty2 = "disabled";
            $files = glob($dir . '/*'); 
            if ($files) {
                $file = basename($files[0]);   
                if ($file) {
                    $disabledUploadBoxFull2 = "disabled";  // file already exists
                    $disabledDownloadBoxEmpty2 = "";

                }   
                else {
                    $disabledUploadBoxFull2 = "";
                    $disabledDownloadBoxEmpty2 = "disabled";
                }
            }
        ?>
        <marquee class="marquee-header" scrollamount="6">Which part comes first?</marquee>
        <form class='library-form' action="/upload_file.php" method="post" enctype="multipart/form-data" class="" onsubmit="return checkSize(this)">
            <input type="file" name="fileToUpload" required onchange="toggleButton(this, 'submitBtn2')" <?php echo $disabledUploadBoxFull2; ?>>
            <br>
            <input type="hidden" name="box" value="box2">
            <input style="margin-top: 5px" id="submitBtn2" type="submit" value="Offer" disabled <?php echo $disabledUploadBoxFull2; ?>>
        </form>
        <?php if ($file): ?>
            <form action="download_file.php" method="get" target="_blank" onsubmit="setTimeout(()=>location.reload(), 2000)">
                <input type="hidden" name="box" value="box2">
                <button style="margin-top: 5px" class='receive-button' type="submit">Receive</button>
            </form>
        <?php else: ?>
            <button style="margin-top: 5px" class='receive-button' type="button" disabled>Receive</button>
        <?php endif; ?>
        <?php
        if ($file) {
                echo "<p class='boxFullIndicator'>file in box2: $file</p>";

            } else {
                echo "<p class='boxFullIndicator'>box2: empty</p>";
            }
        ?>
        

    </div>

    <!-- BOX 3 -->
    <div id="box3" class="library-box library-box-not-top">
        <?php 
            $dir = 'file-storage/box3';
            $file = null;
            $disabledUploadBoxFull3 = "";
            $disabledDownloadBoxEmpty3 = "disabled";
            $files = glob($dir . '/*'); 
            if ($files) {
                $file = basename($files[0]);   
                if ($file) {
                    $disabledUploadBoxFull3 = "disabled";  // file already exists
                    $disabledDownloadBoxEmpty3 = "";

                }   
                else {
                    $disabledUploadBoxFull3 = "";
                    $disabledDownloadBoxEmpty3 = "disabled";
                }
            }
        ?>
        <marquee class="marquee-header" scrollamount="2">Fallow does the night</marquee>
        <form class='library-form' action="/upload_file.php" method="post" enctype="multipart/form-data" class="" onsubmit="return checkSize(this)">
            <input type="file" name="fileToUpload" required onchange="toggleButton(this, 'submitBtn2')" <?php echo $disabledUploadBoxFull3; ?>>
            <br>
            <input type="hidden" name="box" value="box3">
            <input style="margin-top: 5px" id="submitBtn2" type="submit" value="Offer" disabled <?php echo $disabledUploadBoxFull3; ?>>
        </form>
        <?php if ($file): ?>
            <form action="download_file.php" method="get" target="_blank" onsubmit="setTimeout(()=>location.reload(), 2000)">
                <input type="hidden" name="box" value="box3">
                <button style="margin-top: 5px" class='receive-button' type="submit">Receive</button>
            </form>
        <?php else: ?>
            <button style="margin-top: 5px" class='receive-button' type="button" disabled>Receive</button>
        <?php endif; ?>
        <?php
        if ($file) {
                echo "<p class='boxFullIndicator'>file in box3: $file</p>";

            } else {
                echo "<p class='boxFullIndicator'>box3: empty</p>";
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

    function toggleButton(fileInput, buttonId) {
        const button = document.getElementById(buttonId);
        button.disabled = fileInput.files.length === 0;
    }
</script>