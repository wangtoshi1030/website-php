<?php

$name_r=$_POST["name10"];
$email_r=$_POST["email10"];
$date_r=$_POST["date"];




?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome-animation/0.2.1/font-awesome-animation.css">
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
    <style>
        .top{
            text-align: center;
        }

        .head{
            font-size:80px;
        }

        .between{
            margin:100px;
            font-size:40px;
        }
    </style>
</head>
<body class="top">
    <h1 class="head">送信完了</h1>
    <p class="between"><?php echo $name_r;?></p>
    <p class="between"><?php echo $email_r;?></p>
    <p class="between"><?php echo $date_r;?></p>
</body>
</html>