<?php //представление данных в хеш-таблицу
require_once('db_connect.php');

$statement = $conn->query("SELECT text, id, anyone FROM document_1");

$row_data = $statement->fetchAll(PDO::FETCH_ASSOC);


//foreach($row_data as $data){
    //echo $data['id'] . "\t". $data['text'] . "\n";
//} проверка работоспособности 0

$db_hash_table_id_text = []; // массив(хеш-таблица) связь id => text
$db_hash_table_text_anyone = []; // массив(хеш-таблица) связь text => anyone 


foreach($row_data as $data){
    $db_hash_table_id_text[$data['id']] = $data['text']; 
    $db_hash_table_text_anyone[$data['text']] = $data['anyone']; 
}
//echo $db_hash_table_text_anyone[$db_hash_table_id_text[1]]; проверка работоспоснобности 1
?>