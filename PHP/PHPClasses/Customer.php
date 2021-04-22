<?php


class Customer
{


    public static function loginStuff($username, $password)
    {

        include_once "Datrabase.php";

        try {
            $link = Datrabase::makeLink();

            $sql = "select * from account where account_username='$username' and account_password='$password'";

            $stmt = $link->prepare($sql);

            $stmt->execute();

            $array = $stmt->fetchAll(PDO::FETCH_ASSOC)[0];

         return $array;

        } catch (PDOException $e) {
            echo $sql . "<br>" . "<br>" . "<br>" . "<br>" . $e;

        }


    }

    public static function verifyLogin($array, $username, $password){

        if ($array['account_username'] != $username && $array['account_password'] != $password){
            echo "your password or username is incorrect, try again";
        }
        else{

            $_SESSION['username'] = $username;
            echo"this works";
            header('Location: index.php');
        }


    }


}