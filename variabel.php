<?php
$a = 88;
$b = 12;
$c = 25;
//terdapat 3 variabel, yang terdiri dari : 
/*
variabel $a berisi 88 
variabel $b berisi 12
variabel $c berisi 25
*/ 
echo "ARITMATIKA PENJUMLAHAN, PENGURANGAN, DAN PERKALIAN : <br />";
/*variabel $hasil adalah variabel yang digunakan untuk menampung 
hasil dari penjumlahan, pengurangan, dan perkalian dari variabel $a,$b, dan $c */ 

$hasil = $a + $b + $c; 
echo "1. Penjumlahan dari $a + $b  + $c hasilnya $hasil <br />";
/*
kode diatas, pada variabel $hasil mendeskripsikan penjumlahan 
antara $a + $b + $c yang mana hasil dari penjumlahan ketiga variabel ini 
akan ditampung pada variabel $hasil */
/* kemudian echo akan menampilkan pada layar isi penjumlahan  dari variabel a,b,c hasilnya 
diambil dari variabel $hasil
*/ 

$hasil = $a - $b - $c; 
echo "2. Pengurangan dari  $a - $b  - $c hasilnya $hasil <br />";

$hasil = $a * $b * $c; 
echo "3. Perkalian dari  $a * $b  * $c hasilnya $hasil <br />";
?>


