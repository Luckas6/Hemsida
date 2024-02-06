<?php
$servername = "localhost"; 
$username = "root";
$password = "";
$dbname = "php_login";

$connection = new mysqli($servername, $username, $password, $dbname);

if ($connection -> connect_errno) {
    due("ERRO:R" . $connection->connect_error);
}

return $connection;

?>