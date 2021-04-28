<?php

session_start();

require "PHP/PHPLayout/header.php";


include_once "PHP/PHPClasses/Customer.php";
echo "Welcome back " . $_SESSION["username"];
Customer::getID($_SESSION["username"]);



require 'PHP/PHPLayout/Footer.php';