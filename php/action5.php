<?php

// Deklarasi variabel
$i = 1;

// Pengulangan / while akan berjalan terus jika diperintah dan ada syaratnya seperti dibawah, dan ia akan berenti saat syaratnya itu terpenuhi
// cek kondisi baru menjalankan 
while ($i <= 10) {
    // menjalankan perintah cetak ke web
    echo $i . "<br>";
    // modifikasi nilai jika nilai cetak berjalan tidak henti"
    $i = $i + 1;
}
// HAsilnya menjadi 11 karna seletah dijalankan parameter diatas jadinya merubah variabel tersebut 
echo $i;

echo "<br>";

// Do-while = menjalankan perulangan baru cek
$x = 1;

do {
    echo $x . "<br>";

    $x++;
} while ($x <= 10);

// deklarasi variabel, kondisi parameter, modifikasi variabel terletak di dalam parameternya.
for ($z = 20; $z > 0; $z--) {
    echo "barang ke " . $z . "<br>";
}
