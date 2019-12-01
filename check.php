<?php



$name =$_POST['name'];
$mail=$_POST['email'];
$passward=$_POST['passward'];
$message =$_POST['textarea'];


if($name ==''){
    $name_results='please write your name';
}else{
    $name_results ='Thanks' .':'. $name;
}


if($mail==''){
    $mail_results = "please write your e-mail";
}else{
    $mail_results ='your-email'.':'. $mail;
}


if($passward ==""){
    $pass_results='please write your password';
}else{
    $pass_results ='your-passward'. ':'. $passward;
}


if($message ==''){
    $message_results='please write your message';
}else{
    $message_results ="your-message". ':'. $message;
}


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
<div class="container3">
<h1 id="color">入力内容の確認</h1>

    <p class="information"><?php echo ($name_results) ; ?></p>
    <p class="information"><?php echo ($mail_results) ; ?></p>
    <p class="information"><?php echo ($pass_results) ; ?></p>
    <p class="information"><?php echo ($message_results) ; ?></p>


    <form action="thanks.php" method='POST'>
    <input type="hidden" name='name' value='<?=($name)?>'>
    <input type="hidden" name='email' value='<?=($mail)?>'>
    <input type="hidden" name='password' value='<?=($passward)?>'>
    <input type="hidden" name='textarea' value='<?=($message)?>'>
    <button type="button" onclick="history.back()">戻る</button>
    <?php if ($name!='' && $mail!='' && $message!='' && $passward!='') : ?>
        <input type="submit" value ="OK">
    <?php endif; ?>
    </form>
</div>
</body>
</html>