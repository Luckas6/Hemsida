<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "php_login";

$con = new mysqli ($dbhost,$dbuser,$dbpass,$dbname);

if ($con -> connect_errno) {
    due("ERRO:R" . $con->connect_error);
}

return $con;





?>