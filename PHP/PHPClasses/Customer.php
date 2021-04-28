<?php


class Customer
{

/* this function checks the values inputted against the database. if the password or th username do not match with the data in the database it will deny entry and display a message */
    public static function loginStuff($username, $password)
    {

        include_once "Datrabase.php";

        try {


            $link = Datrabase::makeLink();

            $sql = "select * from account where account_username='$username' and account_password='$password'";

            $stmt = $link->prepare($sql);

            $stmt->execute();


            if (!empty($stmt->fetchAll(PDO::FETCH_ASSOC)[0])) {
                $array = $stmt->fetchAll(PDO::FETCH_ASSOC)[0];


                self::verifyLogin($array, $username, $password);

            } else {

                echo "your details are incorrect, please try again";
            }


        } catch (PDOException $e) {
            echo $sql . "<br>" . "<br>" . "<br>" . "<br>" . $e;

        }


    }
/*this code is utilised in the function above and checks the the array pulled from the database has the same value as the data inputted by the user   */
    public static function verifyLogin($array, $username, $password)
    {

        if ($array['account_username'] = $username || $array['account_password'] = $password) {
            $_SESSION['username'] = $username;


            header('Location: index.php');
        } else {
            echo "your password or username is incorrect, try again";

        }


    }

    /* this code gets an array from the database and returns the id related to the username */
    public static function getID($username)
    {
        include_once "Datrabase.php";
        $link = Datrabase::makeLink();

        $sql = "select account_id from account where account_username='$username'";

        $stmt = $link->prepare($sql);

        $stmt->execute();
        $array = $stmt->fetchAll(PDO::FETCH_ASSOC);


        return $array[0]['account_id'];

    }

    /* this function deletes the users account based on the username  */
    public static function deleteAcc($username){
        include_once "Datrabase.php";

        $link = Datrabase::makeLink();

        $sql = "delete from account where account_username = '$username'";

        $stmt = $link->prepare($sql);

        $stmt->execute();
        header("location:login.php");

    }
  /* this function changes the specified details of the user. it can vary depending on the parameters inputted. */
    public static function detailChanger($column, $user_id, $value)
    {
        include_once "Datrabase.php";

        $link = Datrabase::makeLink();

        $sql = "UPDATE account set $column = '$value' where account_id = $user_id";

        $stmt = $link->prepare($sql);

        $stmt->execute();

        if ($stmt->execute()) {
            header("location:Account.php");
        } else {
            echo "dis wrong g";
        }
    }


}