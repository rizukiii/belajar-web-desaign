<?php

// tipe tipe data :

// Null / Kosong
$data = null;
echo $data;

// string / teks
$nama = "Willie Salim";
echo $nama;

echo "<br>";

// Integer / numeric(angka bulat)
$umur = 27;
echo $umur;

echo "<br>";

// Float / Angka pecah
$tinggi = 160.25;
echo $tinggi;

echo "<br>";

// Booolean = True(1) / False(0)
$is_male = true;
echo $is_male;

echo "<br>";

// Array / Kumpulan data yang bisa di jadikan satu didalam tampungan simbolnya "[]"
$dataArray = ["Wildan", "Rizki","Erick", "Riza",];
echo $dataArray[3];
var_dump($dataArray);

echo "<br>";

// Object / Kumpulan data yang bisa di jadikan satu didalam tampungan simbolnya "->
class Orang {
    var $nama ="Stella";
    var $umur = 20;
    var $tinggi = 165.5;
}
// simbol titik digunakan untuk menggabungkan 2 data(bukan menambahkan)
$dataObject = new Orang;
echo $dataObject ->umur . "<br>";
echo $dataObject ->tinggi . "<br>";
echo $dataObject ->umur . "<br>";

$dataObject2 = new Orang;
echo $dataObject2->umur;

?>