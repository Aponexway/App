<?php

try{
    $conn = new PDO("coffee.db");
    $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    

}
catch(PDOException $e){
    echo "Ошибка \n";
}
?>