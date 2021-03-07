<?php 


    class Produk {

        public $judul = "judul",
               $penulis = "penulis",
               $penerbit = "penerbit",
               $harga = 0;  
        
         //contoh penulisan method
         public function getLabel() {
             return "$this->penulis, $this->penerbit";
         }
    }

    // $produk1 = new Produk();
    // $produk1->judul = "Naruto";
    // var_dump($produk1);
    
    // $produk2 = new Produk();
    // $produk2->judul = "Lostsaga";
    // $produk2->tambahProperty = "Sultan Bisri";
    // var_dump($produk2);

    //contoh penulisan property

    $produk3 = new Produk();
    $produk3->judul = "Naruto";
    $produk3->penulis = "Masashi Kisimoto";
    $produk3->penerbit = "Shonen Jump";
    $produk3->harga = "50000";

    $produk4 = new Produk();
    $produk4->judul = "Line getrich";
    $produk4->penulis = "Sultan Bisri";
    $produk4->penerbit = "Sangkuriang Indonesia";
    $produk4->harga = "30000";

    echo "Komik : " . $produk3->getLabel();
    echo "<br>";
    echo "Game : " . $produk4->getLabel();
    