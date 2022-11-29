<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php 
        // forces browser to load new css file when it has been changed.
        // for testing purposes. only works on dev computer. 
        $filename = 'styles.css';
        $filemodified = substr(md5(filemtime($filename)), 0,6);
    ?>
    <link rel="stylesheet" href="<?php echo $filename;?>?v=<?php echo $filemodified;?>">
    <title>Review cards</title>
</head>
<body>

    <?php readfile('header.html');
        // connect with DB 
        require('connect.php');
        // TODO need to find way to get cards from all tables? 
        $sql = "SELECT * FROM `test` LIMIT 1;";
        // retrieve one record/ row 
        // Optional: retrieve only if due date is <= today's date
        $result = mysqli_query($con, $sql);
        $row = mysqli_fetch_assoc($result);

        // $r_ prefix is used for variables that are read from database
        $r_id = $row['id'];
        $r_front = $row['front'];
        // $r_direction = $row['direction']; 
        // commented for now. might use later if I implement more advanced features
        $r_back = $row['back']; 
        $r_next = $row['next review'];
        // $r_response = $row['response'];
        $r_last= $row['last reviewed'];
    ?>
    <h4>Q: <?php echo $r_front;?></h4>
    <h5 class="review-ans">A: <a href="#">Show answer</a></h5>
    <!-- need to find way to show answer upon click, along with response options -->
    <!-- Use JS? -->


    <!-- wait for input -->
    <!-- send response from one of 3 buttons to db  -->
        <!-- Optional: logic to calculate next review date -->

    <!-- retrieve next record -->
        <!-- Optional: loop infinitely? or at least as long as there is record with review date <= today's date-->
</body>
</html>