<!DOCTYPE html>
<html>
<head>
   <title></title>
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
    <form method='POST'>
        <h1>Please input first number :</h1>
        <input type="text" name="num1"value="<?php echo $_POST['num1']??''; ?>">
        <h1>Please input second number :</h1>
        <input type="text" name="num2" value="<?php echo $_POST['num2']??''; ?>">
        <h1>Please input third number :</h1>
        <input type="text" name="num3" value="<?php echo $_POST['num3']??''; ?>">
        <input type="submit" value="Submit">
    </form>
    <?php
        $number1 = $_POST['num1'];
        $number2 = $_POST['num2'];
        $number3 = $_POST['num3'];
        if($number1>$number2 && $number1>$number3 )
        {
            echo "<br> <h1>The number $number1 is greatest among three number <h1>!";
        }
        else if($number2>$number1 && $number2>$number3 )
        {
            echo "<br> <h1>The number $number2 is greatest among three number <h1>!";
        }
        else
        {
            echo "<br> <h1>The number $number3 is greatest among three number <h1>!";
        }

    ?>
</body>
</html>