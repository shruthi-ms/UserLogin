<?php
    require_once('functions/functions.php');

    if(@$_POST["insert_user"])
    {
        $name = $_POST["name"];
        $username = $_POST["username"];
        $password = $_POST["password"];
        $res = $functions->insert_student($s_id,$name,$grade ,$phone,$email, $coll_id,$password);
    }
?>



<html>
<head>
    <link href="https://fonts.googleapis.com/css?family=Oleo+Script:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans" rel="stylesheet">
    <style type="text/css">
        .a {
            color: black;
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
    background-color: #00109E;
    border: none;
    color: black;
    padding: 16px 32px;
    text-decoration: none;
    margin: 4px 2px;
    cursor: pointer;
    border-radius: 15px;
    color: white;
    font-size: 18px;
    font-family: 'Fira Sans', sans-serif;
}
    </style>
</head>
<body background="http://cisoncology.org/images/blue-gradient-background.jpg" id="c">
    <center>
        Succesfully Logged In
    </center>
    </body>
</html>