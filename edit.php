<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Mono:wght@400;700&display=swap" rel="stylesheet">

    <?php 
        // forces browser to load new css file when it has been changed.
        // for testing purposes. only works on dev computer. 
        $filename = 'styles.css';
        $filemodified = substr(md5(filemtime($filename)), 0,6);
    ?>
    <link rel="stylesheet" href="<?php echo $filename;?>?v=<?php echo $filemodified;?>">
    <title>Edit cards</title>
</head>
<body>
    
    <?php
        readfile('header.html');
        require('connect.php');
        if (isset($_POST['reset-all'])) {
            $sql = "UPDATE `test` SET `last reviewed`='1970-1-1',`response`='0',`next review`=CURRENT_DATE WHERE 1";
            $result=mysqli_query($con, $sql);
            if (!$result) echo "<h3> Warning: SQL fail";
        }
    ?>
    <form action="" method="post">
        <button name="reset-all" value="reset-all">Reset review dates for all cards</button>
    </form>
    <!-- <h5>Select </h5> -->
    <?php 
        // $sql = "SELECT TABLE_NAME FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_TYPE = 'BASE TABLE' AND TABLE_SCHEMA='cardsql'";
    ?>
</body>
</html>

