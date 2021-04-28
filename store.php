<?php
require "PHP/PHPLayout/header.php";

session_start();
?>
    <style>@import "Stylesheet/stylesheet.css";</style>

   <?php include_once "PHP/PHPClasses/Clothing.php";

$clothesArray = Clothing::getArray();

$e= null ;
?>

<?PHP foreach ($clothesArray as $cloth) { ?>

        <a href="addtocart<?php  echo ++$e ?>.php">

        <div> <?PHP echo $cloth['clothes_name']; ?>  </div>

        <img src="<?php echo $cloth["clothes_pic_path"]?>">

            <div>€<?PHP echo  $cloth['clothes_price'] ?> </div>
        </a>


<?PHP } ?>

<?php
require 'PHP/PHPLayout/Footer.php';
?>