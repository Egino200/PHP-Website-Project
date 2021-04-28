<?php
session_start();


require "PHP/PHPLayout/header.php"
?>


    <form action="Account.php" method="POST">

        <label for="password"><h4>Change Password: </h4></label>
        <input type="password" class="profileForms" name="column">
        <input type="hidden" value="account_password" name="formType">
        <input type="submit" value="Submit" class="profileSubmit" name="submit">
        <br> <br>
    </form>

    </form>

    <form action="Account.php" method="POST">
        <label for="email"><h4>Change E-mail</h4> </label>
        <input type="email" class="profileForms" name="column">
        <input type="hidden" value="account_email" name="formType">
        <input type="submit" value="Submit" class="profileSubmit" name="submit">
        <br> <br>
    </form>

    <form action="Account.php" method="POST">
        <label for="firstName"><h4>Change First Name</h4> </label>
        <input type="text" class="profileForms" name="column">
        <input type="hidden" value="account_first_name" name="formType">
        <input type="submit" value="Submit" class="profileSubmit" name="submit">
        <br> <br>
    </form>

    <form action="Account.phpp" method="POST">
        <label for="lastName"><h4>Change Last Name</h4> </label>
        <input type="text" class="profileForms" name="column">
        <input type="hidden" value="account_last_name" name="formType">
        <input type="submit" value="Submit" class="profileSubmit" name="submit">
        <br> <br>
    </form>

<?php

include_once "PHP/PHPClasses/Customer.php";

if ($_SERVER["REQUEST_METHOD"] == "POST"){

    Customer::detailChanger($_REQUEST["formType"], Customer::getID($_SESSION["username"]), $_REQUEST["column"]);

}

require 'PHP/PHPLayout/Footer.php';
?>