<?php
$dbhost = "localhost";
$dbname = "bdchat";
$dbuser = "root";
$dbpass = '12345';

try{
$db = new PDO("mysql:dbhost=$dbhost;dbname=$dbname", "$dbuser", "$dbpass");
}catch(PDOException $e)
{
    echo $e->getMessage();
}
?>