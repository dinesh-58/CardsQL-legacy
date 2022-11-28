<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CardsQL</title>
</head>
<body>
    
    <header>
        <h1>CardsQL</h1>
        <ul>
            <li><a href="#">Add</a></li>
            <li><a href="#">Review</a></li>
            <li><a href="#">Edit</a></li>
            <li><a href="http://localhost/phpmyadmin">SQL Database</a></li>
        </ul>
    </header>
    
    <main>
        <form action="../logic.php" method="post">
        <!-- <form action="../logic.php" method="post" target="hiddenframe"> -->
            <label>
                Select Subject:
                <select name="subject" id="subject">
                    <option value=""></option>
                    <option value="test">test</option>
                </select>
            </label>--or--
            <a href="#">+ New Subject</a>
            <textarea name="front" id="front" cols="30" rows="10"></textarea>
            <a href="#">&rarr;</a> <!-- this works as submit when pressing. use anchor?-->
            <textarea name="back" id="back" cols="30" rows="10"></textarea>
            <button>Submit</button>
        </form>

        <iframe name="hiddenframe" hidden></iframe> 
        <!-- janky bit of code from StackOverflow. Used in form target so that we stay on same page after submitting-->
    </main>
</body>
</html>