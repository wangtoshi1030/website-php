<?php

$name_r=$_POST["name10"];
$email_r=$_POST["email10"];
$date_r=$_POST["date"];


if($name_r==""){
    $answer_name="you didnt write your name";
}else{
    $answer_name="Thanks". ':'. $name_r;
}

if($email_r ==""){
    $answer_email="you didnt write your e-mail";
}else{
    $answer_email="your-email". ':'. $email_r;
}


if($date_r==""){
    $answer_date="you didnt write your date";
}else{
    $answer_date ="your-email". ':'.$date_r;
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
    <style>
        .container8{
            text-align: center;
        }

        .put{
            padding:30px;
            font-size:35px;
        }


        .last{
            font-size:80px;
        }

        .ok{
            width:200px;
        }
    </style>
</head>
<body>
    <div class="container8">
        <h1 class="last">入力内容確認</h1>
        <p class="put"><?php echo $answer_name?></p>
        <p class="put"><?php echo $answer_email?></p>
        <p class="put"><?php echo $answer_date?></p>
        <form action="final.php" method="post">
            <input type="hidden" name ="name10" value="<?=$name_r?>" >
            <input type="hidden" name ="email10" value="<?=$email_r?>" >
            <input type="hidden" name ="date" value="<?=$date_r?>" >
            <button class="ok" type="button" onclick="history.back()">back</button>
                <?php if($name_r !="" && $email_r!="" && $date_r!="") :?>
                    <input class="ok" type="submit" value="OK">
                <?php endif;?>
        </form>
    </div>
</body>
</html>