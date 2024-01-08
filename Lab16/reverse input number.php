<!DOCTYPE html>
<html>
<head>
   <title>Reverse a number</title>
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
    <form method='POST'>
        <h1>Please input a number :</h1>
        <input type="text" name="num" value="<?php echo $_POST['num']??''; ?>">
        <input type="submit" value="Submit">
    </form>
    <?php
        $number = $_POST['num'];
        $num =$number;
       $rev=0;
       while(floor($number))
       {
        $mod = $number % 10;
        $rev = $rev *10 + $mod;
        $number=$number/10;
       }
       echo " <br> <h1> Reverse of $num is $rev <h1>";
    ?>
</body>
</html>
