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

    //contoh penulisan property

    $produk1 = new Produk("Naruto", "Masashi Kisimoto", "Shonen Jump", 50000);
    $produk2 = new Produk("Line getrich", "Sultan Bisri", "Sangkuriang Indonesia", 30000);
    $produk3 = new Produk("Mobile Legend");

    echo "Komik : " . $produk1->getLabel();
    echo "<br>";
    echo "Game : " . $produk2->getLabel();
    echo "<br>";
    var_dump($produk3);
    