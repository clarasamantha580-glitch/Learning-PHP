<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <h1>Learning PHP</h1>
    <form method="post">
        <label for="username">Username:</label>
        <input type="text" placeholder="username" name="username">
        <button type="Submit">Submit</button>
    </form>
    <?php

    echo "Hello Students<br>";

    echo "Welcome<br>";

    echo "We are learning PHP<br>";

    //Handling form submission
    $username = $_POST["username"];

    echo $username;

    
    
    
    
    //Declaring variables
   // $name ="Samantha"
    //$age=19

    ?>
</body>
</html>