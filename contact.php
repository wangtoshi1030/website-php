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
    <div class="container2">
    <h1 class="headline">お問い合わせ</h1>
    <form action="check.php" method ="POST">
        <div class="display">
            <p class="size">your-name</p>
            <input class="width" type="text" name="name" placeholder="John Doe, Jane Doe, G. Raymond">
        </div>
        <div class="display">
            <p class="size">your-email</p>
            <input class="width" type="email" name="email" placeholder="sample@sample.com">
        </div>
        <div class="display">
            <p class="size">your-passward</p>
            <input class="width" type="password" name="passward" placeholder="password">
        </div>
        <div class="display">
            <p class="size">your-message</p>
            <textarea class="width" name="textarea" id="" cols="30" rows="10" placeholder="Please write your message"></textarea>
        </div>
        <input class="submit" type="submit" value ="submit">
    </form>
    </div>
</body>
</html>