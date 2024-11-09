<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <title>Landing Page</title>
    <!-- bootstrap css -->
    <!-- Bootstrap v4.4.1 (https://getbootstrap.com/) -->
    <!-- <link rel="stylesheet" href="css/bootstrap_css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap_css/bootstrap.min.css') }}">

    <style>
        body {
            padding-top: 56px;
        }

        .jumbotron {
            background-color: cadetblue;
        }

        .background-header {
            background-image: url( '{{ asset("images/header.jpg") }}');
            background-color: #fafbfc;
            height: 400px;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            position: relative;
        }

        .button-primer {
            background-color: #00bd8e;
            border-color: #0b9b6b;
            color: #fff;
            text-shadow: 0px 0px;
        }

        .button-primer:hover {
            background-color: #038c6a;
            color: #fff;
            text-shadow: 0px 0px;
        }

        .service-style {
            margin-top: 15px;
            background-color: #fafbfc;
        }

        .text-green {
            color: #0b9b6b;
        }

        .bg-red {
            background-color: #f25757;
        }

        h2:before,
        h2:after {
            background-color: #0b9b6b;
            content: " ";
            display: inline-block;
            height: 1px;
            position: relative;
            vertical-align: middle;
            width: 25%;
        }

        h2::before {
            right: 0.5em;
            margin-left: -50%;
        }

        h2::after {
            left: 0.5em;
            margin-right: -50%;
        }

        .button-sekunder {
            background-color: transparent;
            background-color: #dbdbdb;
            color: #0b9b6b;
        }

        .button-sekunder:hover {
            background-color: #0b9b6b;
            background-color: #dbdbdb;
            color: #fff;
        }

        .cover {
            background: no-repeat center/cover;
        }

/* STYLE UNTUK TAMPILAN HP */
        /* Tambahkan media query untuk layar di bawah 377px */
@media (max-width: 377px) {
    /* Navbar */
    .navbar-brand img {
        width: 80px; /* Perkecil ukuran logo */
    }

    /* Jumbotron */
    .jumbotron .display-3 {
        font-size: 1.5rem; /* Perkecil ukuran font heading */
    }
    .jumbotron .lead {
        font-size: 1rem;
    }
    
    /* Service Section */
    #services h2.display-4 {
        font-size: 1.8rem;
    }
    #services h3 {
        font-size: 1.2rem;
    }
    #services p {
        font-size: 0.9rem;
        padding: 0 10px; /* Tambahkan padding untuk membatasi teks */
    }

    /* Product Section */
    #product h2.display-4 {
        font-size: 1.8rem;
    }
    #product .card-title {
        font-size: 1.1rem;
    }
    #product .card-text {
        font-size: 0.9rem;
    }

    /* About Section */
    #about h2.display-4 {
        font-size: 1.8rem;
    }
    #about h3 {
        font-size: 1.3rem;
    }
    #about p {
        font-size: 0.9rem;
        padding: 0 10px;
    }

    /* Contact Section */
    #contact h2.display-4 {
        font-size: 1.8rem;
    }
    #contact .lead {
        font-size: 1rem;
    }

    /* Footer */
    footer p {
        font-size: 0.9rem;
    }
}


/* Memastikan halaman tidak bergeser ke kanan */
html, body {
    overflow-x: hidden; /* Mencegah pergeseran horizontal */
}

/* Atur ulang margin dan padding */
.container-fluid, .container, .row, .col-12, .col-sm-6, .col-md-4, .col-lg-3 {
    padding-left: 0;
    padding-right: 0;
    margin-left: 0;
    margin-right: 0;
    box-sizing: border-box; /* Menghindari elemen melampaui lebar viewport */
}

/* Atur elemen-elemen besar */
.jumbotron {
    padding-left: 15px;
    padding-right: 15px;
}

.navbar {
    padding-left: 15px;
    padding-right: 15px;
}

.card {
    margin: 0 auto; /* Pastikan card berada di tengah */
    max-width: 100%; /* Sesuaikan ukuran card agar tidak melebihi viewport */
}

/* Aturan tambahan untuk memastikan elemen tidak melebar */
@media (max-width: 377px) {
    /* Sesuaikan tombol agar tidak melampaui lebar viewport */
    .btn {
        max-width: 100%;
        white-space: normal; /* Membuat teks tombol bisa wrap ke baris berikutnya */
    }

    /* Pastikan semua bagian gambar diatur dengan baik */
    .card-img-top {
        width: 100%; /* Pastikan gambar produk tidak melampaui card */
        height: auto;
    }

    /* Atur ukuran font dan margin pada bagian teks */
    h1, h2, h3, .display-3, .display-4, .lead {
        font-size: smaller;
    }
}

    </style>
</head>

