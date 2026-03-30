<?php
require_once('db_connect.php');

$sql_insert = "INSERT INTO manual (theme, matter, code_matter) VALUES (:theme, :matter, :code_matter)";

$stmt = $conn->prepare($sql_insert);

$stmt -> execute(['theme' => "Тема какая-то", 'matter' => 'текст', 'code_matter' => "код33"]);


?>