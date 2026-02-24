<?php
require_once(__DIR__ . '/../databases/db_connect.php');
require_once(__DIR__ . '/../databases/db_hash_table.php');

echo "Hello world!";

$id_array = [];


foreach($row_data as $id_s){
    $id_array[] = $id_s['id'];
}

echo $id_array[1];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <a href=>
            <p>1s;d;</p>
        </a> 
    </div>
</body>
</html>