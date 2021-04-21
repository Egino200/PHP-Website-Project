<?php


class Datrabase
{

    private $link;



    public static function makeLink(){


        try {

            require "config.php";
            $link = new PDO($dsn, $dbUser, $dbPassword, $options);
            echo "Connection successful";

            return $link;

        } catch (PDOException $e) {
            echo "DB Connection failed: " . $e->getMessage();
        }



    }




}