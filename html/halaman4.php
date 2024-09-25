<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Belajar Web Php : Halaman 4</title>
    </head>

    <body>
        <!-- Hyperlink to web lain -->
        <div>
            <a href="http://lawba.com/">Lawba</a>,

        <!-- Hyperlink to project -->
            <a href="halaman1.php">halaman 1 <a>
            <a href="./halaman2.php">Halaman 2</a>
            <a href="./halaman3.php">Halaman 3</a>
            <a href="./halaman4.php">Halaman 4</a>
        </div>
        <!-- membuat form tag :  -->
        <!-- input : digunakan untuk memasukkan data -->
        <!-- label : digunakan untuk menandakan input  -->
        
        <!-- type button -->
        <!-- button : dia tidak memiliki fungsi kalo kita seting -->
        <!-- submit : dia memiliki fungsi untuk melakukan action atau tugas -->
        <!-- Reset : menghapus semua isi dari input didalam form -->
        
        <form>
            <label for="email">Email :</label>
            <input type="email" name="email" id="email">
            <br>
            <label for="nama">Nama :</label>
            <input type="text" name="Nama" id="nama">
            <br>
            <input type="button" value="Tombol">
            <button type="">Tombol Submit</button>
            <button type="">Tombol Reset</button>
            <button type="">Tombol Button</button>
        </form>
    </body>
</html>