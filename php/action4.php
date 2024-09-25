<?php
// seleksi / percabangan

// variabel nilai
$nilai = 75;

// if adalah sebuah perintah untuk menjalankan pilihan berdasarkan parameternya
if($nilai > 75){
    // jika dia true atau benar maka diakan menjankan perintah dibawah ini
    echo "Selamat anda Lulus";
}else{
    // dan jika false atau salah dia akanmenjalankan perintah dibawah ini
    echo "Selamat anda remidi";
}

if($nilai > 85){
    // jika seleksi pertama hasilnya true maka akan menjalakan code di bawah
    echo "Selamat anda mendapatkan nilai A";
}else if($nilai > 75){
    // jika seleksi pertama hasilnya false maka akan lanjut ke kode dibawah ini dan menjadi true
    echo "selamat anda mendapatkan nilai B";
}else if($nilai > 60){
    // jika perintah di atas masih false makan sistem akan melanjutkan kode dibawah ini dan menjadi pasti truee
    echo "Selamat anda mendapat nilai C";
}else{
    // jika nilai masih tidak memenuhi seleksi diatas maka akan false
    echo "Maaf anda harus remidi";
}
