<?php
require_once "PHP/PHPClasses/Clothing.php";

/* this page grabs the values of the item from an associative array and ads it to the basket */
$Array = Clothing::getArray();


Clothing::insertCart($Array[0]['clothes_pic_path'],$Array[0]['clothes_price'],$Array[0]['clothes_name']);

header('Location: Basket.php');?>
<style>@import "Stylesheet/stylesheet.css";</style>
