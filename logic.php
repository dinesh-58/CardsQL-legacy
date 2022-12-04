<?php
    // $w_ prefix is used for new variables that will be written to database
    // $table = $_POST['subject'];
    // $id = 2;
    $front = $_POST['front'];
    $direction = '>'; 
    $back = $_POST['back']; 
    $next = date('Y-m-d');
    $last= date('Y-m-d');
    $response = 0;
    
    require('connect.php');
    // echo "$front + $direction + $back + $last + $response + $next";

        $sql = "INSERT INTO test ( `front`, `direction`, `back`, `last reviewed`, `response`, `next review`) VALUES ( '$front', '$direction', '$back', '$last', '$response', '$next')";
        $result=mysqli_query($con, $sql);
        if (!$result) echo "<h3> Warning: SQL fail";
?>