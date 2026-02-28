<?php
require_once(__DIR__."/../databases/db_array.php");

$post = $_POST['language'];

if(in_array($post, $db_language)){
    foreach($db_language_theme[$post] as $element){
        if(isset($db_theme_matter[$element])){
            echo "<a href= 'spicemen.php?spicemen=". urlencode($element). "'>". $element."</a><br>";
        }
        else{
            echo "Ничего не найдено". "\t" ."\n";
        }
    }
}


?>