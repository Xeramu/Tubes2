
<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="images/favicon.png" type="">

  <title> Homepage </title>

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <link href="css/fonts.css" rel="stylesheet" />
  <link href="css/swiper.css" rel="stylesheet" />

  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />

</head>

<body>
  <div class="profile-wrapper">
    <header class="header-wrap">
        <div class="header-left-wrap">
          <div class="header-left-image">
            <img src="images/logo.png">
          </div>
          <ul class="header-left-list">
            <li>
              <a href="#">Beranda</a>
            </li>
            <li>
              <a href="#">Cari Teman</a>
            </li>
            <li>
              <a href="#">Rental</a>
            </li>
            <li>
              <a href="#">Kontak Kami</a>
            </li>
          </ul>
        </div>
        <div class="header-right-wrap">
          <div class="header-right-search">
            <input type="text" class="input-search-home" placeholder="Cari tempat, kota, atau destinasi..." name="search-input-home">
          </div>
          <div class="header-right-button-wrap">
            <a href="#" class="btn-link-home">Masuk</a>
            <a href="#" class="btn-link-home">Daftar</a>
          </div>
        </div>
    </header>

    <!-- mobile -->
     <header class="header-wrap-mobile">
        <button class="menu-toggle" onclick="openSidebar()">
                  <img src="images/menu-icon.png" alt="Menu">
        </button>
        <div class="header-left-search">
            <input type="text" class="input-search-home" placeholder="Cari tempat, kota, atau destinasi..." name="search-input-home">
        </div>

        <div class="header-right-button-mobile">
            <a href="#" class="btn-link-home">Pesan</a>
        </div>
      </header>

      
      <!-- SIDEBAR MOBILE -->
      <div class="mobile-sidebar" id="sidebarMenu">
        
        <button class="close-menu" onclick="closeSidebar()">
          <img src="images/close-icon.png" alt="Close">
        </button>

        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Tempat Mancing</a></li>
            <li><a href="#">Komunitas</a></li>
            <li><a href="#">Sewa Alat</a></li>
        </ul>
      </div>

      <!-- Overlay -->
      <div class="sidebar-overlay" id="overlay" onclick="closeSidebar()"></div>

    <div class="container">
      <section id="hero-section" class="hero-section">
        <div class="hero-wrapper">
            <div class="hero-image">
              <img src="images/home.jpg">
            </div>
            <div class="hero-content">
              <h1>Petualangan Memancingmu Dimulai<br>Dari Sini</h1>
              <a href="#tutorial-section" class="btn-primary">Selengkapnya</a>
            </div>
            <div class="hero-search-card">
              <h3>Halo, kamu mau kemana?</h3>

              <form class="search-options">
                
                <div class="search-item">
                  <label>Lokasi</label>
                  <select>
                    <option>Jabodetabek</option>
                    <option>Bali</option>
                    <option>Banten</option>
                    <option>Yogyakarta</option>
                    <option>DKI Jakarta</option>
                    <option>Jawa Timur</option>
                    <option>Jawa Tengah</option>
                    <option>Sumatera Barat</option>
                    <option>Sumatera Selatan</option>
                    <option>Sumatera Utara</option>
                    <option>Jambi</option>
                    <option>Riau</option>
                    <option>Kalimantan Barat</option>
                    <option>Kalimantan Timur</option>
                    <option>Kalimantan Selatan</option>
                    <option>Nusa Tenggar Barat</option>
                    <option>Nusa Tenggar Timur</option>
                    <option>Papua</option>
                  </select>
                </div>

                <div class="search-item">
                  <label>Tingkat Kesulitan</label>
                  <select>
                    <option>Pemula</option>
                    <option>Menengah</option>
                    <option>Mahir</option>
                    <option>Dewa Mancing</option>
                  </select>
                </div>

                <div class="search-item">
                  <label>Penilaian</label>
                  <select>
                    <option>⭐ ≥1</option>
                    <option>⭐ ≥2</option>
                    <option>⭐ ≥3</option>
                    <option>⭐ ≥4</option>
                    <option selected>⭐ 5</option>
                  </select>
                </div>

                <button type="submit" class="btn-search">Cari</button>
              
              </form>
            </div>

        </div>  
      </section>
        
    </div>

    <div class="informed-desc">
      <h1> Temukan Lokasi Memancing, Sewa Peralatan, dan Komunitas </h1> <br> <span class="content-desc">
                    Aktivitas menangkap ikan dengan menggunakan alat pancing, baik di perairan 
                    tawar seperti sungai, danau, kolam, maupun di laut. dengan sistem kategorisasi berdasarkan 
                    level sehingga setiap pengguna bisa mendapatkan pengalaman yang sesuai dengan kemampuan mereka.
                </span>
    </div>

    <div class="informed-content-wrap">
      <div class="informed-left-content">
          <div class="informed-img">
            <img src="images/informed1.png">
          </div>
            <p>Kenali Tempatnya!<br>Pengguna dapat mengetahui spot atau lokasi mancing 
          tertentu, baik kolam buatan, sungai, danau, maupun laut.</p>
             <a href="#" class="btn-link-home">Lihat</a>
      </div>

      <div class="informed-middle-content">
          <div class="informed-img">
            <img src="images/informed2.png">
          </div>
          <p>Cari Teman!<br>pemancing tidak perlu pergi sendiri, tetapi bisa terhubung 
            dengan orang lain yang memiliki hobi yang sama.</p>
          <a href="#" class="btn-link-home">Lihat</a>
      </div>

      <div class="informed-right-content">
          <div class="informed-img">
            <img src="images/informed3.png">
          </div>
          <p>Dapatkan Alatnya!<br>pemancing bisa tetap menikmati aktivitas 
            memancing tanpa harus memiliki semua peralatan sendiri.</p>
          <a href="#" class="btn-link-home">Lihat</a>
      </div>
    </div>

    <section id="tutorial-section" class="tutorial-section">
      <div class="tutorial-desc">
        <h1>Bagaimana Cara Memancing yang Benar ? Untuk Mendapatkan Hasil Tangkapan Terbaikmu</h1>
      </div>
      
      <div class="tutorial-wrapper">
        
        <div class="tutorial-left">
          <img src="images/tutorial.png">
        </div>
        <div class="tutorial-right">
          <div class="tutorial-right-wrap">
            <div class="icon-wrap">
              <img src="images/ikon1.png">
            </div>
        
            <div class="text-wrap">
              <h3>Siapkan Peralatan</h3>
              <p>Joran 1,5 meter, reel, senar, kail kecil, pelampung, dan umpan seperti cacing atau pelet.</p>
            </div>
          </div>

          <div class="tutorial-right-wrap">
            <div class="icon-wrap">
              <img src="images/ikon2.png">
            </div>
            <div class="text-wrap">
              <h3>Pelajari ikatan & cara memasang rig</h3>
              <p>Ikatan uni knot atau improved clinch, pasang rig dengan pelampung, pemberat, dan kail.</p>
            </div>
          </div>
          
          <div class="tutorial-right-wrap">
            <div class="icon-wrap">
              <img src="images/ikon3.png">
            </div>
            <div class="text-wrap">
              <h3>Pilih spot & baca kondisi</h3>
              <p>Spot ramah pemula seperti dermaga, atau kolam pemancingan. Perhatikan cuaca dan waktu mancing.</p>
            </div>
          </div>
          
        </div>
      </div>
    </section>

    <section class="testimoni-section">
      <h2>Apa yang Mereka Katakan?</h2>

      <div class="testimoni-wrapper">

        <div class="testimoni-card">
          <div class="testimoni-img">
            <img src="images/Agung.png" alt="Agung">
          </div>
          <h3>Agung</h3>
          <h4>Telaga Silet</h4>
          <p>Tempatnya cukup luas dengan aliran sungai yang moderat, cocok untuk pemula 
            maupun menengah. Ikan nila dan mujair mudah didapat, bahkan dengan umpan sederhana 
            seperti lumut atau pelet.</p>
        </div>

        <div class="testimoni-card">
          <div class="testimoni-img">
            <img src="images/Firman.png" alt="Firman">
          </div>
          <h3>Firman</h3>
          <h4>Situ Rawa Gede</h4>
          <p>Trip laut benar-benar menantang! Kapal sewa nyaman 
            dan kru ramah, mereka tahu spot GT dan tuna yang bagus.</p>
        </div>

        <div class="testimoni-card">
          <div class="testimoni-img">
            <img src="images/Ucup.png" alt="Ucup">
          </div>
          <h3>Ucup</h3>
          <h4>Telaga Ampera</h4>
          <p>Kolamnya bersih dan terawat, dengan sistem kiloan 
            (bayar sesuai hasil tangkapan). Cocok untuk pemula karena 
            ikan lele dan patin mudah dipancing. Ada saung dan kursi di tepi kolam, sehingga nyaman untuk keluarga.</p>
        </div>

      </div>
    </section>


    <footer class="footer">
      <div class="footer-container">
        <div class="footer-left">
          <div class="footer-brand">
            <img src="images/logo.png" class="footer-logo">
            <span class="footer-brand-text">KolamBiru.</span>
          </div>
          <p>Memancing bisa jadi hobi yang<br>menyenangkan sekaligus menenangkan</p>
        </div>

        <div class="footer-middle">
          <h4>HUBUNGI KAMI</h4>
          <p>kolamBiru10@gmail.com</p>
          <p>Kota Bandung, Jawa Barat</p>
          <p>0812-3976-513</p>
        </div>

        <div class="footer-right">
          <h4>IKUTI KAMI</h4>
          <div class="footer-social">
            <a href="#"><img src="images/instagram.png" alt="Instagram"></a>
            <a href="#"><img src="images/facebook.png" alt="Facebook"></a>
            <a href="#"><img src="images/twitter.png" alt="Twitter X"></a>
          </div>
        </div>

      </div>

      <div class="footer-line"></div>

      <p class="footer-copy">Copyright © 2025 KolamBiru. All Rights Reserved.</p>
    </footer>



  <script>
    function openSidebar() {
      document.getElementById("sidebarMenu").style.left = "0";
      document.getElementById("overlay").style.display = "block";
    }

    function closeSidebar() {
      document.getElementById("sidebarMenu").style.left = "-250px";
      document.getElementById("overlay").style.display = "none";
    }
  </script>



</body>
</html>