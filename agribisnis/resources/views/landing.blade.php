<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <title>Landing Page</title>
    <!-- bootstrap css -->
    <!-- Bootstrap v4.4.1 (https://getbootstrap.com/) -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap_css/bootstrap.min.css') }}">    
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>

<body>
    <!-- Navbar -->
    <navbar class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
            <a href="{{ url('/') }}" class="navbar-brand"><img src="{{ asset('images/logo.png') }}" class="img-fluid" alt="Deskripsi Gambar"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent"
                aria-controls="navBarContent" aria-expanded="false" aria-label="Toggle Navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a href="#" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item ">
                        <a href="#services" class="nav-link">Layanan</a>
                    </li>
                    <li class="nav-item ">
                        <a href="#product" class="nav-link">Product</a>
                    </li>
                    <li class="nav-item ">
                        <a href="#about" class="nav-link">About</a>
                    </li>
                    <li class="nav-item ">
                        <a href="#contact" class="nav-link">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </navbar>

    <!-- header -->
    <header class="jumbotron jumbotron-fluid background-header">
        <div class="container-fluid text-center">
            <h1 class="display-3" style="color:aliceblue; ">Solusi Terbaik Bisnismu</h1>
            <p class="lead" style="font-weight: bold;color:#fff;">Menunjang Kemajuan Dunia Agribisnis menggunakan teknologi.</p>
            <a href="#" class="btn button-primer btn-lg" role="button">Go To Dashboard</a>
            <a href="#services" class="btn btn-secondary btn-lg" role="button">Layanan</a>
        </div>
    </header>

    <!-- service -->
    <section id="services" class="container-fluid service-style">
        <div class="row text-center">
            <div class="col-12 pb-4 container-xxl">
                <h2 class="display-4" style="margin-top: 4rem!important ;">Pilih Layanan</h2>
                <!-- margin-top untuk mengatur fokus-->
            </div>
            <div class="col-12 col-sm-6 col-lg-3">
                <span class="fa-stack fa-2x"> <!-- memperbesar ikon -->
                    <i class="fas fa-circle fa-stack-2x text-green"></i>
                    <i class="fa-solid fa-list fa-stack-1x text-white"></i>
                </span>
                <h3 class="mt-4 text-green">Manajemen Lahan</h3>
                <p>Pemantauan Lahan tanam</p>
            </div>

            <div class="col-12 col-sm-6 col-lg-3">
                <span class="fa-stack fa-2x"> <!-- memperbesar ikon -->
                    <i class="fas fa-circle fa-stack-2x text-green"></i>
                    <i class="fa-solid fa-laptop-code fa-stack-1x text-white"></i>
                </span>
                <h3 class="mt-4 text-green">Referensi</h3>
                <p>Kumpulan sumber tanaman dan perikanan</p>
            </div>

            <div class="col-12 col-sm-6 col-lg-3">
                <span class="fa-stack fa-2x"> <!-- memperbesar ikon -->
                    <i class="fas fa-circle fa-stack-2x text-green"></i>
                    <i class="fa-solid fa-money-bill fa-stack-1x text-white"></i>
                </span>
                <h3 class="mt-4 text-green">Pengingat Waktu</h3>
                <p>Pengingat waktu dokumen yang harus diperbarui</p>
            </div>

            <div class="col-12 col-sm-6 col-lg-3">
                <span class="fa-stack fa-2x"> <!-- memperbesar ikon -->
                    <i class="fas fa-circle fa-stack-2x text-green"></i>
                    <i class="fa-solid fa-chart-line fa-stack-1x text-white"></i>
                </span>
                <h3 class="mt-4 text-green">Manajemen Keuangan</h3>
                <p>Sistem pencatatan biaya</p>
            </div>

            <div class="col-12 pt-3 mb-5">
                <a href="#" class="btn text-white bg-red btn-lg" role="button">Layanan Lainnya</a>
            </div>

        </div>
    </section>

    <!-- product -->
<section id="product" class="container-fluid py-4 px-4">
    <div class="row text-center">
        <div class="col-12 pb-4">
            <h2 class="display-4 text-center mb-5" style="margin-top: 4rem !important;">Produk Kami</h2>
        </div>
        <!-- produk 1 -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <img class="card-img-top" style="max-height: 400px;" src="images/img1.jpg" alt="Produk 1">
                <div class="card-body" style="min-height: 250px; display: flex; flex-direction: column; justify-content: space-between;">
                    <h4 class="card-title">Nusantara Grain</h4>
                    <p class="card-text">Beras premium hasil panen lokal dari ladang pertanian tanpa proses penambahan bahan apapun</p>
                </div>
                <div class="card-footer">
                    <a href="#" class="btn button-sekunder">Detail & Harga</a>
                </div>
            </div>
        </div>
        <!-- produk 2 -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <img class="card-img-top" style="max-height: 400px;" src="images/img2.jpg" alt="Produk 2">
                <div class="card-body" style="min-height: 250px; display: flex; flex-direction: column; justify-content: space-between;">
                    <h4 class="card-title">Tepung AlamiKu</h4>
                    <p class="card-text">Tepung serbaguna yang 100% alami dan sehat. Diolah dari tangan petani lokal untuk citarasa original dan hasil maksimal</p>
                </div>
                <div class="card-footer">
                    <a href="#" class="btn button-sekunder">Detail & Harga</a>
                </div>
            </div>
        </div>
        <!-- produk 3 -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <img class="card-img-top" style="max-height: 400px;" src="images/img3.jpg" alt="Produk 3">
                <div class="card-body" style="min-height: 250px; display: flex; flex-direction: column; justify-content: space-between;">
                    <h4 class="card-title">Kedelai Nusantara</h4>
                    <p class="card-text">Kedelai pilihan untuk kebutuhan tempe dan tahu. Telah melewati sortir untuk mendapatkan kualitas terbaik</p>
                </div>
                <div class="card-footer">
                    <a href="#" class="btn button-sekunder">Detail & Harga</a>
                </div>
            </div>
        </div>
    </div>
</section>

    <!-- about -->
    <section id="about" class="bg-light">
        <div class="container-fluid">
            <h2 class="display-4 text-center mb-5" style="margin-top:5rem!important ;">Tentang kami</h2>
        <div class=" row no-gutters">
                <!--text pertama-->
                <div class="col-12 col-md-6">
                    <div style="padding: 15px;">
                        <h3 class="display-5 text-center text-green mt-3 mb-3"></h3>
                        <p class="text-center">
                        Kami adalah Tim yang memiliki sebuah inisiatif agribisnis milenial yang berfokus pada inovasi, keberlanjutan, dan pemberdayaan generasi muda untuk mengembangkan sektor pertanian modern. Berbekal semangat, teknologi, dan wawasan pasar terkini, kami hadir untuk menjembatani potensi agrikultur Indonesia dengan kebutuhan dunia yang terus berkembang.
                        <br>
                        Kami percaya bahwa pertanian bukan hanya masa lalu kita, tetapi juga masa depan yang cerah jika dikelola dengan kreativitas dan inovasi. Dengan bersama-sama, kita dapat membangun pertanian modern yang menjadi tulang punggung perekonomian Indonesia.
                        </p>
                        <div class="col-12 text-center">
                            <a href="#" class="btn bg-red btn-lg text-white" role="button">Lihat Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <!--gambar pertama-->
                <div class="col-12 col-md-6">
                    <div class=" vh-100 cover" style="background-image: url( '{{asset('images/banner3.jpg')}}' );"></div>
                </div>
                <!-- gambar kedua -->
                <div class="col-12 col-md-6">
                    <div class=" vh-100 cover" style="background-image: url('{{ asset('images/banner2.jpg') }}');"></div>
                </div>
                <!-- text kedua -->
                <div class="col-12 col-md-6">
                    <div style="padding: 15px;">

                        <h3 class="display-5 text-center text-green mt-3 mb-3">
                            Visi Kami </h3>
                        <p style="text-align: justify;">
                        Visi kami adalah menciptakan ekosistem agribisnis yang mandiri, adaptif, dan inklusif, di mana generasi muda dapat berkontribusi secara aktif dalam mengembangkan pertanian berbasis teknologi dan nilai tambah.
                        <br>
                        Melalui pendekatan digital, kolaborasi komunitas, dan praktik agribisnis berkelanjutan, kami menyediakan layanan mulai dari pelatihan, distribusi hasil panen, hingga penerapan teknologi cerdas di sektor pertanian.

                        </p>
                        <div class="col-12 pt-3 text-center">
                            <a href="" class="btn bg-red btn-lg text-white">Lihat Tim Kami</a>
                        </div>
                    </div>
                </div>
        </div>
        </div>
    </section>

    <!-- contact-->
    <section id="contact" class="container-fluid text-center" style="background-color: #e9f2eb; padding-top: 25px;">
        <h2 class="display-4 pb-4">Hubungi Kami Sekarang</h2>
        <p class="lead pb-3">Mari bergabung dengan kami dalam revolusi agribisnis milenial untuk menciptakan dampak yang nyata bagi generasi saat ini dan mendatang! </p>
        <a href="#" class="btn button-primer btn-lg mb-4">WhatsApp Kami</a>
    </section>

    <!-- Footer -->
    <footer class="bg-dark">
        <div class="col-lg-12" style="padding:10px">
            <div style="text-align:center;">
                <a href="#" class="text-light" style="padding: 5px;"> <i class="fab fa-facebook"></i></a>
                <!-- padding untuk mengatur jarak antar icon-->
                <a href="#" class="text-light" style="padding: 5px;"> <i class="fab fa-twitter"></i></a>
                <a href="#" class="text-light" style="padding: 5px;"><i class="fab fa-instagram"></i></a>
            </div>
            <p class="text-center text-secondary">Copyright &copy yogatama 2024</p>
        </div>

    </footer>

    <!-- Script -->
    <script src="js/bootstrap_js/jquery-3.4.1.slim.min.js"></script>
    <script src="js/bootstrap_js/popper.min.js""></script>
     <script src=" js/bootstrap_js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/911f5f67ff.js" crossorigin="anonymous"></script>
</body>

</html>