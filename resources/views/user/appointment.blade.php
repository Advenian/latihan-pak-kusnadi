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
                        @if (auth()->user()->email === 'admin@gmail.com')
                            <li>
                                <a class="nav-link scrollto" href="{{ route('admin.index') }}">Dashboard</a>
                            </li>
                        @else
                            <li>
                                <a class="nav-link scrollto">
                                    <form action="{{ route('logout') }}" method="POST">
                                        @csrf
                                        <button class="nav-link scrollto" type="submit">Log Out</button>
                                    </form>
                                </a>
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

   
    <main id="main">

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
