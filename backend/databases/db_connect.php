<?php
//подключение к БД 
try{
    $conn = new PDO("sqlite:". __DIR__ ."/document.db");
    $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $conn;

}
catch(PDOException $e){
    echo "Ошибка \n";
}
?>