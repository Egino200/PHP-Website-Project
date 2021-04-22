<?php
session_start();


?>

<H2>Abidas</H2>


<P>Log in here</P>

<form action="login.php" method="POST">

    <label for="username">username</label>
    <input type="text" name="username" >

    <label for="password">password</label>
    <input type="password" name="password" >

    <input type="submit" name="submit" value="submit">
</form>

<?php

require_once "PHP/PHPClasses/Customer.php";



if(isset($_REQUEST['submit'])){
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];

    Customer::verifyLogin(Customer::loginStuff($username, $password),$username,$password);


}

?>