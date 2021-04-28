<?php
require_once "PHP/PHPClasses/Clothing.php";


$Array = Clothing::getArray();


Clothing::insertCart($Array[0]['clothes_pic_path'],$Array[0]['clothes_price'],$Array[0]['clothes_name']);

header('Location: Basket.php');