<?php
session_start();


?>
    <style>@import "Stylesheet/stylesheet.css";</style>
    <H2 class="name">Abidas</H2>


    <P id="welcome">Log in here</P>

    <!-- this form is used to login and will refuse entry if details are wrong -->
    <div class="forms">
        <form class="TemplateText" action="login.php" method="POST">

            <label for="username">username</label>
            <input type="text" name="username">

            <br>
            <label for="password">password</label>
            <input type="password" name="password">
            <br>

            <br>
            <input  type="submit" id="button" name="submit" value="submit">
        </form>
    </div>
    <div class="TemplateText">already have an account?<a href="signup.php">sign up here</a></div>
<?php

require_once "PHP/PHPClasses/Customer.php";


if (isset($_REQUEST['submit'])) {
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];

    Customer::loginStuff($username, $password);


}

?>