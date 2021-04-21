<?php
session_start();

?>

<H2>Abidas</H2>


<P>Log in here</P>

<form action="signup.php" method="POST">

    <label for="username">username</label>
    <input type="text" name="username" >

    <label for="password">password</label>
    <input type="password" name="password" >

    <input type="submit" name="submit" value="submit">
</form>
