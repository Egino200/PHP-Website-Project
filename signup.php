<?php include "PHP/PHPLayout/header.php";

$dbHost = "localhost";
$dbUser = "root";
$dbPassword = "password";
$dbName = "robdb";

try {


    $dsn = "mysql:host=$dbHost;dbname=$dbName";

    $options = array(
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);

    $pdo = new PDO($dsn, $dbUser, $dbPassword, $options);
    echo "Connection successful";


} catch (PDOException $e) {
    echo "DB Connection failed: " . $e->getMessage();
}

?>
<h2>Welcome to Abidas</h2>
<P>enter your details here to make an account</P>

<form action="login.php" method="POST">

    <label for="username">username</label>
    <input type="text" name="username" >

    <label for="firstname">First Name</label>
    <input type="text" name="firstname" >

    <label for="lastname">Last Name</label>
    <input type="text" name="lastname" >

    <label for="email">Email Address</label>
    <input type="text" name="email" >

    <label for="password">password</label>
    <input type="password" name="password" >


    <input type="submit" name="submit" value="submit">
</form>


<?php

if (isset($_REQUEST['submit'])) {
    $username = $_REQUEST['username'];
   $firstname = $_REQUEST['firstname'];
    $lastname = $_REQUEST['lastname'];
    $email = $_REQUEST['email'];
    $password =$_REQUEST['password'];

    try {
        $sql = "insert into account(account_username, account_first_name, account_last_name, account_email, account_password) 
values('$username','$firstname','$lastname','$email','$password')";

        $stmt = $pdo->prepare($sql);

        $stmt->execute();

    } catch (PDOException $e) {
        echo $sql . "<br>" . "<br>" . "<br>" . "<br>" . "<br>" . "<br>" . "<br>" . "<br>" . "<br>" . $e;
    }

}


?>


<a href="index.php">Back to home</a>

