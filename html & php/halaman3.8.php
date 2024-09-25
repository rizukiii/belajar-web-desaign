<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman 3.5 HTML & PHP : IF STATEMENT/PENGECEKAN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <!-- coding dimulai dari paling atas -->
    <div class="container">
        <?php
        $nilai = 70;
        $absenMasuk = 85;
        // result menyimpan data variable nilai + absen masuk 
        $result = $nilai + $absenMasuk;

        // jika $result sama dengan data tersebut dia akan menampilkannya,  tapi wajib sama dengan data
        if ($result == 150): ?>
            <div class="alert alert-success" role="alert">
                Anda lulus
            </div>
            <!-- result akan menampilkannyadiatas 100  -->
        <?php elseif ($result >= 100): ?>
            <div class="alert alert-warning" role="alert">
                Anda kurang bagus nilai nya
            </div>
            <!-- result akan mnampilkan diatas 50 -->
        <?php elseif ($result >= 50): ?>
            <div class="alert alert-danger" role="alert">
                Anda belum lulus
            </div>
            <!-- result akan meanmpilkan jika tidak ada yang benar diatas -->
        <?php else: ?>
            <div class="alert alert-danger" role="alert">
                Anda belum lulus
            </div>
        <?php endif; ?>




    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>