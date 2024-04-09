


                    
!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <!-- box icons -->
        <Link
            href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
            rel="stylesheet"
        />
        <!--custom css>-->
        <link rel="stylesheet" href="{{ asset('/css/style.css') }}" />

        <!-- breakpoint -->
        <link rel="stylesheet" href="{{ asset('/css/breakpoint.css') }}" />
        
                <title>My Portfolio</title>
    </head>
            <body>
        <!-- Header -->
                <header class="header">
                    <a href="#" class="logo">Portofolio<span>Paiy.</span></a>

                    <i class="bx bx-menu" id="menu-icon"></i>

                    <nav class="navbar">

                    </div>
                        @if (Route::has('login'))
                            <nav class="-mx-3 flex flex-1 justify-end">
                            <a href="#home" class="active">Home</a>
                    <a href="#about">About</a>
                    <a href="#services">Services</a>
                    <a href="#portfolio">Portfolio</a>
                    <a href="#contact">Contact</a>
                    
                                @auth
                                    <a
                                        href="{{ url('/dashboard') }}"
                                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                    >
                                        Dashboard
                                    </a>
                                @else
                                    <a
                                        href="{{ route('login') }}"
                                        class="btn btnsmoll-danger"
                                    >
                                        Log in
                                    </a>

                                    @if (Route::has('register'))
                                        <a
                                            href="{{ route('register') }}"
                                            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                        >
                                            Register
                                        </a>
                                    @endif
                                @endauth

                            </nav>
                            
                        @endif

                        
                    
                    </header>

            
        <!-- Header end -->

        <!-- Home section -->
            <section class="home" id="home">
                <div class="home-content">
                    <h3>Hello, It's Me</h3>
                    <h1>Putu Agus Indra Yoga</h1>
                    <h3>And I'm a <span class="multiple-text"></span></h3>
                    <div class="social-media">
                        <a href="https://www.facebook.com/putu.a.yoga.1?mibextid=ZbWKwL"><i class="bx bxl-facebook"></i></a> <a href=""><i class="bx bxl-twitter"></i></a>
                        <a href="https://www.instagram.com/putuagus_23?igsh=MXFqZXAxamk1YzJoZQ=="><i class="bx bxl-instagram-alt"></i></a>
                        
                </div>
                <!-- add link for your cv into href -->
                <a href="https://drive.google.com/file/d/1wlw64-uQKk2TvIgmx9y@nujczUf5GhsQ/view"
                class="btn"
                >Download CV</a
                >
            </div>

            <div class="home-img">    
                <img src="{{ asset('images/ab.png') }}" alt="home">
            </div>

        </section>
<!--Home section and-->


        <!--About section-->
            <section class="about" id="about">
                <div class="about-img">
                    
                    <img src="{{ asset('images/yaya.jpeg') }}" alt="about">
                </div>

                <div class="about-content">
                    <h2 class="heading">About <span>Me</span></h2>
                    <!-- <h3>Frontend Web Developer!</h3> -->
                    <p>Saya, Putu Agus Indra Yoga lulusan dari SMA Negri 2 OKU tahun 2021 dengan jurusan IPA. Saat ini saya sedang menempuh pendidikan di Universitas Baturaja, prodi teknik dan komputer, jurusan informatika.
                    </p>
                    <ul type="disc">
                                <li>Nama    : Putu Agus Indra Yoga</li><br>
                                <li>NPM     : 2135058</li><br>
                                <li>Kelas   : A6.2</li><br>
                                <li>Jurusan : Informatika</li><br>
                                <li>Alamat  : Batumarta VI</li>
                            </ul>
                            <br><br>
                    <a href="#" class="btn">Read More</a>
                </div>
            </section>
            <!-- About section and -->




            <!-- Services section-->
            <section class="services" id="services">
                <h2 class="heading">Our <span>Services</span></h2>

                <div class="services-container"> 
                    <div class="services-box">
                        <i class="bx bx-code-alt"></i>
                        <h3>Animation</h3>
                        <p>
                        Animasi adalah proses menciptakan ilusi gerakan dengan menggabungkan serangkaian gambar statis secara berurutan.
                        </p>
                        <a href="#" class="btn">Read More</a>
                    </div>
                    
                    <div class="services-box">
                        <i class="bx bxs-paint"></i>
                        <h3>Graphic Design</h3>
                        <p>
                        Design grafis adalah proses menciptakan visual yang komunikatif dan estetis menggunakan elemen-elemen seperti gambar, teks, dan grafik.
                        </p>
                        <a href="#" class="btn">Read More</a>
                    </div>

                    <div class="services-box">
                        <i class="bx bx-data"></i>
                        <h3>Web</h3>
                        <p>
                        Merujuk pada sistem informasi global yang terdiri dari berbagai dokumen yang saling terhubung dan dapat diakses melalui internet.
                        </p>
                        <a href="#" class="btn">Read More</a>
                    </div>
                </div>
            </section>
            <!--Services section end -->





            <!--last project -->
            <section class="portfolio" id="portfolio">
                <h2 class="heading">Projek <span>Saya</span></h2>

                <div class="portfolio-container">
                    <div class="portfolio-box">
                    <img src="{{ asset('images/game.jpg') }}" alt="portfolio">

                    <div class="portfolio-layer">
                        <h4>GAME</h4>
                        <p>
                        game paiy bird yang saya buat menggunakan aplikasi animate.
                        </p>
                        <a href="paiy.my.id/apk/base.apk"><i class="bx bx-link-external"></i></a>
                    </div>
                </div>

                <div class="portfolio-box">
                    <img src="images/web.jpg" alt="portfolio" />
                    <div class="portfolio-Layer">
                        <h4>WEB DESIGN</h4>
                        <p>
                        Web informatika yang saya buat menggunakan aplikasi animate.
                        </p>
                        <a href="https://paiy.my.id/web_informatika/"><i class="bx bx-link-external"></i></a>
                    </div>
                </div>

                <div class="portfolio-box">
                    <img src="images/yy.jpg" alt="portfolio" />
                    <div class="portfolio-Layer">
                        <h4>C R U D</h4>
                        <p>
                        CRUD yang saya buat
                        </p>
                        <a href="https://paiy.my.id/oopputu/"><i class="bx bx-link-external"></i></a>
                    </div>
                </div>


                    </div>
                </div>
            </div>
        </section>
        <!-- portfolio section end-->




        <!-- contact selection -->
        <section class="contact" id="contact">
            <h2 class="heading">Contact <span>Me</span></h2>

            <form action="#">
                <div class="input-box">
                    <input type="text" placeholder="Full Name" />
                    <input type="email" placeholder="Email Address" />
                </div>

                <div class="input-box">
                    <input type="number" placeholder="Mobile Number" />
                    <input type="text" placeholder="Email Subject" />
                </div>
                <textarea
                name=""
                id=""
                cols="30"
                rows="10"
                placeholder="Your Message"
            ></textarea>
            <input type="submit" value="Send Message" class="btn" />
        </form>
    </section>

    <!-- footer -->
    <footer class="footer">
        <div class="footer-text">
            <p> Putu Agus Indra Yoga    |    Informatika</p>
        </div>

        <div class="footer-iconTop">
            <a href="#home"><i class="bx bx-up-arrow-alt"></i></a>
        </div>
    </footer>

    <!-- scrool reveal -->
    <script src="https://unpkg.com/scrollreveal"></script>

    <!-- typed js-->
    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>

    <!-- custom js-->
    <script src="{{ asset('/js/main.js') }}"></script>
    </body>
</html>