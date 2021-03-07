<?php 


    class Produk {

        public $judul,
               $penulis,
               $penerbit,
               $harga,
               $jmlHalaman,
               $waktuMain,
               $tipe;
        
        public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit",
             $harga  = 0, $jmlHalaman = 0, $waktuMain = 0, $tipe ) 
        {   
            $this->judul = $judul;
            $this->penulis = $penulis;
            $this->penerbit = $penerbit;
            $this->harga = $harga;   
            $this->jmlHalaman = $jmlHalaman;
            $this->waktuMain = $waktuMain; 
            $this->tipe = $tipe;
        }

         //contoh penulisan method
         public function getLabel() {
             return "$this->penulis, $this->penerbit";
         }

         public function getInfoLengkap() {
             // Komik : Naruto | Masashi Kisimoto, Shonen Jump (Rp. 50000) - 300 Halaman.
             $str = " {$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) ";

             if( $this->tipe == "Komik" ) {
                $str .= " - {$this->jmlHalaman} Halaman. ";
             } else if( $this->tipe == "Game" ) {
                $str .= " ~ {$this->waktuMain} Jam. ";
             }

             return $str;

         }
         
    }

    class CetakInfoProduk{

        public function cetak( Produk $produk ) {
            //contoh penulisan object type
            $str = " {$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga}) ";
            return $str;
        }
    }

    //contoh penulisan property

    $produk1 = new Produk("Naruto", "Masashi Kisimoto", "Shonen Jump", 50000, 300, 0, "Komik");
    $produk2 = new Produk("Line getrich", "Sultan Bisri", "Sangkuriang Indonesia", 30000, 0, 50, "Game");

   echo $produk1->getInfoLengkap();
   echo "<br>";
   echo $produk2->getInfoLengkap();
    