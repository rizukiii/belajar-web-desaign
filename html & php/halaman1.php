<!-- bahasa php kalo digabung sama html secara in file, wajib aja pembuka dan penutup tag php -->
<?php
$judul = "Potret 'Laut' Manusia Kuning-Biru-Hijau Demo DPR Batalkan RUU Pilkada";
$pembuat = "(CNBC Indonesia/Muhammad Sabki)";
$isi = "Demo berlangsung hingga malam. Di malam hari pula, DPR menggelar konferensi pers resmi, di mana Wakil Ketua DPR Sufmi Dasco Ahmad memastikan pengesahan revisi UU Pilkada dibatalkan. Ia menyebut putusan MK ah yang berlaku untuk pendaftaran Pilkada pada 27 Agustus 2024 mendatang. (CNBC Indonesia/Muhammad Sabki)";
$gambar = "https://akcdn.detik.net.id/visual/2024/08/22/sejumlah-elemen-masyarakat-sipil-mulai-dari-buruh-mahasiswa-hingga-aktivis-menggelar-aksi-demonstrasi-menolak-pengesahan-revis-1_169.jpeg?w=800&q=90";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman 1 HTML & PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <!-- Class container biar tidak mepet kanan atau kiri -->
    <div class="container">

        <div class="mx-auto my-5">
            <h1 class="text-center">Halaman 1</h1>
            <div class="card mx-auto my-5" style="width: 18rem;">
                <!-- cara pemanggilan php di html -->
                <img src="<?php echo $gambar ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $judul ?></h5>
                    <!-- substr untuk memotong atau mengurangi kata di mulai dari 0 - 150, dasarnya array -->
                     <!-- menambahkan blank untuk agar jika meklik link membuat tab baru -->
                    <p class="card-text"><?php echo substr($isi, 0, 150) ?> ...<a href="https://www.cnbcindonesia.com/news/20240822171117-7-565607/potret-laut-manusia-kuning-biru-hijau-demo-dpr-batalkan-ruu-pilkada/8" class="btn btn-primary" target="_blank">Detail</a></p>

                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>