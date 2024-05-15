<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="/home"><span>Com</span>pany</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a href="/" class="nav-item nav-link {{ request()->is('home') ? ' active' : '' }}">Home</a></li>

          <li class="dropdown"><a href="/about"><span>About</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="/about" class="nav-item nav-link {{ request()->is('about') ? ' active' : '' }}">About Us</a></li>
              <li><a href="/team" class="nav-item nav-link {{ request()->is('team') ? ' active' : '' }}">Team</a></li>
              <li><a href="/testimonials" class="nav-item nav-link {{ request()->is('testimonials') ? ' active' : '' }}">Testimonials</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
            </ul>
          </li>

          <li><a class="" href="/services" class="nav-item nav-link {{ Request::is('services') ? ' active' : ''}}">Services</a></li>
          <li><a href="/portfolio" class="nav-item nav-link {{ request()->is('portfolio') ? ' active' : '' }}">Portfolio</a></li>
          <li><a href="/pricing" class="nav-item nav-link {{ request()->is('pricing') ? ' active' : '' }}">Pricing</a></li>
          <li><a href="/blog" class="nav-item nav-link {{ request()->is('blog') ? ' active' : '' }}">Blog</a></li>
          <li><a href="/contact" class="nav-item nav-link {{ request()->is('contact') ? ' active' : '' }}">Contact</a></li>

        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <div class="header-social-links d-flex">
        <a href="#" class="twitter"><i class="bu bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bu bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bu bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bu bi-linkedin"></i></i></a>
      </div>

    </div>
  </header><!-- End Header -->