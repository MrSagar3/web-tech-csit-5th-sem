<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
      $num=1;
      $sum = 0;
      $count=0;
      while($count<10)
      {
       
        if($num%2==0)
        {
          $sum = $sum + $num;
          $num++;
          $count++;
        }
       else{
        $num++;
       }
      }
      echo "Sum of 1st 10 numbers is : $sum "
    ?>
</body>
</html>