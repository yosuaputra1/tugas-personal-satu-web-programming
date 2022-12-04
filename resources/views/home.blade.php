<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Jago Mobil</title>
    <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
    @vite(['resources/js/app.js'])
</head>

<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand" href="#">JagoMobil</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about">Tentang Kami</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#members">Anggota</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#cars">Koleksi Mobil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#pricing">Paket Jasa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#cta">Hubungi Kami</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<header class="masthead"
        style="background-image: url('https://images.unsplash.com/photo-1607913894042-2c770aa8a0e4?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2070&q=80')">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="site-heading">
                    <h1>JagoMobil Sekolah Mengemudi</h1>
                    <span class="subheading">Siap untuk Belajar Mengemudi? Anda Berada di Tempat yang Tepat.</span>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- About Us -->
<section class="white-section" id="about">

    <div class="container-fluid" style="display: inline-block; justify-content: center; width: 70%;">
        <div class="row">
            <div class="feature-box col-sm-6">
                <h2 class="about-heading">Belajar Mengemudi dengan Ahlinya di JagoMobil</h2>
                <p class="about-text">JagoMobil adalah sekolah mengemudi terpercaya yang sudah berdiri sejak tahun 2015.Semua instruktur kami
                    dilatih untuk memberi Anda, pelanggan, kepuasan penuh dalam mengemudi sehingga
                    Anda dapat mengemudi sendiri dengan keterampilan, keamanan, kehati-hatian, dan rasa hormat pada
                    semua pengemudi dan pengguna jalan lainnya. Kami sabar dan benar-benar profesional untuk menangani tujuan Anda
                    mendapatkan SIM Anda. Layanan, Keamanan, dan Kesuksesan adalah tujuan kami semua.
                    JagoMobil berharap dapat melayani Anda.</p>
            </div>

            <div class="feature-box col-sm-6">
                <img class="about-img" src="https://images.unsplash.com/photo-1523821393989-a61a1f006c8b?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80"/>
            </div>
        </div>
    </div>

</section>


<!-- Features -->

<section id="features">
   <div class="container-fluid" style="display: inline-block; justify-content: center; width: 70%;">
       <h2 class="section-heading">Mengapa Harus Kami?</h2>
       <p>Kami adalah sekolah mengemudi yang diakui di Indonesia dan kami mengabdikan diri untuk menyelenggarakan pelajaran mengemudi yang kompeten dan aman.</p>
       <div class="row">
            <div class="feature-box col-lg-4">
                <i class="icon fas fa-check-circle fa-6x"></i>
                <h3 class="feature-title">Harga Bersahabat.</h3>
                <p>Harga kami bersaing di pasar dan menawarkan pelayanan dengan kualitas terbaik.</p>
            </div>

            <div class="feature-box col-lg-4">
                <i class="icon fas fa-user fa-6x"></i>
                <h3 class="feature-title">Instruktur Profesional dan Ramah</h3>
                <p>Instruktur kami akan membantu Anda merasa aman dan tetap termotivasi selama pelajaran.</p>
            </div>

            <div class="feature-box col-lg-4">
                <i class="icon fas fa-heart fa-6x"></i>
                <h3 class="feature-title">Garansi uang kembali.</h3>
                <p>Anda dipastikan menjadi pengemudi yang andal dan mendapat SIM atau uang kembali.</p>
            </div>
        </div>


    </div>
</section>

<!-- Available Cars -->

<section class="white-section" id="cars">
    <div class="container-fluid" style="display: inline-block; justify-content: center; width: 70%;">
        <h2 class="section-heading">Koleksi Mobil Kami</h2>
        <p>Kami memiliki koleksi mobil favorit masyarakat Indonesia baik manual dan matic.</p>
        <div class="row">
            <div class="feature-box col-lg-6">
                <img class="services-img" src="https://awsimages.detik.net.id/community/media/visual/2022/02/15/ototest-komparasi-toyota-avanza-vs-mitsubishi-xpander-4.jpeg?w=700&q=90"/>
                <h3 class="feature-title">Toyota Avanza</h3>
            </div>

            <div class="feature-box col-lg-6">
                <img class="services-img" src="https://imgx.gridoto.com/crop/0x50:1080x812/700x465/photo/2021/03/19/whatsapp-image-2021-03-19-at-61-20210319061630.jpeg"/>
                <h3 class="feature-title">Daihatsu Xenia</h3>
            </div>
        </div>
        <div class="row">
            <div class="feature-box col-lg-6">
                <img class="services-img" src="https://assets.whichcar.com.au/image/upload/s--e6JPettQ--/ar_1.9047619047619047,c_fill,f_auto,q_auto:good/c_scale,w_1200/v1/archive/whichcar/2020/04/28/2601/HR-VVTi-LXimage170782_c.jpg"/>
                <h3 class="feature-title">Honda HRV</h3>
            </div>

            <div class="feature-box col-lg-6">
                <img class="services-img" src="https://upload.wikimedia.org/wikipedia/commons/2/2e/2020_Honda_Brio_Satya_S_1.2_DD1_%2820211001%29_01.jpg"/>
                <h3 class="feature-title">Honda Brio</h3>
            </div>
        </div>
    </div>
</section>


<!-- Members -->

