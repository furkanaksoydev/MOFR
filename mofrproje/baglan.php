<?php

try{
    $db = new PDO("mysql:host=localhost; dbname=mofr; charset=utf8", 'root', '');
    //echo "Veritabanı bağlantısı başarılı.";
}

catch(Exception $e){
    echo $e->getMessage();
}
    

?>