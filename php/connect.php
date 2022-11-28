<?php
    $server = "localhost";
    $user = "root";
    $password = "";
    $db="cardsql";
    $con = mysqli_connect($server,$user,$password,$db);

    if($con) echo ('Connection success');
    else echo "Connection error";
?>