<!----  Nama : Dinanti Vita Rachman
        NRP  : 5026221190
        URL web yang di makeover: https://finerpalate.com/
        template dari: https://bootstrapmade.com/restaurantly-restaurant-template/#download --->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Finer Palate</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Add Swiper.js CSS -->
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

  <!-- Add Swiper.js JavaScript -->
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>


    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
</head>

<body class="index-page">

    <header id="header" class="header fixed-top">
        <div class="topbar d-flex align-items-center">
            <div class="container d-flex justify-content-center justify-content-md-between">
                <div class="contact-info d-flex align-items-center">
                    <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com"
                            style="color:white">catering@finerpalate.com</a></i>
                    <i class="bi bi-phone d-flex align-items-center ms-4"><span style="color:white">(804)
                            467-8266</span></i>
                </div>
            </div>
        </div>

        <div class="branding d-flex align-items-center">
            <div class="container position-relative d-flex align-items-center justify-content-between">
                <a href="index.html" class="logo d-flex align-items-center me-auto me-xl-0">
                    <img src="{{ asset('assets/img/FinePalateLogo.png') }}" alt="Fine Palate Logo" width="200"
                        height="auto">
                </a>
                <nav id="navmenu" class="navmenu">
                    <ul>
                        <li><a href="#hero" class="active">Home</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#why-us">Why Us</a></li>
                        <li><a href="#menu">Menu</a></li>
                        <li><a href="#events">Events</a></li>
                        <li class="dropdown">
                            <a href="#"><span>Tugas</span> <i class="bi bi-chevron-down"></i></a>
                            <ul>
                                <li><a href="http://127.0.0.1:8000/pertemuan1">Pertemuan 1</a></li>
                                <li><a href="http://127.0.0.1:8000/pertemuan2">Pertemuan 2</a></li>
                                <li><a href="http://127.0.0.1:8000/pertemuan3">Pertemuan 3</a></li>
                                <li><a href="http://127.0.0.1:8000/pertemuan4">Pertemuan 4</a></li>
                                <li><a href="http://127.0.0.1:8000/pertemuan5">Pertemuan 5</a></li>
                                <li><a href="http://127.0.0.1:8000/pertemuan6">Pertemuan 6</a></li>
                                <li><a href="http://127.0.0.1:8000/pertemuan7">Pertemuan 7</a></li>
                            </ul>
                        </li>

                    </ul>
                    <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
                </nav>
                <a class="btn-book-a-table d-none d-xl-block" href="#book-a-table">Book a Table</a>
            </div>
        </div>
    </header>

    <main class="main">

        <!-- Hero Section -->
        <section id="hero" class="hero section dark-background">
            <video autoplay muted loop class="hero-video"
                style="position: absolute; top: 50%; left: 50%; width: 100vw; height: 100vh; object-fit: cover; transform: translate(-50%, -50%); z-index: 1;">
                <source src="{{ asset('assets/video/Finer Palate.mp4') }}" type="video/mp4">
            </video>
            <div class="container">
                <h2>Welcome to <span>Finer Palate</span></h2>
                <p>Taste Beyond the Table</p>
                <div class="d-flex justify-content-center">
                    <a href="#menu" class="cta-btn">Our Menu</a>
                    <a href="#book-a-table" class="cta-btn">Book a Table</a>
                </div>
            </div>
        </section>

        <!-- About Section -->
        <section id="about" class="about section">
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="row gy-4">
                    <div class="col-lg-6 order-1 order-lg-2">
                        <img src="{{ asset('assets/img/Dinner-3.png') }}" class="img-fluid about-img" alt="">
                    </div>
                    <div class="col-lg-6 order-2 order-lg-1 content">
                        <h3>About Us</h3>
                        <p class="fst-italic">
                            Finer Palate is a family-owned business that serves high-end food. We provide catering for
                            private and
                            corporate events, from plated dinners for 10 of your closest friends to large-scale
                            functions with 200+
                            attendees.
                        </p>
                        <p class="fst-italic">
                            We cook from the heart and execute every event to the highest standard. Whether we’re
                            serving high-profile
                            guests at an exclusive function or delivering boxed lunches to your office, you’ll
                            experience the
                            difference of a catering company that genuinely cares. Smart or casual events, large or
                            small, we’ll
                            always make sure to provide a one-of-a-kind experience. It’s
                            not just our food that we consistently craft to the highest standard; it’s the entire
                            atmosphere we create
                            that sets Finer Palate apart.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Why Us Section -->
        <section id="why-us" class="why-us section">
            <div class="container section-title" data-aos="fade-up">
                <h2>WHY US</h2>
                <p>Why Choose Our Catering</p>
            </div>
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="card-item">
                            <img src="{{ asset('assets/img/calendar.png') }}"
                                style="width: 70px; height: 70px; margin-bottom: 10px;">
                            <h4><a class="counter" data-target="205">0</a></h4>
                            <p>Catered Events</p>
                        </div>
                    </div>

                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="card-item">
                            <span><a href="#about" class="stretched-link"></a></span>
                            <img src="{{ asset('assets/img/experience.png') }}"
                                style="width: 70px; height: 70px; margin-bottom: 10px;">
                            <h4><a class="counter" data-target="30">0</a></h4>
                            <p>Years Of Experience</p>
                        </div>
                    </div><!-- Card Item -->

                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
                        <div class="card-item">
                            <span><a href="#menu" class="stretched-link"></a></span>
                            <img src="{{ asset('assets/img/menu.png') }}"
                                style="width: 70px; height: 70px; margin-bottom: 10px;">
                            <h4><a class="counter" data-target="162">0</a></h4>
                            <p>Dishes to Choose From</p>
                        </div>
                    </div><!-- Card Item -->

                </div>
            </div>
        </section>

        <!-- Menu Section -->
        <section id="menu" class="menu section">
            <div class="container section-title" data-aos="fade-up">
                <h2>Menu</h2>
                <p>Check Our Tasty Menu</p>
            </div>
            <div id="menu-swiper-container" class="swiper-container">
                <div class="swiper-wrapper">

                    <!-- Menu Items 1 with Images -->
                    <div class="swiper-slide">
                        <div class="menu-item">
                            <img src="{{ asset('assets/img/menu fix 1.jpg') }}" class="menu-img"
                                alt="express catering">
                            <div class="menu-content">
                                <a>Express Catering</a>
                                <span class="separator">------</span>
                                <span class="menu-price">Start From $105.7</span>
                            </div>
                            <div class="menu-ingredients">Our express catering option is convenient and perfect for
                                events that require an easy grab-and-go food
                                option.</div>
                        </div>
                    </div>
                </div>

                <!-- Menu Item 2 -->
                <div class="swiper-slide">
                    <div class="menu-item">
                        <img src="{{ asset('assets/img/menu fix-2.png') }}" class="menu-img" alt="Carving Station">
                        <div class="menu-content">
                            <a>Carving Station</a>
                            <span class="separator">------</span>
                            <span class="menu-price">Start From $98.7</span>
                        </div>
                        <div class="menu-ingredients">
                            Impressive, succulent roasts, carved to order. Our carving stations are always a hit for
                            larger events
                            with hungry guests.
                        </div>
                    </div>
                </div>

                <!-- Menu Item 3 -->
                <div class="swiper-slide">
                    <div class="menu-item">
                        <img src="{{ asset('assets/img/menu fix-3.jpg') }}" class="menu-img" alt="Hors d’oeuvres">
                        <div class="menu-content">
                            <a>Hors d’oeuvres</a>
                            <span class="separator">------</span>
                            <span class="menu-price">Start From $117.67</span>
                        </div>
                        <div class="menu-ingredients">
                            For sophisticated parties and events of all sizes, our hors d’oeuvres cover a multitude of
                            international
                            flavors and serving styles.
                        </div>
                    </div>
                </div>

                <!-- Menu Item 4 -->
                <div class="swiper-slide">
                    <div class="menu-item">
                        <img src="{{ asset('assets/img/menu fix-4.png') }}" class="menu-img" alt="Lunch">
                        <div class="menu-content">
                            <a>Lunch</a>
                            <span class="separator">------</span>
                            <span class="menu-price">Start From $95.00</span>
                        </div>
                        <div class="menu-ingredients">
                            We’ve created a lunch menu that will elevate your next corporate team meeting, fundraising
                            event,
                            private party, or other occasion.
                        </div>
                    </div>
                </div>

                <!-- Menu Item 5 -->
                <div class="swiper-slide">
                    <div class="menu-item">
                        <img src="{{ asset('assets/img/menu fix-5.png') }}" class="menu-img" alt="Dinner">
                        <div class="menu-content">
                            <a>Hors d’oeuvres</a>
                            <span class="separator">------</span>
                            <span class="menu-price">Start From $110.00</span>
                        </div>
                        <div class="menu-ingredients">
                            Our dinner menu matches the needs of any wedding reception, private dinner party, or long
                            table event.
                        </div>
                    </div>
                </div>

                <!-- Menu Item 6 -->
                <div class="swiper-slide">
                    <div class="menu-item">
                        <img src="{{ asset('assets/img/menu fix-6.png') }}" class="menu-img" alt="Sides">
                        <div class="menu-content">
                            <a>Sides</a>
                            <span class="separator">------</span>
                            <span class="menu-price">Start From $70.7</span>
                        </div>
                        <div class="menu-ingredients">
                            Choose from these delicious sides to complete your amazing meal.
                        </div>
                    </div>
                </div>
        </section>

         <!-- Events Section -->
    <section id="events" class="events section">

      <img class="slider-bg" src="{{ asset('assets/img/event bg.jpg') }}" alt="" data-aos="fade-in">

      <div class="container">

        <div class="swiper init-swiper" data-aos="fade-up" data-aos-delay="100">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              }
            }
          </script>
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="row gy-4 event-item">
                <div class="col-lg-6">
                  <img src="{{ asset('assets/img/event 1.jpg') }}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content">
                  <h3>Celebrate Special Moments with Exquisite Dining</h3>
                  <div class="price">
                    <p><span>$189</span></p>
                  </div>
                  <p class="fst-italic">
                    Make your birthday celebration truly unforgettable with a unique culinary experience! Our expert
                    chef will prepare delicious dishes on-site, in a beautiful outdoor setting, creating the perfect
                    atmosphere for your event.
                  </p>
                  <ul>
                    <li><i class="bi bi-check2-circle" style="color:#ffffff"></i> <span>Exclusive menus crafted to your
                        preferences and tastes.</span></li>
                    <li><i class="bi bi-check2-circle" style="color:#ffffff"></i> <span>An interactive dining experience
                        that adds joy to every bite.</span></li>
                    <li><i class="bi bi-check2-circle" style="color:#ffffff"></i> <span>Fresh, high-quality ingredients
                        lovingly prepared by professional hands.</span></li>
                  </ul>
                  <p>
                    Let us help you turn your birthday into a cherished memory with warm service and a setting that
                    delights all your senses!
                  </p>
                </div>
              </div>
            </div><!-- End Slider item -->

            <div class="swiper-slide">
              <div class="row gy-4 event-item">
                <div class="col-lg-6">
                  <img src="{{ asset('assets/img/event 2.jpg') }}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content">
                  <h3>Exclusive Private Parties</h3>
                  <div class="price">
                    <p><span>$290</span></p>
                  </div>
                  <p class="fst-italic">
                    Elevate your private event with an unparalleled culinary experience tailored just for you. Our
                    skilled chef will create a sophisticated dining atmosphere that is perfect for intimate gatherings
                    and special occasions.
                  </p>
                  <ul>
                    <li><i class="bi bi-check2-circle" style="color:#ffffff"></i> <span>Curated menus that reflect your
                        unique tastes and preferences.</span></li>
                    <li><i class="bi bi-check2-circle" style="color:#ffffff"></i> <span>Impeccable service with
                        personalized attention to detail.</span></li>
                    <li><i class="bi bi-check2-circle" style="color:#ffffff"></i> <span>Fresh, premium ingredients
                        prepared with expertise and passion.</span></li>
                  </ul>
                  <p>
                    Allow us to turn your private celebration into a memorable experience, with a delightful setting and
                    impeccable service that will impress your guests and create lasting memories.
                  </p>
                </div>
              </div>
            </div><!-- End Slider item -->

            <div class="swiper-slide">
              <div class="row gy-4 event-item">
                <div class="col-lg-6">
                  <img src="{{ asset('assets/img/event 3.jpg') }}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content">
                  <h3>Custom Parties to Fit Your Needs</h3>
                  <div class="price">
                    <p><span>$99</span></p>
                  </div>
                  <p class="fst-italic">
                    Design your perfect party with a personalized menu and setting tailored just for you. Whether you're
                    hosting an intimate gathering or a large outdoor celebration, our custom party services are designed
                    to make your event special.
                  </p>
                  <ul>
                    <li><i class="bi bi-check2-circle" style="color:#ffffff"></i> <span>Customized menus to match your
                        unique vision.</span></li>
                    <li><i class="bi bi-check2-circle" style="color:#ffffff"></i> <span>Professional chef and staff to
                        ensure a seamless experience.</span></li>
                    <li><i class="bi bi-check2-circle" style="color:#ffffff"></i> <span>Elegant yet casual outdoor
                        setup, ideal for any occasion.</span></li>
                  </ul>
                  <p>
                    Let us bring your event to life with exquisite dishes, impeccable service, and a setting that
                    reflects your style. Create unforgettable moments with Finer Palate's custom party services!
                  </p>
                </div>
              </div>
            </div><!-- End Slider item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section><!-- /Events Section -->

           <!-- Book A Table Section -->
    <section id="book-a-table" class="book-a-table section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
          <h2>RESERVATION</h2>
          <p>Book a Table</p>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">

          <form id="bookForm" role="form">
            <div class="row gy-4">
              <div class="col-lg-4 col-md-6">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required="">
              </div>
              <div class="col-lg-4 col-md-6">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required="">
              </div>
              <div class="col-lg-4 col-md-6">
                <input type="text" class="form-control" name="phone" id="phone" placeholder="Your Phone" required="">
              </div>
              <div class="col-lg-4 col-md-6">
                <input type="date" name="date" class="form-control" id="date" placeholder="Date" required="">
              </div>
              <div class="col-lg-4 col-md-6">
                <input type="number" class="form-control" name="people" id="people" placeholder="# of people" required="">
              </div>
            </div>

            <div class="form-group mt-3">
              <textarea class="form-control" name="message" rows="5" placeholder="Message"></textarea>
            </div>

            <div class="text-center mt-3">
                <button type="submit" class="book-table-btn">Book a Table</button>
            </div>
          </form>

        </div>
      </section><!-- /Book A Table Section -->


    </main>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->


    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>

    <!-- Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>
