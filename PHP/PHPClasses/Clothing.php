<?php


class Clothing
{

    public static function insertCart($picpath,$price,$name){

        $link = Datrabase::makeLink();

        $sql = "insert into basket(basket_name,basket_pic_path, basket_price )
            values('$name','$picpath','$price')";

        $stmt = $link->prepare($sql);

        $stmt->execute();

    }


    public static function getArray(){

       include_once "Datrabase.php";

       try {
           $link = Datrabase::makeLink();

           $sql = "select * from clothes";

           $stmt = $link->prepare($sql);

           $stmt->execute();

           $array = $stmt->fetchAll(PDO::FETCH_ASSOC);

           return $array;
       }catch (PDOException $e){
           echo $sql . "<br>" . "<br>" . "<br>" . "<br>" . $e;
       }
    }




}