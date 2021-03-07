<?php 

    // class ContohStatic
    // {   
    //     public static $angka = 1;

    //     public static function hallo()
    //     {
    //         return "hallo" . self::$angka++ . "Kali.";
    //     }
    // }

    // echo ContohStatic::$angka;
    // echo "<br>";
    // echo ContohStatic::hallo();
    // echo "<hr>";
    // echo ContohStatic::hallo();

    class Contoh {
        public static $angka = 1;

        public function hallo() {
            return "Halo " . self::$angka++ . "Kali. <br>";
        }
    }

    $obj = new Contoh;
    echo $obj->hallo();
    echo $obj->hallo();
    echo $obj->hallo();
    echo "<hr>";

    $obj1 = new Contoh;
    echo $obj1->hallo();
    echo $obj1->hallo();
    echo $obj1->hallo();


?>