<section id="members">
    <div class="container-fluid" style="display: inline-block; justify-content: center; width: 70%;">
        <h2 class="section-heading">Anggota Kami</h2>
        <div class="row">
            <div class="feature-box col-lg-6">
                <img class="services-img" src="https://media.istockphoto.com/id/685132245/photo/mature-businessman-smiling-over-white-background.jpg?s=612x612&w=0&k=20&c=OJk6U-oCZ31F3TGmarAAg2jVli8ZWTagAcF4P-kNIqA="/>
                <h3 class="feature-title">Bambang Setiawan</h3>
                <p>Supervisor</p>
            </div>

            <div class="feature-box col-lg-6">
                <img class="services-img" src="https://media.istockphoto.com/id/1354898581/photo/shot-of-a-young-businessman-using-a-laptop-in-a-modern-office.jpg?b=1&s=170667a&w=0&k=20&c=TH7fxRJwwlUKThNim9J9xYwH3j_Ih8m3WPTSew-Xaw4="/>
                <h3 class="feature-title">Budi Gunawan</h3>
                <p>Trainer profesional</p>
            </div>
        </div>
        <div class="row">
            <div class="feature-box col-lg-6">
                <img class="services-img" src="https://media.istockphoto.com/id/1007763808/photo/portrait-of-handsome-latino-african-man.jpg?s=612x612&w=0&k=20&c=XPL1ukeC99OY8HBfNa_njDujOPf9Xz4yCEOo7O3evU0="/>
                <h3 class="feature-title">Faisal Akbar</h3>
                <p>Trainer profesional</p>
            </div>

            <div class="feature-box col-lg-6">
                <img class="services-img" src="https://media.istockphoto.com/id/1198252595/photo/cheerful-indian-girl-standing-at-home-office-looking-at-camera.jpg?b=1&s=612x612&w=0&k=20&c=VLnb9VnhG38WlE6XbdvInOmGgibWYR5qmp3L5wq4Dm4="/>
                <h3 class="feature-title">Emily Agustina</h3>
                <p>Trainer profesional</p>
            </div>
        </div>
    </div>

</section>


<!-- Pricing -->

<section class="white-section" id="pricing">

    <h2 class="section-heading">Harga Terbaik Hanya Untuk Anda</h2>
    <p>Kami memahami kebutuhan untuk memastikan bahwa ada keseimbangan yang adil antara biaya untuk mendapatkan lisensi
        Anda dan kualitas keterampilan akhir yang ditransfer ke calon pengemudi.</p>

    <div class="row">

        <div class="pricing-column col-lg-4 col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3>Kategori A</h3>
                </div>
                <div class="card-body">
                    <h2 class="price-text">Rp900.000,-</h2>
                    <p>15 jam latihan mengemudi</p>
                    <p>3 jam belajar teori</p>
                    <p>Garansi uang kembali</p>
                    <p>Mobil matic</p>
                    <button class="btn btn-lg btn-block btn-outline-dark" type="button">Hubungi kami</button>
                </div>
            </div>
        </div>

        <div class="pricing-column col-lg-4 col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3>Kategori B</h3>
                </div>
                <div class="card-body">
                    <h2 class="price-text">Rp1.100.000,-</h2>
                    <p>20 jam latihan mengemudi</p>
                    <p>3 jam belajar teori</p>
                    <p>Garansi uang kembali</p>
                    <p>Mobil manual/matic</p>
                    <button class="btn btn-lg btn-block btn-dark" type="button">Hubungi kami</button>
                </div>
            </div>
        </div>

        <div class="pricing-column col-lg-4">
            <div class="card">
                <div class="card-header">
                    <h3>Kategori C</h3>
                </div>
                <div class="card-body">
                    <h2 class="price-text">Harga Fleksibel</h2>
                    <p>Jam latihan fleksibel</p>
                    <p>Jam belajar teori fleksibel</p>
                    <p>Garansi uang kembali</p>
                    <p>Mobil manual/matic</p>
                    <button class="btn btn-lg btn-block btn-dark" type="button">Hubungi kami</button>

                </div>
            </div>
        </div>
    </div>

</section>


<!-- Call to Action -->

<section class="blue-section" id="cta">

    <div class="container-fluid" style="display: inline-block; justify-content: center; width: 70%;">

        <h3 class="big-heading">Satu Langkah Lagi Menjadi Jago Mengemudi.</h3>
        <button class="download-button btn btn-lg btn-dark" type="button"><i class="fab fa-whatsapp"></i> Chat Sekarang</button>
    </div>
</section>


<!-- Footer -->

<footer class="white-section" id="footer">
    <div class="container-fluid">
        <h4>Alamat</h4>
        <p>Jalan Boulevard Raya blok A no.3, Kelapa Gading, Jakarta Utara</p>
        <h4>Jadwal Belajar</h4>
        <p>Senin-Jumat (09:00 - 18:00)<br>Sabtu-Minggu (07:00 - 12:00)</p>
        <i class="social-icon fab fa-facebook-f"></i>
        <i class="social-icon fab fa-twitter"></i>
        <i class="social-icon fab fa-instagram"></i>
        <i class="social-icon fas fa-whatsapp"></i>
        <p>© Copyright 2022 JagoMobil</p>
    </div>
</footer>


</body>

</html>
