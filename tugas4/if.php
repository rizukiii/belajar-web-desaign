<?php

// tugas percabangan / seleksi


// Studi kasus 1
$umur = 18;
if($umur < 18){
    echo "Kamu boleh merokok";
}else{
    echo "Kamu tidak boleh merokok";
}
    
echo "<br>";

// Studi Kasus 2
$tinggiBadan = 158;
if($tinggiBadan > 180){
    echo "Selamat anda cocok menjadi tentara";
}else if($tinggiBadan > 170){
    echo "Selamat anda cocok menjadi polisi";
}else if($tinggiBadan > 160){
    echo "Selamat anda cocok menjadi pengusaha";
}else{
    echo "Maaf anda sangat imut";
}