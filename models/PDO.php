<?php
$db_user = "lolo";
$db_passwd = "Loic10101998Denis.";
$db_host = "localhost";
$db_port = "3306";
$db_name = "tsn";
$db_dataSourceName = "mysql:host=$db_host;port=$db_port;dbname=$db_name";

$PDO = new PDO($db_dataSourceName, $db_user, $db_passwd);
$PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
