<?php
require "PHP/PHPLayout/header.php";
require "PHP/PHPClasses/leBasket.php";
session_start();
?>

    <div>Welceom to the basket</div>
<?php $array = leBasket::getBasket() ?>


<?PHP foreach ($array as $basket) { ?>

    <div>

        <div> <?PHP echo $basket['basket_name']; ?>  </div>

        <img src="<?php echo $basket["basket_pic_path"] ?>">

        <div>€<?PHP echo $basket['basket_price'] ?> </div>
    </div>

<?PHP } ?>


<form method="POST" action ="Basket.php">
    <input type="submit" value="Order Here">
</form>

<?php if($_SERVER['REQUEST_METHOD'] == 'POST'){
    header('location: Ordered.php');
}

require 'PHP/PHPLayout/Footer.php';

