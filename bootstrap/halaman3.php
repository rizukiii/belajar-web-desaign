<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Web Bootstrap : halaman 3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <!-- Start Navbar -->
        <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Website Berita</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="./halaman1.php">laman 1</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./halaman2.php">Laman 2</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./halaman3.php">Laman 3</a>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                        </li> -->
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End NAvbar -->

        <!-- Start Carousel -->
        <div id="carouselExampleIndicators" class="carousel slide mt-5">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner" style="height:600px">
                <div class="carousel-item active">
                    <img src="https://cdn.dribbble.com/users/6614283/screenshots/19541274/media/2f00c739ce867996079257675ce78ceb.png?resize=400x300&vertical=center" class="d-block w-100 " alt="...">
                </div>
                <div class="carousel-item">
                    <img src="https://dynamic.brandcrowd.com/asset/logo/77b27cd6-fa83-4030-86e8-8e4754f7f90d/logo-search-grid-1x?logoTemplateVersion=2&v=638393282743400000" class="d-block w-100 " alt="...">
                </div>
                <div class="carousel-item">
                    <img src="https://dynamic.brandcrowd.com/asset/logo/24be8f7c-d03d-47a2-8c23-161596636a0b/logo-search-grid-1x?logoTemplateVersion=2&v=638587279704170000" class="d-block w-100 " alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <!-- End Carousel -->

        <!-- Start Breadcrumb -->
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb" class="my-3 fw-bold">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Library</li>
            </ol>
        </nav>
        <!-- End BreadCrumb -->

        <!-- Start Card -->
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card h-100">
                    <img src="https://jogjaprov.go.id/storage/files/shares/Foto%20Humas%20DIY/2024/8.%20Agustus/20082024%20-%20Desa%20Wisata/thumbnail.jpg" class="card-img-top" alt="..." style="height: 230px;">
                    <div class="card-body">
                        <h5 class="card-title">Portal Resmi</h5>
                        <p class="card-text">Berita ini Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi dolorum optio sapiente maxime commodi fugiat ab illum atque id ex? Dignissimos officia aliquid nesciunt unde molestias facere dolores neque eum? </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="https://www.idx.co.id/media/0txdoaa5/hutpm.jpg" class="card-img-top" alt="..." style="height: 230px;">
                    <div class="card-body">
                        <h5 class="card-title">Wisudawan</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="https://asset-2.tstatic.net/tribunnews/foto/bank/images2/pengacara-iptu-rudiana-kini-akui-helm-eky-pecah.jpg" class="card-img-top" alt="..." style="height:230px;">
                    <div class="card-body">
                        <h5 class="card-title">Ditantang Eky Ciut</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="https://assets-studiohub.kompas.com/video2019/73f614858444241bddf143/0e8f2aea732b51fd9d7fe01f288394b4/t_0e8f2aea732b51fd9d7fe01f288394b4.jpg" class="card-img-top" alt="..." style="height:230px;">
                    <div class="card-body">
                        <h5 class="card-title">Kalau macam macam berarti kpu masuk angin</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="https://images.hukumonline.com/frontend/lt66c476d922ecf/large_lt66c4783dbed0b.jpg" class="card-img-top" alt="..." style="height:230px;">
                    <div class="card-body">
                        <h5 class="card-title">Laporan Perkembangan Dunia Hukum Indonesia Terkini | Hukumonline</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="https://unair.ac.id/wp-content/uploads/2024/08/WISUDAWAN-Brigitta-Stella-Audrynachristie.webp" class="card-img-top" alt="..." style="height:230px;">
                    <div class="card-body">
                        <h5 class="card-title">Berita Archives - Universitas Airlangga Official Website</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Card -->

        <!-- Start Pagination -->
        <nav aria-label="Page navigation example" class="mt-5">
            <ul class="pagination justify-content-center">
                <li class="page-item disabled">
                    <a class="page-link">Previous</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                </li>
            </ul>
        </nav>
        <!-- End Pagination -->

        <!-- Start footer -->
        <footer class="card bg-bag-tertiary mb-1 p-3 mt-3 ">
            <div class="text-center">&copy; COPYTRIGHT : Rizqy</div>
        </footer>
        <!-- End Footer -->

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>