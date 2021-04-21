<?php


class Customer
{


public static function loginStuff($username,$password){

    include_once "Datrabase.php";
    $link = Datrabase::makeLink();

    $sql = "select * from account where account='$username' and account_password='$password'";

}








}