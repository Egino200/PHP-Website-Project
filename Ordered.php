<?php
require "PHP/PHPLayout/header.php";
include_once "PHP/PHPClasses/leBasket.php"


?>
    <style>@import "Stylesheet/stylesheet.css";</style>

<div id="tutorial"> Your order has been completed, thank you and come again :)</div>

<A id="tutorial" href="index.php">Return to the home page?</A>

<?php leBasket::deleteBasket();

require 'PHP/PHPLayout/Footer.php';
?>