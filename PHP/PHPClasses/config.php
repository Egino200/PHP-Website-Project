<?php

$dbHost = "localhost";
$dbUser = "root";
$dbPassword = "password";
$dbName = "robdb";

$dsn = "mysql:host=$dbHost;dbname=$dbName";

$options = array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);