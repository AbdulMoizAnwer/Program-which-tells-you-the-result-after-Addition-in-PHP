<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program of Checking the Number after Addition</title>
</head>
<body>
    <h1>Write a program to tell if the number after addition is greater than 100, less than 100 or more than 200</h1>
    <form action="#" method="POST">
        <label>Enter your First Number</label>
        <input type="text" name="n1">
        <label>Enter your Second Number</label>
        <input type="text" name="n2">
        <input type="submit" name="submit">
    </form>
</body>
</html>

<?php
if(isset($_POST['submit'])){
    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    $result = $n1 + $n2;
    if($result > 200)
        echo "The sum of numbers which is " . $result . " is more than 200.";
    else if($result == 200)
        echo "The sum of numbers which is " . $result . " is equal to 200.";
    else if($result > 100)
        echo "The sum of numbers which is " . $result . " is greater than 100.";
    else if($result == 100)
        echo "The sum of numbers which is " . $result . " is equal to 100.";
    else if($result < 100)
        echo "The sum of numbers which is " . $result . " is less than 100.";
    }
?>
