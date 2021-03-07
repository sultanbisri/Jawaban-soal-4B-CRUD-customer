<?php 

    // define('NAMA', 'Sultan Bisri');
    // echo NAMA;
    // echo "<br>";

    // const UMUR = 19;
    // echo UMUR;

    //perbedaan menggunakan define dan const, apabila
    //menggunakan define maka tidak bisa digunakan di dalam class
    //apabila menggunakan const maka bisa digunakan didalam class

    // class Coba {
    //     const NAMA = 'Sultan Bisri';
    // }

    // echo Coba::NAMA;

    // echo __LINE__;
    
    // function coba(){
    //     return __FUNCTION__;
    // }

    // echo coba();

    class Coba {
        public $kelas = __CLASS__;
    }

    $obj = new Coba;
    echo $obj->kelas;

?>