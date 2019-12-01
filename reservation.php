<?php











?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
    <style>
        .book{
            font-size:80px;
        }

        .container7{
            text-align: center;
        }

        .div{
            display:flex;
            justify-content:center;
            margin:30px;
        }

        .enter{
            width:500px;
            font-size:20px;
        }

        .p{
            width:100px;
            font-size:30px;
        }

        .btn-r{
            font-size:20px;
            width:200px;
        }

        .btn-r:hover{
            background-color:black;
            color:white;
            border-radius:10px;
        }

    </style>
</head>
<body>
    <div class="container7">
    <h1 class="book">予約画面</h1>
        <form action="AfterReserved.php" method="POST">
        <div class="div">
        <p class="p">your-name</p>
        <input class="enter" type="text" name ="name10" placeholder="your-name">
        </div>

        <div class="div">
            <p class="p">your-email</p>
            <input class="enter" type="email" name ="email10" placeholder="your-email">
        </div>

        <div class="div">
            <p class="p">DATE</p>
            <input class="enter" type="date" name="date" placeholder="">
        </div>
        <input class="btn-r" type="submit" value ="submit">
        </form>
    </div>
</body>
</html>