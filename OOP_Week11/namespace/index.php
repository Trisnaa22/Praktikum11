<!--
    Nama    :Trisna Paulina Lumban Raja
    Kelas   : D3TK2
    Nim     : 13321049
-->
<?php

require_once 'App/init.php';
//$produk1 = new Komik("upin-ipin","Ainon binti Ariff", "Malaysia", 100000, 200); 
  //  $produk2 = new Game("Uncharted", "Neil Druckmann", "Sony Computer", 250000, 50);

//$cetakProduk = new CetakInfoProduk();
//$cetakProduk->tambahProduk($produk1);
//$cetakProduk->tambahProduk($produk2);
//echo $cetakProduk->cetak();

//echo "<hr>";


use App\Service\User;

new User();
echo "<br>";
new App\Produk\User();