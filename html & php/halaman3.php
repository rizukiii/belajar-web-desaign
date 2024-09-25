<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman 3 HTML & PHP percabangan/pengecekan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <?php
        $nilai = 10;

        // jika variable nilai lebih besar dari 60 {}
        // if ($nilai > 60) {Alert}

        if ($nilai >= 60) :
        ?>
            <div class="alert alert-success" role="alert">
               Anda lulus
            </div>
            <!-- jika tidak ada veriable nilai sama deangan 10 -->
        <?php elseif ($nilai < 10) : ?>
            <div class="alert alert-warning" role="alert">
                Anda kurang bagus nilai nya
            </div>
            <!-- jika tidak kedua nya -->
        <?php else : ?>
            <div class="alert alert-danger" role="alert">
                Anda belum lulus
            </div>
            <!-- penutupan dari if statement atau pengecekan -->
        <?php endif ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>