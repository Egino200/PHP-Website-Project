<?php
require "PHP/PHPLayout/header.php";
require "PHP/PHPClasses/leBasket.php";
session_start();
?>

    <div>Welceom to the basket</div>
<?php  $array = leBasket::getBasket()?>


<?PHP foreach ($array as $basket) { ?>

        <div>

        <div> <?PHP echo $basket['basket_name']; ?>  </div>

        <img src="<?php echo $basket["basket_pic_path"]?>">

            <div>€<?PHP echo  $basket['basket_price'] ?> </div>
        </div>

    <form>
        <input type="submit" name="Check Out" value="submit">

    </form>

<?PHP } ?>




<? require 'PHP/PHPLayout/Footer.php';
if(isset($_REQUEST['submit'])){

}