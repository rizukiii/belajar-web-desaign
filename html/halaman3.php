<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Belajar Web PHP : Halaman 3</title>
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
        <!-- Membuat Struktur Table Tag   -->
        
        <!-- Thead : Membuat kepala table / biasanya digunakan untuk judul data -->
        <!-- Tbody : Membuat tubuh table / biasnaya digunakan untuk datanya tabel -->
        <!-- Tfoot : Mmebuat kaki Table / biasanya digunakan untuk aksesoris tambahan dari tabel(Opsional)-->
        
        <!-- Tr : membuat Bris BAru di tabel  -->
        <!-- th(table header) : Membuat kolomn judul data -->
        <!-- Td(table data) : Membuat kolom data -->
        
        <!-- colspan : digunakan untuk menggabungkan 2 atau lebih kolom -->
        <!-- rowspan : digunakan untuk menggabungkan 2 atau lebih baris -->
        
        <table border="1px">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Umur</th>
                    <th>Jenis Kelamin</th>
                    <th>Alamat</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>1</td>
                    <td>Sinta</td>
                    <td>19</td>
                    <td>Perempuan</td>
                    <td>Yogyakarta</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Ammar</td>
                    <td>24</td>
                    <td>Laki Laki</td>
                    <td>Jakarta</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>rizki</td>
                    <td>18</td>
                    <td>Laki Laki</td>
                    <td>Medan</td>
                </tr>
            </tbody>

            <tfoot>
                <tr>
                    <th colspan="4">Jumlah</th>
                    <th>3</th>
                </tr>
                <tr>
                    <th rowspan="2" colspan="4">jenis kelamin</th>
                    <th>Perempuan : 2</th>
                </tr>
                <tr>
                    <th>Laki laki : 1</th>
                </tr>
            </tfoot>
        </table>

    </body>
</html>