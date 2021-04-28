<?php

session_start();

require "PHP/PHPLayout/header.php";


include_once "PHP/PHPClasses/Customer.php";
echo $_SESSION["username"];
echo $_SESSION['account_id'];

Customer::getID($_SESSION["username"]);

require 'PHP/PHPLayout/Footer.php';