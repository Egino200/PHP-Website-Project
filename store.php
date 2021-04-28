<?php
require "PHP/PHPLayout/header.php";

session_start();
?>
    <style>@import "Stylesheet/stylesheet.css";</style>

   <?php include_once "PHP/PHPClasses/Clothing.php";

$clothesArray = Clothing::getArray();

$e= null ;
?>
    <div id="tutorial">Please click on any of the options below to add them to your cart</div>
<div id="storeflex">

<!-- this for loop prints the items available to the store page from an associative array -->
<?PHP foreach ($clothesArray as $cloth) { ?>

        <a class ="storeIcon" href="addtocart<?php  echo ++$e ?>.php">

        <div class="icontext"> <?PHP echo $cloth['clothes_name']; ?>  </div>

        <img src="<?php echo $cloth["clothes_pic_path"]?>">

            <div class="icontext">€<?PHP echo  $cloth['clothes_price'] ?> </div>
        </a>


<?PHP } ?>
</div>
<?php
require 'PHP/PHPLayout/Footer.php';
?>