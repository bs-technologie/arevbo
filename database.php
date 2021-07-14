<?php 
try {
    $db = new PDO('mysql:host=localhost;port=3306;dbname=arevbo', 'root', '');
    $db-> SetAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
}catch(PDOException $e){
    echo $e->getMessage();
}
?>