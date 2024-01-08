<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        #jpt {
            width: 100%;
            height: auto;
        }
        #login {
            background-color: azure;
            font-family: arial;
            font-size: 24px;
            height: 200px;
            width: 300px;
            justify-content: center;
            top:10%;
            
            outline: dashed 1px black;
            position: ;   
        }
        #login-form{
            margin-top: 40px;
        }
        .input {
            background-color: aqua;
            height: 30px;
            margin: 10px;
            justify-content: center;
        }
        #input{
            justify-content: center;
        }

    </style>
</head>
<body>
    <h1>This is Lab 17 !!! </h1>
    <div id="jpt">
       <div id="login">
            <form id="login-form" action="" method="post" >
            Name : <input type="text" name="name">
            Email: <input type="email" name="email"><br>
            Gender: <input type="text" name="gender">

            <br>
            <div id="input">
                <input class="input" type="submit" name="" value="Submit">
                <input class="input" type="reset">    
            </div>
                
            </form> 
        </div> 
    </div>
        
        <?php
        $name = $_POST['name'];
        $email = $_POST['email'];
        $gender = $_POST['gender'];
      
            echo "Retrieved Data are as below :";
            echo "<br>Name : $name ";
            echo "<br>Email : $email ";
            echo "<br>Gender : $gender ";

       ?>
</body>
</html>