<?php


require_once('dbconect.php');
require_once('function.php');

$name =$_POST['name'];
$mail=$_POST['email'];
$message =$_POST['textarea'];
$stmt = $dbh->prepare('INSERT INTO surveys (name, email, message) VALUES (?, ?, ?)');
$stmt->execute([$name, $mail, $message]);//?を変数に置き換えてSQLを実行







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
</head>
<body>
    <div class="container5">
    <h1 class="huge">お問い合わせありがとうございました</h1>
    <p class="big"><?php echo  ($name) ; ?></p>
    <p class="big"><?php echo ($mail) ; ?></p>
    <p class="big"><?php echo ($message) ; ?></p>
    </div>

</body>
</html>