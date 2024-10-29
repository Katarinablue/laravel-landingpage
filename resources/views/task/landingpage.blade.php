<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="landingpage.css" />
    <title>Web Photografer | Responsif Portfolio</title>
  </head>
  <body>
    <!-- Navigation -->
    <nav>
      <div class="nav__content">
        <div class="logo"><a href="#">Azka Amar</a></div>
        <input type="checkbox" id="check" />
        <label for="check" class="checkbox">
          <i class="ri-menu-line"></i>
        </label>
        <ul>
          <li><a href="#home">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#resume">Skill</a></li>
          <li><a href="#portfolio">Portfolio</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </div>
    </nav>

    <!-- Home Section -->
    <section id="home" class="section">
      <div class="section__container">
        <div class="content">
          <p class="subtitle">HALO</p>
          <h1 class="title">
            Saya <span>Azka Amar<br />adalah seorang</span> Photografer
          </h1>
          <p class="description">
            Selamat datang di website photographer saya, 
            Saya Azka Amar,Setiap proyek yang saya ambil 
            adalah kesempatan untuk bercerita melalui gambar.
            Saya percaya bahwa setiap foto memiliki kekuatan
            untuk menyampaikan emosi, memperkuat pesan, dan menciptakan kenangan abadi. 
            Portofolio ini menampilkan berbagai karya saya yang mencerminkan dedikasi saya
            terhadap seni fotografi dan kepuasan klien.
          </p>
          <div class="action__btns">
           
          </div>
        </div>
        <div class="image">
          <img src="89268ba496c2f64ac14e055b97cc2ae9.jpg" alt="profile" />
        </div>
      </div>
    </section>

    <!-- About Section -->
    <section id="about" class="section">
      <div class="section__container">
        <h2>About Me</h2>
        <p>
          Saya adalah seorang fotografer profesional yang mengkhususkan diri dalam menangkap momen-momen berharga dan menjadikannya abadi. 
          Dengan latar belakang seni visual dan pengalaman bertahun-tahun di berbagai bidang fotografi, saya memiliki kemampuan untuk bercerita melalui lensa kamera.
        </p>
      </div>
    </section>

    <!-- Skill Section -->
    <section id="resume" class="section">
      <div class="section__container">
        <h2>Skill</h2>
        <ul class="resume__list">
          <li>
            <h3>Fotografi Potret:</h3>
            <p>
              Mengabadikan karakter dan kepribadian melalui gambar.
            </p>
          </li>
          <li>
            <h3>Fotografi Perjalanan:</h3>
            <p>
              Menangkap keindahan dan budaya dari berbagai belahan dunia.
            </p>
          </li>
          <li>
            <h3>Fotografi Pernikahan:</h3>
            <p>
              Mendokumentasikan cinta dan emosi dalam setiap detik yang berharga.
            </p>
          </li>
        </ul>
      </div>
    </section>

    <!-- Portfolio Section -->
    <section id="portfolio" class="section">
      <div class="section__container">
        <h2>Portfolio</h2>
        <div class="portfolio__grid">
          <div class="portfolio__item">
            <img src="7c9ea8dbe755d612cf0d0293a1876e1c.jpg" alt="Project 1" />
            <h3>Akad Nikah</h3>
            <p>Memfoto pengantin Pria</p>
          </div>
          <div class="portfolio__item">
            <img src="9f4c726878d9fbf335dac79f378e734c.jpg" alt="Project 2" />
            <h3>instagram photo</h3>
            <p>Foto kece</p>
          </div>
          <div class="portfolio__item">
            <img src="31d8433b4a514d821cddaf3e908fcc87.jpg" alt="Project 3" />
            <h3>Foto Pemandangan</h3>
            <p>Pemandangan sawah</p>
          </div>
          <div class="portfolio__item">
            <img src="fc184bd48558ef1deed9dd64e1512e45.jpg" alt="Project 4" />
            <h3>Photo estetik</h3>
            <p>Estetik malam</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="section">
      <div class="section__container">
        <h2>Contact</h2>
        <p>If you'd like to get in touch, feel free to contact me through the form below.</p>
        <form class="contact__form">
          <input type="text" placeholder="Your Name" required />
          <input type="email" placeholder="Your Email" required />
          <textarea placeholder="Your Message" required></textarea>
          <button type="submit">Send Message</button>
        </form>
      </div>
    </section>
  </body>
</html>