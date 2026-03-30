<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="CSS/index.css">
</head>
<body>
    


<?php
require_once('post.php');

echo "<div class=center>
<p class=title>Каталог</p>
</div>";

foreach($all_theme as $theme){
    echo "<div class=center >".$theme. "</div><br>";
}
?>

</body>
</html>