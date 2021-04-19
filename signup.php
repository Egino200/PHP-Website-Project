<?php include "PHP/PHPLayout/header.php"; ?>
    <h2>Welcome to Abidas</h2>
<P>enter your details here to make an account</P>

    <form method="post">
        <label for="firstname">First Name</label>
        <input type="text" name="firstname" id="firstname">

        <label for="lastname">Last Name</label>
        <input type="text" name="lastname" id="lastname">

        <label for="email">Email Address</label>
        <input type="text" name="email" id="email">

        <label for="password">password</label>
        <input type="password" name="password" id="username">

        <label for="username">username</label>
        <input type="text" name="username" id="username">

        <input type="submit" name="submit" value="Submit">
    </form>

    <a href="index.php">Back to home</a>

<?php include "PHP/PHPLayout/footer.php"; ?>