<?php
require_once(__DIR__ . '/../databases/db_connect.php');
require_once(__DIR__ . '/../databases/db_hash_table.php');


$id_array = [];
$text_array = [];

foreach($row_data as $row){
    $id_array[] = $row['id'];
    $text_array[] = $row['text'];
}

$count_id = count($id_array);

for($i = 0; $i < $count_id; $i++){
    echo "<a href='sketch.php'> <p>" . $id_array[$i] . "  \t" . $text_array[$i]. "</p> </a>";
}

?>