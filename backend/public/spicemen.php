<?php 
require_once("echo1.php"); 
require_once(__DIR__ . '/../databases/db_connect.php');
require_once(__DIR__ . '/../databases/db_array.php');

$spice = $_GET['spicemen'] ?? '';

$content = $db_theme_matter[$spice];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <p> <?php echo $spice ?> </p>
    <p> <?php echo $content ?> </p>

</body>
</html>

