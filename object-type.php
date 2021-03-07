<?php 


    class Produk {

        public $judul,
               $penulis,
               $penerbit,
               $harga;  
        
        public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga  = 0) 
        {   
            $this->judul = $judul;
            $this->penulis = $penulis;
            $this->penerbit = $penerbit;
            $this->harga = $harga;    
        }

         //contoh penulisan method
         public function getLabel() {
             return "$this->penulis, $this->penerbit";
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

    $produk1 = new Produk("Naruto", "Masashi Kisimoto", "Shonen Jump", 50000);
    $produk2 = new Produk("Line getrich", "Sultan Bisri", "Sangkuriang Indonesia", 30000);

    echo "Komik : " . $produk1->getLabel();
    echo "<br>";
    echo "Game : " . $produk2->getLabel();
    echo "<br>";

    //contoh untuk mencetak dari object type
    $infoProduk1 = new CetakInfoProduk();
    echo $infoProduk1->cetak($produk1);

    