<?php

require_once(__DIR__ . '/../databases/db_connect.php');
require_once(__DIR__ . '/../databases/db_hash_table.php');

$id_array = [];
$text_array = [];

foreach($row_data as $row){
    $id_array[] = $row['id'];
    $text_array[] = $row['text'];
}


$id = 5;

function output_to_page($db_hash_table_text_anyone, $db_hash_table_id_text, $id){
    echo "<p>" . $db_hash_table_text_anyone[$db_hash_table_id_text[$id]] . "</p>";
    echo "<p>". $db_hash_table_id_text[$id]. "</p>";
}  

output_to_page($db_hash_table_text_anyone, $db_hash_table_id_text, $id);
?>