<?php
require_once "PHP/PHPClasses/Clothing.php";


$Array = Clothing::getArray();


Clothing::insertCart($Array[2]['clothes_pic_path'],$Array[2]['clothes_price'],$Array[2]['clothes_name']);

header('Location: Basket.php');