<?php
require_once "PHP/PHPClasses/Clothing.php";


$Array = Clothing::getArray();


Clothing::insertCart($Array[1]['clothes_pic_path'],$Array[1]['clothes_price'],$Array[1]['clothes_name']);

header('Location: Basket.php');?>
<style>@import "Stylesheet/stylesheet.css";</style>
