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
        $number = $_POST['num'];
        if($number>0)
        {
            echo " The number $number is positive";
        }
        else 
        {
            echo " The number $number is negative";
        }

    ?>
</body>
</html>
