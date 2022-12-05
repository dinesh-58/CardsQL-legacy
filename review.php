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
        $today = date('Y-m-d');
        $sql = "SELECT * FROM `test` WHERE `next review` <= CURRENT_DATE LIMIT 1";
        $result = mysqli_query($con, $sql);
        $row = mysqli_fetch_assoc($result);

        // ! $r_ prefix is used for variables that are read from database
        $r_id = $row['id'];
        $r_front = $row['front'];
        // $r_direction = $row['direction']; 
        // commented for now. might use later if I implement more advanced features
        $r_back = $row['back']; 
        $r_next = $row['next review'];
        // $r_response = $row['response'];
        $r_last= $row['last reviewed'];
        $show = false;
    ?>
    <h4>Q: <?php echo $r_front;?></h4>
    <button onclick="showAns()" name="ans-show" class="ans-show"><h5>A: Show answer</h5></button>
    <section class="ans-sect" hidden>
        <h5>A: <?php echo $r_back;?></h5>
        <h5>How well did you remember the answer?</h5>
        <form action="" method="post">
            <!-- hidden input for id of this card? thinking we might change some other card -->
            <button name="response" value="1" class="response-option">Forgot</button>
            <button name="response" value="2" class="response-option">Forgot some parts</button>
            <button name="response" value="4" class="response-option">Remembered fully</button>
        </form>
    </section>

    <?php 
        // ! use function for this?
        if (isset($_POST['response'])) {
            $response = $_POST['response'];
            $add ='+'.$response.' day';
            $r_last = $today; 
            $r_next = date('Y-m-d', strtotime($today.$add));
            
            $sql = "UPDATE `test` SET `last reviewed`='$r_last', `response`='$response', `next review`='$r_next' WHERE `id` = '$r_id'";
            $result=mysqli_query($con, $sql);
            if (!$result) echo "<h3> Warning: SQL fail";
        }
    ?>

    
    <script>
        function showAns() {
            document.querySelector('.ans-show').style.display = 'none';
            document.querySelector('.ans-sect').style.display = 'block';
        }
    </script>

</body>
</html>