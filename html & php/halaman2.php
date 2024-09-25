<!-- pemanggilan php dari file lain menggunakan include ,perhatikke petik e karo gawe kurung -->
<!-- harus pake file lain misal action.php -->
 <!-- pemggunaan ini biar efisian dan memudahkan -->
<?php include('./action.php') ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>halaman 2 HTML & PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <div class="card my-5" style="width: 18rem;">
            <!-- ini tag pemanggilan php di html kalo extend file pake "=" bukan pake php.. -->
            <img src="<?= $gambar ?>" class="card-img-top" alt="">
            <div class="card-body">
                <h5 class="card-title"><?= $judul ?></h5>
                <p class="card-text">,<small class="text-body-secondary"><?= $pembuat ?></small></p>
                <p class="card-text"><?= $isi ?></p>
            </div>
        </div>


    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>