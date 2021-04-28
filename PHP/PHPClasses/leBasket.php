<?php


class leBasket
{

    public static function getBasket(){

            include_once "Datrabase.php";

            try {
                $link = Datrabase::makeLink();

                $sql = "select * from basket";

                $stmt = $link->prepare($sql);

                $stmt->execute();

                $array = $stmt->fetchAll(PDO::FETCH_ASSOC);

                return $array;
            }catch (PDOException $e){
                echo $sql . "<br>" . "<br>" . "<br>" . "<br>" . $e;
            }

    }

    public static function printbasket(){


    }


}