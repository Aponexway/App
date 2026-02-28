<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php-1 site</title>
</head>
<body>
    <p> Главная страничка</p>

    <div>
        <form action='post.php' method="POST">
            <input type="text"  name="language">
            <input type="submit" value="отправить">
        </form>
    </div>

    <div>
        <?php include("post.php"); ?>
    </div>
   
</body>
</html>