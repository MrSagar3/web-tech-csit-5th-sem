<!DOCTYPE html>
<html>
<head>
   <title></title>
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
    <form method='POST'>
        <h1>Please input a number :</h1>
        <input type="text" name="num" value="<?php echo $_POST['num']??''; ?>">
        <input type="submit" value="Submit">
    </form>
    <?php
        $n = $_POST['num'];
        $original =$n;
        $reversed = 0;
        while (floor($n)) {
            $remainder = $n % 10;
            $reversed = $reversed * 10 + $remainder;
            $n /= 10;
        }
        if ($original == $reversed)
           echo "<br> <h1> The given number $original is palindrome </h1> ";
        else
        echo "<br> <h1> The given number $original is not palindrome </h1> ";
    
    ?>
</body>
</html>