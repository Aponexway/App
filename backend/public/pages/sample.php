<?php // ВАЖНО !ЭТОТ ФАЙЛ НУЖНО БУДЕТ УДАЛИТЬ
require_once(__DIR__ . '/../../databases/db_connect.php');

// Простой тест 
$result = $conn->query("SELECT text FROM document_1");

$i  = (int) 1;
while($row = $result->fetch(PDO::FETCH_ASSOC)) {
    echo "\t".$i++."\t" . $row['text'] . "\n";
}
?>