<!--
* * * * Write a program to check if a number is a palindrome or * * * *
* * * * not * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
-->
<?php

    function checkPalindrome($n){
        $num=$n;
        $sum = 0;

        while(floor($num)) {
            $remainder = $num % 10;
            $sum = $sum * 10 + $remainder;
            $num = $num / 10;
        }

        return $sum;
    }
    if(isset($_POST[''])) {
        $getNum = $_POST['number'];
        $output = checkPalindrome($getNum);

        if($getNum==$output) {
            echo ''.$getNum.' is a palindrome number';
        } else {
            echo 'This is not a palindrome number!';
        }
    } else {
        echo 'No inputted number!';
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP | Palindrome</title>
</head>

<style>
    input {
        border: 1px solid #313131;
        padding: 5px;
        width: 150px;
        margin: 10px 0 10px 0;
    }
</style>
<body>
<!--input a number and write a php code that will check the inputed number if it is a palindrome or not-->
    <form action="" method="post">
        <label for="number"> Enter a Number: <br>
        <input type="text" name="number" id="" required/> <br>
        <button type="submit">Check Number</button>
    </form>
</body>
</html>