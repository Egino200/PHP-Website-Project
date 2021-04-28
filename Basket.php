<?php
require "PHP/PHPLayout/header.php";
require "PHP/PHPClasses/leBasket.php";
session_start();
?>
    <style>@import "Stylesheet/stylesheet.css";</style>

<?php $array = leBasket::getBasket() ?>
    <div id="tutorial">Welcome to your basket, when you are ready click the button below to check out.</div>
    <div id="storeflex">

        <!-- this for loop prints the values of the added items to the basket page using an associative array-->
<?PHP foreach ($array as $basket) { ?>

    <div class ="storeIcon">

        <div class="icontext"> <?PHP echo $basket['basket_name']; ?>  </div>

        <img src="<?php echo $basket["basket_pic_path"] ?>">

        <div class="icontext">€<?PHP echo $basket['basket_price'] ?> </div>
    </div>

<?PHP } ?>
    </div>

<form class="formting" method="POST" action ="Basket.php">
    <input id="button" type="submit" value="Check Out">
</form>

<?php if($_SERVER['REQUEST_METHOD'] == 'POST'){
    header('location: Ordered.php');
}

require 'PHP/PHPLayout/Footer.php';

