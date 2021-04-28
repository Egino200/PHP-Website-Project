<?php

include_once  "PHP/PHPClasses/Datrabase.php";


$link = Datrabase::makeLink();


?>
<style>@import "Stylesheet/stylesheet.css";</style>
<h2 class="name">Welcome to Abidas</h2>
<P id="welcome">enter your details here to make an account</P>
<div class="forms">
<form class="TemplateText" action="signup.php" method="POST">

    <label for="username">username</label>
    <input type="text" name="username" >
<br>
    <label for="firstname">First Name</label>
    <input type="text" name="firstname" >
<br>
    <label for="lastname">Last Name</label>
    <input type="text" name="lastname" >
<br>
    <label for="email">Email Address</label>
    <input type="text" name="email" >
<br>
    <label for="password">password</label>
    <input type="password" name="password" >
<br>
<br>
    <input type="submit"  id="button" name="submit" value="submit">
</form>
</div>

<?php

 /* this code recieves the data from the form and adds it to a row in the account database. if it fails it will print an error message */
if (isset($_REQUEST['submit'])) {
    $username = $_REQUEST['username'];
   $firstname = $_REQUEST['firstname'];
    $lastname = $_REQUEST['lastname'];
    $email = $_REQUEST['email'];
    $password =$_REQUEST['password'];

    try {
        $sql = "insert into account(account_username, account_first_name, account_last_name, account_email, account_password) 
values('$username','$firstname','$lastname','$email','$password')";

        $stmt = $link->prepare($sql);

        $stmt->execute();

        header('Location: login.php');

    } catch (PDOException $e) {
        echo $sql . "<br>" . "<br>" . "<br>" . "<br>" . "<br>" . "<br>" . "<br>" . "<br>" . "<br>" . $e;
    }

}


?>


<P class="TemplateText">already have an account?<a href="login.php"> Log in</a></P>


