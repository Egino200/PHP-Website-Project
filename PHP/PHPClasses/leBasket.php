<?php


class leBasket
{
/* returns an associative array of the basket table in the database */
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

    /* deletes the current baskets items and redirects the user to the ordered page */
    public static function deleteBasket(){
        include_once "Datrabase.php";

        try {
            $link = Datrabase::makeLink();

            $sql = "delete from basket";

            $stmt = $link->prepare($sql);

            $stmt->execute();

        }catch (PDOException $e){
            echo $sql . "<br>" . "<br>" . "<br>" . "<br>" . $e;
        }

    }


}