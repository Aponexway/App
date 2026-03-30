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
require_once(__DIR__."/../databases/db_array.php");

$post = $_POST['language'];

$all_theme = [];

if(in_array($post, $db_language)){
    foreach($db_language_theme[$post] as $element){
        if(isset($db_theme_matter[$element])){
            $all_theme[] = " <p class=center>  <a href= 'spicemen.php?spicemen=". urlencode($element). "'>". $element."</a><br> </p>";
            
        }
        else{
            echo "Nine";
        }
    }
}

?>
</body>
</html>