<body>
    <!-- Navbar -->
    <navbar class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
            <a href="{{ url('/') }}" class="navbar-brand"><img src="{{ asset('images/logo.png') }}" alt="Deskripsi Gambar"></a>
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
                        <a href="{{ url('blog.about') }}" class="nav-link">About</a>
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
                <h3 class="mt-4 text-green">Fasilitas Oke</h3>
                <p>Fasilitas yang kami sediakan sangat lengkap dan nyaman</p>
            </div>

            <div class="col-12 col-sm-6 col-lg-3">
                <span class="fa-stack fa-2x"> <!-- memperbesar ikon -->
                    <i class="fas fa-circle fa-stack-2x text-green"></i>
                    <i class="fa-solid fa-laptop-code fa-stack-1x text-white"></i>
                </span>
                <h3 class="mt-4 text-green">Modul Lengkap</h3>
                <p>Lebih dari 2000 modul tersedia</p>
            </div>

            <div class="col-12 col-sm-6 col-lg-3">
                <span class="fa-stack fa-2x"> <!-- memperbesar ikon -->
                    <i class="fas fa-circle fa-stack-2x text-green"></i>
                    <i class="fa-solid fa-money-bill fa-stack-1x text-white"></i>
                </span>
                <h3 class="mt-4 text-green">Biaya terjangkau</h3>
                <p>Biaya sangat terjangkau</p>
            </div>

            <div class="col-12 col-sm-6 col-lg-3">
                <span class="fa-stack fa-2x"> <!-- memperbesar ikon -->
                    <i class="fas fa-circle fa-stack-2x text-green"></i>
                    <i class="fa-solid fa-chart-line fa-stack-1x text-white"></i>
                </span>
                <h3 class="mt-4 text-green">Terarah</h3>
                <p>Sistem pembelajaran terarah</p>
            </div>

            <div class="col-12 pt-3 mb-5">
                <a href="" class="btn text-white bg-red btn-lg" target="_blank" role="button">Layanan Lainnya</a>
            </div>

        </div>
    </section>

    <!-- product -->
    <section id="product" class="container">
        <div class="row text-center">
            <div class="col-12 pb-4">
                <h2 class="display-4 text-center mb-5" style="margin-top: 4rem!important ;">Produk Kami</h2>
            </div>
            <!-- produk 1-->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img class="card-img-top" style="max-height:400px ;" src="images/img1.jpg" alt="Produk 1">
                    <div class="card-body" style="min-height: 250px;"> <!--agar ukuran produk sejajar-->
                        <h4 class="card-title">Membuat Aplikasi Android berbasis lokasi dengan Android Studio</h4>
                        <p class="card-text">Belajar membuat aplikasi android (Kotlin) berbasis lokasi dengan studi
                            kasus aplikasi presensi digital</p>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="btn button-sekunder">Detail & Harga</a>
                    </div>
                </div>
            </div>
            <!-- produk 2 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img class="card-img-top" style="max-height:400px ;" src="images/img2.jpg" alt="Produk 2">
                    <div class="card-body" style="min-height: 250px;">
                        <h4 class="card-title">Membuat Sistem Informasi perpustakaan menggunakan laravel 6</h4>
                        <p class="card-text">Belajara langkah demi langkah membangun sistem informasi perpustakaan
                            dengan laravel 6</p>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="btn button-sekunder">Detail & Harga</a>
                    </div>
                </div>
            </div>
            <!-- Produk 3-->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img class="card-img-top" style="max-height:400px ;" src="images/img3.jpg" alt="Produk 3">
                    <div class="card-body" style="min-height: 250px;">
                        <h4 class="card-title">Membangun website toko online berbasis CodeIgniter</h4>
                        <p class="card-text">Belajar membangun website toko online menggunakan framework CodeIgniter</p>
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
                        <h3 class="display-5 text-center text-green mt-3 mb-3">Perjalanan Bisnis Kami</h3>
                        <p class="text-center">Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                            Provident
                            atque totam blanditiis ea illo
                            possimus incidunt repudiandae ducimus obcaecati, dolore, eius, cumque quia corrupti animi
                            nisi.
                            Deleniti
                            doloremque magnam eveniet!. Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi
                            dolorem voluptatum ea debitis porro vel illum amet eligendi, voluptatem fuga voluptatibus
                            quas
                            sunt odit corrupti! Aliquam assumenda at fugit fugiat?</p>
                        <div class="col-12 text-center">
                            <a href="#" class="btn bg-red btn-lg text-white" target="_blank" role="button">Lihat Selengkapnya</a>
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
                            Tim Kami </h3>
                        <p style="text-align: justify;">
                            ini merupakan deskripsi dari tim kami
                            ini merupakan deskripsi dari tim kami
                            ini merupakan deskripsi dari tim kami
                            ini merupakan deskripsi dari tim kami
                            ini merupakan deskripsi dari tim kami
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
        <p class="lead pb-3">Kirim pesan untuk bergabung bersama kami.</p>
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
            <p class="text-center text-secondary">Copyright &copy CodePolitan 2024</p>
        </div>

    </footer>

    <!-- Script -->
    <script src="js/bootstrap_js/jquery-3.4.1.slim.min.js"></script>
    <script src="js/bootstrap_js/popper.min.js""></script>
     <script src=" js/bootstrap_js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/911f5f67ff.js" crossorigin="anonymous"></script>
</body>

</html>