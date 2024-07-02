<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="style.css" />
    <title>Hotel Murahayu</title>

    
    <script>
    function preventBack() { window.history.forward() };
    setTimeout("preventBack()", 0);
    window.onunl oad = function () { null; }
  </script>

  
</head>
<body>
    <nav>
        <div class="nav__bar">
            <div class="nav__header">
                <div class="logo nav__logo">
                    <div>H</div>
                    <span>HOTEL<br>MURAHAYU</span>
                </div>
                <div class="nav__menu__btn" id="menu-btn">
                    <i class="ri-menu-line"></i>
                </div>
            </div>
            <ul class="nav__links" id="nav-links">
                <li><a href="index.php">Home</a></li>
                <li><a href="LOGIN_USER/login.php">Login</a></li>
            </ul>
        </div>
    </nav>

    <header class="header" id="home">
        <div class="section__container header__container">
            <p class="section__subheader">SELAMAT DATANG</p>
            <h1>Basis yang Sempurna <br />Untuk Anda</h1>
          
        </div>
    </header>

    <section class="room__container" id="room">
        <p class="section__subheader">KAMAR</p>
        <h2 class="section__header">Beberapa Pilihan Kamar</h2>
        <div class="room__grid">
          <div class="room__card" id="ds">
            <img src="assets/room-1.jpg" alt="room" />
            <div class="room__card__details">
              <div>
                <h4>Biasa</h4>
                <p>Kamar dengan aura modern dan dilengkapi dengan sofa untuk bersantai.</p>
                <br>
                <a href="LOGIN_USER/login.php" class="pesan" onclick="klik()">Pesan</a>
              </div>
              <h3>Rp.900.000<span>/malam</span></h3>
            </div>
          </div>
          <div class="room__card" id="fs">
            <img src="assets/room-2.jpg" alt="room" />
            <div class="room__card__details">
              <div>
                <h4>VIP</h4>
                <p>Kamar yang didesain mewah dan dilengkapi dengan 2 tempat tidur.</p>
                <br>
                <a href="LOGIN_USER/login.php" class="pesan" onclick="klik()">Pesan</a>

              </div>
              <h3>Rp.1.500.000<span>/malam</span></h3>
            </div>
          </div>
          <div class="room__card" id="lp">
            <img src="assets/room-3.jpg" alt="room" />
            <div class="room__card__details">
              <div>
                <h4>President Class</h4>
                <p>
                  Kamar yang didesain bagaikan kamar dari istana kerajaan inggris.
                </p>
                <br>
                <a href="LOGIN_USER/login.php" class="pesan" onclick="klik()">Pesan</a>

              </div>
              <h3>Rp.2.000.000<span>/malam</span></h3>
            </div>
          </div>
        </div>
      </section>

      <script>
        function klik() {
          alert("ANDA HARUS LOGIN DAHULU !")
          
        }
      </script>


  
      <section class="intro">
        <div class="section__container intro__container">
          <div class="intro__cotent">
            <p class="section__subheader">INTRO VIDEO</p>
            <h2 class="section__header">Temukan Kamar Mewah di Hotel Kami</h2>
            <p class="section__description">
              Apakah anda mencari tempat menginap yang nyaman ?? Hotel Murahayu adalah solusinya. Disini anda dapat menemukan semua jenis kamar mewah mulai dari kelas Biasa, VIP, Bahkan President Class. Hhmmmm, menarik bukann ?? Maka dari itu, segera check in sekarangg !!!  
            </p>
          </div>
          <div class="intro__video">
            <video src="assets/luxury.mp4" autoplay muted loop></video>
          </div>
        </div>
      </section>
  
      <section class="section__container feature__container" id="feature">
        <p class="section__subheader">FASILITAS</p>
        <h2 class="section__header">FITUR INTI</h2>
        <div class="feature__grid">
          <div class="feature__card">
            <span><i class="ri-thumb-up-line"></i></span>
            <h4>Memiliki Peringkat Tinggi</h4>
            <p>
              Hotel kami menjadi yang pas pilihan bagi anda dengan ribuan ranting dan ulasan positif
            </p>
          </div>
          <div class="feature__card">
            <span><i class="ri-time-line"></i></span>
            <h4>Jam Istirahat</h4>
            <p>
             Kami memahami bahwa kedamaia dan istirahat tanpa gangguan sangat penting umtuk pengalaman yang menyegarkan.
            </p>
          </div>
          <div class="feature__card">
            <span><i class="ri-map-pin-line"></i></span>
            <h4>Lokasi Terbaik</h4>
            <p>
             Hotel kami memiliki 34 cabang yang tersebar dari sabang sampai merauke dan berada di lokasi yang strategis.
            </p>
          </div>
          <div class="feature__card">
            <span><i class="ri-close-circle-line"></i></span>
            <h4>Pembatalan</h4>
            <p>
              Kami paham bahwa rencana perjalanan anda dapat berubah, maka dari itu anda dapat melakukan pembatalan tanpa denda.
            </p>
          </div>
          <div class="feature__card">
            <span><i class="ri-wallet-line"></i></span>
            <h4>Opsi Pembayaran</h4>
            <p>
              Kami menerima semua jenis metode pembayaran mulai dari cash, Qris, E-Wallet, transfer, dll.
            </p>
          </div>
          <div class="feature__card">
            <span><i class="ri-coupon-line"></i></span>
            <h4>Penawaran Khusus</h4>
            <p>
              Kami akan memberikan penawaran khusus bagi anda yang akan memesan hotel untuk pertama kalinya.
            </p>
          </div>
        </div>
      </section>
  
    
  
      <footer class="footer">
        <div class="section__container footer__container">
          <div class="footer__col">
            <div class="logo footer__logo">
              <div>H</div>
              <span>HOTEL<br />MURAHAYU</span>
            </div>
            <p class="section__description">
              Rasakan Kenyamanan yang berbeda dengan hotel lainnya. Nikmati semua fasilitas yang ada dihotel kami.
            </p>
            <ul class="footer__socials">
              <li>
                <a href="https://wa.me/083834625863"><i class="ri-whatsapp-fill"></i></a>
              </li>
              <li>
                <a href="https://instagram.com/lathf.nyx?igshid=NGExMmI2YTkyZg=="><i class="ri-instagram-line"></i></a>
              </li>
              <li>
                <a href="https://www.facebook.com/lathif.nurhidayat.1"><i class="ri-facebook-fill"></i></a>
              </li>
             
            </ul>
          </div>
          
          <div class="footer__col">
            <h4>Contact Us</h4>
            <div class="footer__links">
              <li>
                <span><i class="ri-phone-fill"></i></span>
                <div>
                  <h5>Phone Number</h5>
                  <p>0838 3452 4245</p>
                </div>
              </li>
              <li>
                <span><i class="ri-record-mail-line"></i></span>
                <div>
                  <h5>Email</h5>
                  <p>hotelmurahayu@gmail.com</p>
                </div>
              </li>
              <li>
                <span><i class="ri-map-pin-2-fill"></i></span>
                <div>
                  <h5>Location</h5>
                  <p>Ditempat tersembuyi</p>
                </div>
              </li>
            </div>
          </div>
        </div>
        <div class="footer__bar">
          Copyrigh @ 2023 Jika banyak kekurangan maka tambahlah agar jadi kelebihan
        </div>
      </footer>
  
      <script src="https://unpkg.com/scrollreveal"></script>
    <script src="main.js"></script>
</body>
</html>