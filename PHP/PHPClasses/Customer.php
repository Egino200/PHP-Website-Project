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


            if (!empty($stmt->fetchAll(PDO::FETCH_ASSOC)[0])) {
                $array = $stmt->fetchAll(PDO::FETCH_ASSOC)[0];


                self::verifyLogin($array, $username, $password);

            } else {

                echo "your details are incorrect you absolute cretin";
            }


        } catch (PDOException $e) {
            echo $sql . "<br>" . "<br>" . "<br>" . "<br>" . $e;

        }


    }

    public static function verifyLogin($array, $username, $password)
    {

        if ($array['account_username'] = $username || $array['account_password'] = $password) {
            $_SESSION['username'] = $username;

            echo "this works";
            header('Location: index.php');
        } else {
            echo "your password or username is incorrect, try again";

        }


    }

    public static function getID($username)
    {
        include_once "Datrabase.php";
        $link = Datrabase::makeLink();

        $sql = "select account_id from account where account_username='$username'";

        $stmt = $link->prepare($sql);

        $stmt->execute();
        $array = $stmt->fetchAll(PDO::FETCH_ASSOC);


        return $array[0]['account_id'];

        /*if ($stmt->execute()) {
            $array = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $array[0]["account_id"];
        } else {
            echo "yo this aint workin";
        }*/

    }

    public static function deleteAcc($username){
        include_once "Datrabase.php";

        $link = Datrabase::makeLink();

        $sql = "delete from account where account_username = '$username'";

        $stmt = $link->prepare($sql);

        $stmt->execute();
        header("location:login.php");

    }

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