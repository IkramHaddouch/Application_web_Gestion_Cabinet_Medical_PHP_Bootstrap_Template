<?php

$database = array(
    'databaseHost' => 'localhost',
    'databaseUser' => 'root',
    'databasePassword' => '',
    'databaseName' => 'cabinet_medical',
    'databaseCharset' => 'utf8'
);

try{
    $db = new PDO("mysql:host=".$database['databaseHost'].";dbname=".$database['databaseName'].";charset=".$database['databaseCharset'],$database['databaseUser'],$database['databasePassword']);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $db->setAttribute(PDO::ATTR_CASE, PDO::CASE_LOWER);
}catch(PDOException $e){
    $alert = array('alert-error',"Erreur de connexion a la base de donnees  ");
}

?>