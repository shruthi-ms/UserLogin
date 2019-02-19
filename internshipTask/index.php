<?php
    require_once('functions/functions.php');
    

    if(@$_POST["login_user"])
    {
        $email = $_POST["username"];
        $password = $_POST["password"];
        $res = $functions->login_user($email,$password);
    }
?>



<html>
<head>
    <link href="https://fonts.googleapis.com/css?family=Oleo+Script:400,700" rel="stylesheet">
    <style type="text/css">
        .a {
            color: white;
            font-family: 'Oleo Script', cursive;
            font-size: 25px;
        }
        #c{
            margin-top: 10%;
            background-attachment: fixed;
            background-repeat: no-repeat;
            background-size: cover;
        }
        input[type=submit]{
    background-color: #b3b3b3;
    border: none;
    color: black;
    padding: 16px 32px;
    text-decoration: none;
    margin: 4px 2px;
    cursor: pointer;
    border-radius: 15px;
    color: white;
            font-family: 'Oleo Script', cursive;
            font-size: 18px;
}
    </style>
</head>

<body background="https://d2v9y0dukr6mq2.cloudfront.net/video/thumbnail/rN0W64K4ipau8gxv/dark-gray-background-soft-fifteen-shades-of-grey-smooth-background-with-the-addition-of-a-bit-of-noise_bvu2c-5qtg_thumbnail-full01.png" id="c">
    <center>
        <form method = "POST" action="">

            <p class="a"> 

            Username : <input type="text" name="username" id="username" required><br>
            Password:<input type="password" name="password" id="password" required><br>
        </p>
            <input type="submit" name="login_user" value="Login">
        </form>
    </center>
    </body>
</html>