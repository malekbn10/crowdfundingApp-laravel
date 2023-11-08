<!--<header class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="header__logo">
                        <a href="./index.html"><img src="{{asset('images/logo.png')}}" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-10">
                    <div class="header__nav__option">
                        <nav class="header__nav__menu mobile-menu">
                            <ul>
                                <li class="active"><a href="{{asset('/')}}">Home</a></li>
                                <li><a href="./about.html">About</a></li>
                                <li><a href="./portfolio.html">Portfolio</a></li>
                                <li><a href="./services.html">Services</a></li>
                                <li><a href="#">Pages</a>
                                    <ul class="dropdown">
                                        <li><a href="./about.html">About</a></li>
                                        <li><a href="./portfolio.html">Portfolio</a></li>
                                        <li><a href="./blog.html">Blog</a></li>
                                        <li><a href="./blog-details.html">Blog Details</a></li>
                                    </ul>
                                </li>
                                <li><a href="./contact.html">Contact</a></li>
                            </ul>
                        </nav>
                        <div class="header__nav__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-dribbble"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-youtube-play"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>-->
<!-- ======= Header ======= -->
<header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex justify-content-between align-items-center">

        <div id="logo">
            <a href="index.html"><img src="assets/img/logo.png" alt=""></a>
            <!-- Uncomment below if you prefer to use a text logo -->
            <!--<h1><a href="index.html">Regna</a></h1>-->
        </div>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                <li><a class="nav-link scrollto" href="#about">About</a></li>
                <li><a class="nav-link scrollto" href="#services">Services</a></li>
                <li><a class="nav-link scrollto" href="#team">Team</a></li>
                <li class="dropdown"><a href="#"><span>Projects</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="#">Discover</a></li>
                        <li><a href="#">Create</a></li>
                    </ul>
                </li>
                @guest
                <li id="login">
                    <form id="logout-form" action="{{ route('login') }}" method="get">
                        @csrf
                <li id="login"> <input class="btn-get-started" type="submit" value="Log In" name="login" id="login">
                </li>
                </form>
                @endguest
                @auth()
                <li id="login"><a class="nav-link scrollto" href="#contact">Profile</a></li>

                <li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                        @csrf
                        <i class="fa fa-sign-out"></i>

                        <input class="btn-get-started" type="submit" value="Log Out" name="logout" id="logout">

                    </form>
                </li>




                @endauth
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->
    </div>
</header><!-- End Header -->