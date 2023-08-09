@extends('layouts.user')
@section('content')
        <!-- ======= Header ======= -->
        <header id="header" class="fixed-top header-transparent">
            <div class="container d-flex align-items-center justify-content-between position-relative">
    
                <div class="logo">
                    <h1 class="text-light"><a href="{{ url('index.html') }}"><span>MISIBANG</span></a></h1>
                    <!-- Uncomment below if you prefer to use an image logo -->
                    <!-- <a href="{{ url('index.html') }}"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
                </div>
    
                <nav id="navbar" class="navbar">
                    <ul>
                        <li><a class="nav-link scrollto active" href="{{ url('#hero') }}">Home</a></li>
                        <li><a class="nav-link scrollto" href="{{ url('#about') }}">About Us</a></li>
                        <li><a class="nav-link scrollto" href="{{ url('#services') }}">Services</a></li>
                        <li><a class="nav-link scrollto" href="{{ url('#portfolio') }}">Portfolio</a></li>
                        <li><a class="nav-link scrollto" href="{{ url('#team') }}">Team</a></li>
                        {{-- <li class="dropdown"><a href="{{ url("#") }}"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
                <ul>
                  <li><a href="{{ url("#") }}">Drop Down 1</a></li>
                  <li class="dropdown"><a href="{{ url("#") }}"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                    <ul>
                      <li><a href="{{ url("#") }}">Deep Drop Down 1</a></li>
                      <li><a href="{{ url("#") }}">Deep Drop Down 2</a></li>
                      <li><a href="{{ url("#") }}">Deep Drop Down 3</a></li>
                      <li><a href="{{ url("#") }}">Deep Drop Down 4</a></li>
                      <li><a href="{{ url("#") }}">Deep Drop Down 5</a></li>
                    </ul>
                  </li>
                  <li><a href="{{ url("#") }}">Drop Down 2</a></li>
                  <li><a href="{{ url("#") }}">Drop Down 3</a></li>
                  <li><a href="{{ url("#") }}">Drop Down 4</a></li>
                </ul>
              </li>
              <li class="dropdown megamenu"><a href="{{ url("#") }}"><span>Mega Menu</span> <i class="bi bi-chevron-down"></i></a>
                <ul>
                  <li>
                    <strong>Column 1</strong>
                    <a href="{{ url("#") }}">Column 1 link 1</a>
                    <a href="{{ url("#") }}">Column 1 link 2</a>
                    <a href="{{ url("#") }}">Column 1 link 3</a>
                  </li>
                  <li>
                    <strong>Column 2</strong>
                    <a href="{{ url("#") }}">Column 2 link 1</a>
                    <a href="{{ url("#") }}">Column 2 link 2</a>
                    <a href="{{ url("#") }}">Column 3 link 3</a>
                  </li>
                  <li>
                    <strong>Column 3</strong>
                    <a href="{{ url("#") }}">Column 3 link 1</a>
                    <a href="{{ url("#") }}">Column 3 link 2</a>
                    <a href="{{ url("#") }}">Column 3 link 3</a>
                  </li>
                  <li>
                    <strong>Column 4</strong>
                    <a href="{{ url("#") }}">Column 4 link 1</a>
                    <a href="{{ url("#") }}">Column 4 link 2</a>
                    <a href="{{ url("#") }}">Column 4 link 3</a>
                  </li>
                  <li>
                    <strong>Column 5</strong>
                    <a href="{{ url("#") }}">Column 5 link 1</a>
                    <a href="{{ url("#") }}">Column 5 link 2</a>
                    <a href="{{ url("#") }}">Column 5 link 3</a>
                  </li>
                </ul>
              </li> --}}
                        @if (auth()->check())
                            <li>
                                <a class="nav-link scrollto"><form action="{{ route('logout') }}" method="POST">
                                      @csrf
                                      <button class="nav-link scrollto" type="submit">Log Out</button>
                                  </form></a>
                            </li>
                            @if (auth()->user()->email === 'admin@gmail.com') 
                                <li>
                                    <a class="nav-link scrollto" href="{{route('admin.index')}}">Dashboard</a>
                                </li>
                            
                            @endif
                        @else
                            <li><a class="nav-link scrollto" href="{{ route('login') }}">Log In</a></li>
                            <li><a class="nav-link scrollto" href="{{ route('register') }}">Register</a></li>
                        @endif
    
                    </ul>
                    <i class="bi bi-list mobile-nav-toggle"></i>
                </nav><!-- .navbar -->
    
            </div>
        </header><!-- End Header -->
    
        <!-- ======= Hero Section ======= -->
        <section id="hero">
            <div class="hero-container" data-aos="fade-up">
                <h1>Misi Bang </h1>
                <h2>Your local team of computer computer builders and engineers!</h2>
                <a href="{{ url('#about') }}" class="btn-get-started scrollto"><i class="bx bx-chevrons-down"></i></a>
            </div>
        </section><!-- End Hero -->
    
        <main id="main">
    
            <!-- ======= About Section ======= -->
            <section id="about" class="about">
                <div class="container">
    
                    <div class="row no-gutters">
                        <div class="content col-xl-5 d-flex align-items-stretch" data-aos="fade-up">
                            <div class="content">
                                <h3>Voluptatem dignissimos provident quasi</h3>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
                                </p>
                                <a href="{{ url('#') }}" class="about-btn">About us <i
                                        class="bx bx-chevron-right"></i></a>
                            </div>
                        </div>
                        <div class="col-xl-7 d-flex align-items-stretch">
                            <div class="icon-boxes d-flex flex-column justify-content-center">
                                <div class="row">
                                    <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                                        <i class="bx bx-receipt"></i>
                                        <h4>Corporis voluptates sit</h4>
                                        <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut
                                            aliquip</p>
                                    </div>
                                    <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                                        <i class="bx bx-cube-alt"></i>
                                        <h4>Ullamco laboris nisi</h4>
                                        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                                            deserunt</p>
                                    </div>
                                    <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                                        <i class="bx bx-images"></i>
                                        <h4>Labore consequatur</h4>
                                        <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere
                                        </p>
                                    </div>
                                    <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
                                        <i class="bx bx-shield"></i>
                                        <h4>Beatae veritatis</h4>
                                        <p>Expedita veritatis consequuntur nihil tempore laudantium vitae denat pacta</p>
                                    </div>
                                </div>
                            </div><!-- End .content-->
                        </div>
                    </div>
    
                </div>
            </section><!-- End About Section -->
    
            <!-- ======= Services Section ======= -->
            <section id="services" class="services">
                <div class="container">
    
                    <div class="section-title" data-aos="fade-in" data-aos-delay="100">
                        <h2>Services</h2>
                        <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit
                            sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias
                            ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
                    </div>
    
                    <div class="row">
                        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                            <div class="icon-box" data-aos="fade-up">
                                <div class="icon"><i class="bx bxl-dribbble"></i></div>
                                <h4 class="title"><a href="{{ url('') }}">Lorem Ipsum</a></h4>
                                <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias
                                    excepturi</p>
                            </div>
                        </div>
    
                        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                                <div class="icon"><i class="bx bx-file"></i></div>
                                <h4 class="title"><a href="{{ url('') }}">Sed ut perspiciatis</a></h4>
                                <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse
                                    cillum dolore</p>
                            </div>
                        </div>
    
                        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                                <div class="icon"><i class="bx bx-tachometer"></i></div>
                                <h4 class="title"><a href="{{ url('') }}">Magni Dolores</a></h4>
                                <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                                    officia</p>
                            </div>
                        </div>
    
                        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
                                <div class="icon"><i class="bx bx-world"></i></div>
                                <h4 class="title"><a href="{{ url('') }}">Nemo Enim</a></h4>
                                <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui
                                    blanditiis</p>
                            </div>
                        </div>
    
                    </div>
    
                </div>
            </section><!-- End Services Section -->
    
            <!-- ======= Counts Section ======= -->
            <section id="counts" class="counts  section-bg">
                <div class="container">
    
                    <div class="row no-gutters">
    
                        <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                            <div class="count-box">
                                <i class="bi bi-emoji-smile"></i>
                                <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1"
                                    class="purecounter"></span>
                                <p><strong>Happy Clients</strong> consequuntur quae</p>
                            </div>
                        </div>
    
                        <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                            <div class="count-box">
                                <i class="bi bi-journal-richtext"></i>
                                <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1"
                                    class="purecounter"></span>
                                <p><strong>Projects</strong> adipisci atque cum quia aut</p>
                            </div>
                        </div>
    
                        <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                            <div class="count-box">
                                <i class="bi bi-headset"></i>
                                <span data-purecounter-start="0" data-purecounter-end="1463"
                                    data-purecounter-duration="1" class="purecounter"></span>
                                <p><strong>Hours Of Support</strong> aut commodi quaerat</p>
                            </div>
                        </div>
    
                        <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                            <div class="count-box">
                                <i class="bi bi-people"></i>
                                <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1"
                                    class="purecounter"></span>
                                <p><strong>Hard Workers</strong> rerum asperiores dolor</p>
                            </div>
                        </div>
    
                    </div>
    
                </div>
            </section><!-- End Counts Section -->
    
            <!-- ======= Cta Section ======= -->
            <section id="cta" class="cta">
                <div class="container" data-aos="zoom-in">
    
                    <div class="text-center">
                        <h3>Call To Action</h3>
                        <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                            pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                            mollit anim id est laborum.</p>
                        <a class="cta-btn" href="{{ url('#') }}">Call To Action</a>
                    </div>
    
                </div>
            </section><!-- End Cta Section -->
    
            <!-- ======= Portfolio Section ======= -->
            <section id="portfolio" class="portfolio">
                <div class="container">
    
                    <div class="section-title" data-aos="fade-in" data-aos-delay="100">
                        <h2>Portfolio</h2>
                        <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit
                            sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias
                            ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
                    </div>
    
                    <div class="row" data-aos="fade-in">
                        <div class="col-lg-12 d-flex justify-content-center">
                            <ul id="portfolio-flters">
                                <li data-filter="*" class="filter-active">All</li>
                                <li data-filter=".filter-app">App</li>
                                <li data-filter=".filter-card">Card</li>
                                <li data-filter=".filter-web">Web</li>
                            </ul>
                        </div>
                    </div>
    
                    <div class="row portfolio-container" data-aos="fade-up">
    
                        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                            <div class="portfolio-wrap">
                                <img src="{{ asset('/user/assets/img/portfolio/portfolio-1.jpg') }}" class="img-fluid"
                                    alt="">
                                <div class="portfolio-links">
                                    <a href="{{ url('assets/img/portfolio/portfolio-1.jpg') }}"
                                        data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i
                                            class="bx bx-plus"></i></a>
                                    <a href="{{ url('portfolio-details.html') }}" title="More Details"><i
                                            class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
    
                        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                            <div class="portfolio-wrap">
                                <img src="{{ asset('/user/assets/img/portfolio/portfolio-2.jpg') }}" class="img-fluid"
                                    alt="">
                                <div class="portfolio-links">
                                    <a href="{{ url('assets/img/portfolio/portfolio-2.jpg') }}"
                                        data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i
                                            class="bx bx-plus"></i></a>
                                    <a href="{{ url('portfolio-details.html') }}" title="More Details"><i
                                            class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
    
                        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                            <div class="portfolio-wrap">
                                <img src="{{ asset('/user/assets/img/portfolio/portfolio-3.jpg') }}" class="img-fluid"
                                    alt="">
                                <div class="portfolio-links">
                                    <a href="{{ url('assets/img/portfolio/portfolio-3.jpg') }}"
                                        data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 2"><i
                                            class="bx bx-plus"></i></a>
                                    <a href="{{ url('portfolio-details.html') }}" title="More Details"><i
                                            class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
    
                        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                            <div class="portfolio-wrap">
                                <img src="{{ asset('/user/assets/img/portfolio/portfolio-4.jpg') }}" class="img-fluid"
                                    alt="">
                                <div class="portfolio-links">
                                    <a href="{{ url('assets/img/portfolio/portfolio-4.jpg') }}"
                                        data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 2"><i
                                            class="bx bx-plus"></i></a>
                                    <a href="{{ url('portfolio-details.html') }}" title="More Details"><i
                                            class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
    
                        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                            <div class="portfolio-wrap">
                                <img src="{{ asset('/user/assets/img/portfolio/portfolio-5.jpg') }}" class="img-fluid"
                                    alt="">
                                <div class="portfolio-links">
                                    <a href="{{ url('assets/img/portfolio/portfolio-5.jpg') }}"
                                        data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 2"><i
                                            class="bx bx-plus"></i></a>
                                    <a href="{{ url('portfolio-details.html') }}" title="More Details"><i
                                            class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
    
                        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                            <div class="portfolio-wrap">
                                <img src="{{ asset('/user/assets/img/portfolio/portfolio-6.jpg') }}" class="img-fluid"
                                    alt="">
                                <div class="portfolio-links">
                                    <a href="{{ url('assets/img/portfolio/portfolio-6.jpg') }}"
                                        data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 3"><i
                                            class="bx bx-plus"></i></a>
                                    <a href="{{ url('portfolio-details.html') }}" title="More Details"><i
                                            class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
    
                        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                            <div class="portfolio-wrap">
                                <img src="{{ asset('/user/assets/img/portfolio/portfolio-7.jpg') }}" class="img-fluid"
                                    alt="">
                                <div class="portfolio-links">
                                    <a href="{{ url('assets/img/portfolio/portfolio-7.jpg') }}"
                                        data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 1"><i
                                            class="bx bx-plus"></i></a>
                                    <a href="{{ url('portfolio-details.html') }}" title="More Details"><i
                                            class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
    
                        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                            <div class="portfolio-wrap">
                                <img src="{{ asset('/user/assets/img/portfolio/portfolio-8.jpg') }}" class="img-fluid"
                                    alt="">
                                <div class="portfolio-links">
                                    <a href="{{ url('assets/img/portfolio/portfolio-8.jpg') }}"
                                        data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 3"><i
                                            class="bx bx-plus"></i></a>
                                    <a href="{{ url('portfolio-details.html') }}" title="More Details"><i
                                            class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
    
                        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                            <div class="portfolio-wrap">
                                <img src="{{ asset('/user/assets/img/portfolio/portfolio-9.jpg') }}" class="img-fluid"
                                    alt="">
                                <div class="portfolio-links">
                                    <a href="{{ url('assets/img/portfolio/portfolio-9.jpg') }}"
                                        data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i
                                            class="bx bx-plus"></i></a>
                                    <a href="{{ url('portfolio-details.html') }}" title="More Details"><i
                                            class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
    
                    </div>
    
                </div>
            </section><!-- End Portfolio Section -->
    
            <!-- ======= Testimonials Section ======= -->
            <section id="testimonials" class="testimonials section-bg">
                <div class="container">
    
                    <div class="section-title" data-aos="fade-in" data-aos-delay="100">
                        <h2>Testimonials</h2>
                        <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit
                            sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias
                            ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
                    </div>
    
                    <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                        <div class="swiper-wrapper">
    
                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <p>
                                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                        Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit
                                        rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam,
                                        risus at semper.
                                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                    </p>
                                    <img src="{{ asset('/user/assets/img/testimonials/testimonials-1.jpg') }}"
                                        class="testimonial-img" alt="">
                                    <h3>Saul Goodman</h3>
                                    <h4>Ceo &amp; Founder</h4>
                                </div>
                            </div><!-- End testimonial item -->
    
                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <p>
                                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                        Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid
                                        cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet
                                        legam anim culpa.
                                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                    </p>
                                    <img src="{{ asset('/user/assets/img/testimonials/testimonials-2.jpg') }}"
                                        class="testimonial-img" alt="">
                                    <h3>Sara Wilsson</h3>
                                    <h4>Designer</h4>
                                </div>
                            </div><!-- End testimonial item -->
    
                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <p>
                                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                        Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem
                                        veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint
                                        minim.
                                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                    </p>
                                    <img src="{{ asset('/user/assets/img/testimonials/testimonials-3.jpg') }}"
                                        class="testimonial-img" alt="">
                                    <h3>Jena Karlis</h3>
                                    <h4>Store Owner</h4>
                                </div>
                            </div><!-- End testimonial item -->
    
                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <p>
                                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                        Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim
                                        fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem
                                        dolore labore illum veniam.
                                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                    </p>
                                    <img src="{{ asset('/user/assets/img/testimonials/testimonials-4.jpg') }}"
                                        class="testimonial-img" alt="">
                                    <h3>Matt Brandon</h3>
                                    <h4>Freelancer</h4>
                                </div>
                            </div><!-- End testimonial item -->
    
                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <p>
                                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                        Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster
                                        veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam
                                        culpa fore nisi cillum quid.
                                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                    </p>
                                    <img src="{{ asset('/user/assets/img/testimonials/testimonials-5.jpg') }}"
                                        class="testimonial-img" alt="">
                                    <h3>John Larson</h3>
                                    <h4>Entrepreneur</h4>
                                </div>
                            </div><!-- End testimonial item -->
    
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
    
                </div>
            </section><!-- End Testimonials Section -->
    
            <!-- ======= Team Section ======= -->
            <section id="team" class="team">
                <div class="container">
    
                    <div class="section-title" data-aos="fade-in" data-aos-delay="100">
                        <h2>Team</h2>
                        <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit
                            sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias
                            ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
                    </div>
    
                    <div class="row">
    
                        <div class="col-lg-4 col-md-6">
                            <div class="member" data-aos="fade-up">
                                <div class="pic"><img src="{{ asset('/user/assets/img/team/team-1.jpg') }}"
                                        class="img-fluid" alt=""></div>
                                <div class="member-info">
                                    <h4>Walter White</h4>
                                    <span>Chief Executive Officer</span>
                                    <div class="social">
                                        <a href="{{ url('') }}"><i class="bi bi-twitter"></i></a>
                                        <a href="{{ url('') }}"><i class="bi bi-facebook"></i></a>
                                        <a href="{{ url('') }}"><i class="bi bi-instagram"></i></a>
                                        <a href="{{ url('') }}"><i class="bi bi-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
    
                        <div class="col-lg-4 col-md-6">
                            <div class="member" data-aos="fade-up" data-aos-delay="150">
                                <div class="pic"><img src="{{ asset('/user/assets/img/team/team-2.jpg') }}"
                                        class="img-fluid" alt=""></div>
                                <div class="member-info">
                                    <h4>Sarah Jhonson</h4>
                                    <span>Product Manager</span>
                                    <div class="social">
                                        <a href="{{ url('') }}"><i class="bi bi-twitter"></i></a>
                                        <a href="{{ url('') }}"><i class="bi bi-facebook"></i></a>
                                        <a href="{{ url('') }}"><i class="bi bi-instagram"></i></a>
                                        <a href="{{ url('') }}"><i class="bi bi-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
    
                        <div class="col-lg-4 col-md-6">
                            <div class="member" data-aos="fade-up" data-aos-delay="300">
                                <div class="pic"><img src="{{ asset('/user/assets/img/team/team-3.jpg') }}"
                                        class="img-fluid" alt=""></div>
                                <div class="member-info">
                                    <h4>William Anderson</h4>
                                    <span>CTO</span>
                                    <div class="social">
                                        <a href="{{ url('') }}"><i class="bi bi-twitter"></i></a>
                                        <a href="{{ url('') }}"><i class="bi bi-facebook"></i></a>
                                        <a href="{{ url('') }}"><i class="bi bi-instagram"></i></a>
                                        <a href="{{ url('') }}"><i class="bi bi-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
    
                    </div>
    
                </div>
            </section><!-- End Team Section -->
    
            <!-- ======= Contact Section ======= -->
            <section id="contact" class="contact section-bg">
                <div class="container" data-aos="fade-up">
    
                    <div class="section-title">
                        <h2>Contact</h2>
                        <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit
                            sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias
                            ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
                    </div>
    
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="info-box mb-4">
                                <i class="bx bx-map"></i>
                                <h3>Our Address</h3>
                                <p>A108 Adam Street, New York, NY 535022</p>
                            </div>
                        </div>
    
                        <div class="col-lg-3 col-md-6">
                            <div class="info-box  mb-4">
                                <i class="bx bx-envelope"></i>
                                <h3>Email Us</h3>
                                <p>contact@example.com</p>
                            </div>
                        </div>
    
                        <div class="col-lg-3 col-md-6">
                            <div class="info-box  mb-4">
                                <i class="bx bx-phone-call"></i>
                                <h3>Call Us</h3>
                                <p>+1 5589 55488 55</p>
                            </div>
                        </div>
    
                    </div>
    
                    <div class="row">
    
                        <div class="col-lg-6 ">
                          <iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.353310343079!2d106.8814155749903!3d-6.217052293770922!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f36a76939ce9%3A0x1dd69348f251fa2a!2sVocational%20High%20School%20State%2046%20of%20East%20Jakarta!5e0!3m2!1sen!2sid!4v1690878331381!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
    
                        <div class="col-lg-6">
                            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <input type="text" name="name" class="form-control" id="name"
                                            placeholder="Your Name" required>
                                    </div>
                                    <div class="col-md-6 form-group mt-3 mt-md-0">
                                        <input type="email" class="form-control" name="email" id="email"
                                            placeholder="Your Email" required>
                                    </div>
                                </div>
                                <div class="form-group mt-3">
                                    <input type="text" class="form-control" name="subject" id="subject"
                                        placeholder="Subject" required>
                                </div>
                                <div class="form-group mt-3">
                                    <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                                </div>
                                <div class="my-3">
                                    <div class="loading">Loading</div>
                                    <div class="error-message"></div>
                                    <div class="sent-message">Your message has been sent. Thank you!</div>
                                </div>
                                <div class="text-center"><button type="submit">Send Message</button></div>
                            </form>
                        </div>
    
                    </div>
    
                </div>
            </section><!-- End Contact Section -->
    
        </main><!-- End #main -->
    
        <!-- ======= Footer ======= -->
        <footer id="footer">
            <div class="footer-top">
                <div class="container">
                    <div class="row">
    
                        <div class="col-lg-4 col-md-6">
                            <div class="footer-info">
                                <h3>Squadfree</h3>
                                <p class="pb-3"><em>Qui repudiandae et eum dolores alias sed ea. Qui suscipit veniam
                                        excepturi quod.</em></p>
                                <p>
                                    A108 Adam Street <br>
                                    NY 535022, USA<br><br>
                                    <strong>Phone:</strong> +1 5589 55488 55<br>
                                    <strong>Email:</strong> info@example.com<br>
                                </p>
                                <div class="social-links mt-3">
                                    <a href="{{ url('#') }}" class="twitter"><i class="bx bxl-twitter"></i></a>
                                    <a href="{{ url('#') }}" class="facebook"><i class="bx bxl-facebook"></i></a>
                                    <a href="{{ url('#') }}" class="instagram"><i class="bx bxl-instagram"></i></a>
                                    <a href="{{ url('#') }}" class="google-plus"><i class="bx bxl-skype"></i></a>
                                    <a href="{{ url('#') }}" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
    
                        <div class="col-lg-2 col-md-6 footer-links">
                            <h4>Useful Links</h4>
                            <ul>
                                <li><i class="bx bx-chevron-right"></i> <a href="{{ url('#') }}">Home</a></li>
                                <li><i class="bx bx-chevron-right"></i> <a href="{{ url('#') }}">About us</a></li>
                                <li><i class="bx bx-chevron-right"></i> <a href="{{ url('#') }}">Services</a></li>
                                <li><i class="bx bx-chevron-right"></i> <a href="{{ url('#') }}">Terms of
                                        service</a></li>
                                <li><i class="bx bx-chevron-right"></i> <a href="{{ url('#') }}">Privacy policy</a>
                                </li>
                            </ul>
                        </div>
    
                        <div class="col-lg-2 col-md-6 footer-links">
                            <h4>Our Services</h4>
                            <ul>
                                <li><i class="bx bx-chevron-right"></i> <a href="{{ url('#') }}">Web Design</a></li>
                                <li><i class="bx bx-chevron-right"></i> <a href="{{ url('#') }}">Web Development</a>
                                </li>
                                <li><i class="bx bx-chevron-right"></i> <a href="{{ url('#') }}">Product
                                        Management</a></li>
                                <li><i class="bx bx-chevron-right"></i> <a href="{{ url('#') }}">Marketing</a></li>
                                <li><i class="bx bx-chevron-right"></i> <a href="{{ url('#') }}">Graphic Design</a>
                                </li>
                            </ul>
                        </div>
    
                        <div class="col-lg-4 col-md-6 footer-newsletter">
                            <h4>Our Newsletter</h4>
                            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
                            <form action="" method="post">
                                <input type="email" name="email"><input type="submit" value="Subscribe">
                            </form>
    
                        </div>
    
                    </div>
                </div>
            </div>
    
            <div class="container">
                <div class="copyright">
                    &copy; Copyright <strong><span>Squadfree</span></strong>. All Rights Reserved
                </div>
                <div class="credits">
                    <!-- All the links in the footer should remain intact. -->
                    <!-- You can delete the links only if you purchased the pro version. -->
                    <!-- Licensing information: https://bootstrapmade.com/license/ -->
                    <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/squadfree-free-bootstrap-template-creative/ -->
                    Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                </div>
            </div>
        </footer><!-- End Footer -->
    
        <a href="{{ url('#') }}" class="back-to-top d-flex align-items-center justify-content-center"><i
                class="bi bi-arrow-up-short"></i></a>
    
@endsection

