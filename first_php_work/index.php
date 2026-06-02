<!DOCTYPE html>
<?php
$cookie_name = "username";
   $cookie_value = "Samantha Clara<br>";
   
   setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); 
?>
<?php
  session_start();
  ?>
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
        <br>
        <label for ="age">Age</label>
        <input type="text" placeholder="age" name="age">
        <button type="Submit">Submit</button>
    </form>
    <?php

    echo "Hello Students<br>";

    echo "Welcome<br>";

    echo "We are learning PHP<br>";

    //Handling form submission
    $username = $_POST["username"];

    echo $username;

//Control Statements
$age=19;

if($age>=18){
  echo "Age is" . $age.".<br>That is an adult.";
}else
   echo "That is a minor";

  // $age = $_POST["age"];
   // echo $age;
//<?php
 
  if (isset($_COOKIE[$cookie_name])) {
    echo "Welcome, " . $_COOKIE["username"];
} else {
    echo "Cookie is not set";
}

$_SESSION["favcolor"] = "green";
$_SESSION["favanimal"] = "cat";
echo "This is my first session.";
//$students = ["Samantha", "Lyne", "Kalerwa", "Geofry", "Lucy", "Wangari", "Dalmas"];

//$number = 1;

//foreach ($students as $student) {
   // echo $number . ". " . $student . "<br>";
  //  $number++;b
//}

?>
    ?>
</body>
</html>