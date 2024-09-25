<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pusat Berita</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Seputar Informasi</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link Login</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="./tugas2.php" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Lainnya
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="./tugas1.php">Laman 1</a></li>
                            <li><a class="dropdown-item" href="./tugas2.php">Laman 2</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="./tugas3.php">Laman 3</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Cari</button>
                </form>
            </div>
        </div>
    </nav>
    <div class="offcanvas offcanvas-start show" tabindex="-1" id="offcanvas" aria-labelledby="offcanvasLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasLabel">Ini adalah pengingat</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            kita berada di laman Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minus dolor labore nihil voluptatem expedita magnam deserunt non ea vel neque..
        </div>
    </div>
    <div>
        <div>
            <button type="button" class="btn btn-lg btn-danger mx-5 mt-5" data-bs-toggle="popover" data-bs-title="Popover title" data-bs-content="And here's some amazing content. It's very engaging. Right?" style="align-content:end">Klik untuk berpindah</button>
        </div>
        <div class="text-center">
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    <br>
    <div class="card mx-auto" style="width: 18rem;">
        <div class="card-header">
            Berita Hot
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">5 Tahun Dinanti, Kemenkeu Akhirnya Buka Lowongan CPNS 2024!</li>
            <li class="list-group-item">PBNU Panggil Ketua Umum PKB Muhaimin Iskandar Hari Ini</li>
            <li class="list-group-item">Gempa Megathrust di Indonesia Tinggal Menunggu Waktu
            </li>
        </ul>
    </div>
    <br>
    <h1 class="text-end">Berita makanan<span class="badge text-bg-secondary">Terbaru </span></h1>
    <br>
    <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://media.suara.com/pictures/480x260/2023/12/07/27721-cromboloni.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://media.suara.com/pictures/480x260/2024/08/20/69602-makanan-favorit-soekarno-hatta.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSnUEB9vPGMx-AfVr51SwZwx4ufip-y7_A0hg&s" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <br>
    <div class="alert alert-warning text-center" role="alert">KONTEN INI HANYA UNTUK HIBURANN!!!!!</div>
    <br>
    <br>
    <div class="card mb-3 mx-auto" style="max-width: 540px;">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTaJz0uNYZrd2zDhyUJBIf-3IjBT4Fax11Kmw&s" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">Menteri Koordinator Bidang Kemaritiman dan Investasi, Luhut Binsar Pandjaitan, bocorkan bahan bakar minyak (BBM) pengganti Pertalite.</h5>
                    <p class="card-text">PT Pertamina berencana menghapus BBM jenis Pertalite tahun ini.

                        Luhut mengatakan ambisi pemerintah mencampurkan bahan bakar minyak, atau BBM fosil dengan sari tumbuh-tumbuhan, atau menjadi bioetanol bertujuan menekan penggunaan bahan baku dari minyak fosil.

                        Saat disinggung mengenai kemungkinan Pertalite diganti dengan BBM jenis bioetanol, Luhut menyebut hal itu tidak menutup kemungkinan.</p>
                    <p class="card-text"><small class="text-body-secondary">Last updated 7 mei</small></p>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>