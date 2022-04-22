<?php

$databaseHost = 'mysql.come2us.com.br';
$databaseName = 'come2us06';
$databaseUsername = 'come2us06';
$databasePassword = 'facil2020';

try {

    $dbConn = new PDO("mysql:host={$databaseHost};dbname={$databaseName}", $databaseUsername, $databasePassword);

    $dbConn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 

} catch(PDOException $e) {
    echo $e->getMessage();
}
 
?> 