  <!-- ======= Mobile nav toggle button ======= -->
  <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

    <!-- ======= Header ======= -->
    <header id="header">
        <div class="d-flex flex-column">
    
          <div class="profile">
            <img src={{ asset("img/profile-img.jpg") }} alt="" class="img-fluid rounded-circle">
            <h1 class="text-light"><a href="index.html">Alex Smith</a></h1>
            <div class="social-links mt-3 text-center">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>
    
          <nav class="nav-menu">
            <ul>
              <li class="active"><a href={{ route("welcome") }}><i class="bx bx-home"></i> <span>Revenir au site</span></a></li>
              <li><a href={{ route('users') }}><i class="bx bx-user"></i> <span>User</span></a></li>
              <li><a href={{ route('facts') }}><i class="bx bx-file-blank"></i> <span>facts</span></a></li>
              <li><a href={{ route('skills') }}><i class="bx bx-book-content"></i> Skills</a></li>
              <li><a href={{ route('portofolios') }}><i class="bx bx-server"></i> Portfolio</a></li>
              <li><a href={{ route('services') }}><i class="bx bx-envelope"></i> Services</a></li>
              <li><a href="#contact"><i class='bx bx-data'></i> Contact</a></li>
            </ul>
          </nav><!-- .nav-menu -->
          <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>
    
        </div>
    </header><!-- End Header -->