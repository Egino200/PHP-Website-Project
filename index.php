<?php
session_start();
require "PHP/PHPLayout/header.php";

include_once "PHP/PHPClasses/Customer.php";
?>

<!-- this line of code prints the current username determined by the session-->
<div id="welcome">Welcome back <?PHP  echo $_SESSION["username"];?></div>
<?php
Customer::getID($_SESSION["username"]);
require 'PHP/PHPLayout/Footer.php';
?>


<style>@import "Stylesheet/stylesheet.css";</style>
