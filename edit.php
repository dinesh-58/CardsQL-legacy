<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
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
    <h5>Select </h5>
    <?php 
        // $sql = "SELECT TABLE_NAME FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_TYPE = 'BASE TABLE' AND TABLE_SCHEMA='cardsql'";
    ?>
</body>
</html>

