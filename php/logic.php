<?php
    $table = $_POST['subject'];
    // $id = 2;
    $front = $_POST['front'];
    $direction = '>'; 
    $back = $_POST['back']; 
    $next = date('Y-m-d');
    $last= date('Y-m-d');
    $response = 0;
    

    echo "$front + $direction + $back + $last + $response + $next";

    
        // $sql = "INSERT INTO $table (`id`, `name`, `roll`, `address`, `gender`, `SEE`, `10+2`) VALUES ('$roll', '$name', '$roll', '$address', '$gender', '$see', '$plus2');";
        $sql = "INSERT INTO test ( `front`, `direction`, `back`, `last reviewed`, `response`, `next review`) VALUES ( '$front', '$direction', '$back', '$last', '$response', '$next')";
        if (mysqli_query($con, $sql))
            echo "\n SQL success";
        else echo "\n SQL fail";

?>