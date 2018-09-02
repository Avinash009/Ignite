<!-- Header -->
<header class="header">
    <!-- Top Bar -->
    <div class="top_bar">
        <div class="top_bar_container">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="top_bar_content d-flex flex-row align-items-center justify-content-start">
                            <ul class="top_bar_contact_list">
                                <li><div class="question">Have any questions?</div></li>
                                <li>
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                    <a href="tel:{{ Config::get('constants.contact') }}" >{{ Config::get('constants.contact') }}</a>
                                </li>
                                <li>
                                    <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                    <a href="mailto:{{ Config::get('constants.email') }}">{{ Config::get('constants.email') }}</a>
                                </li>
                            </ul>
                            <div class="top_bar_login ml-auto">
                                <div class="login_button"><a href="#">Register or Login</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>				
    </div>

    <!-- Header Content -->
    <div class="header_container">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="header_content d-flex flex-row align-items-center justify-content-start">
                        <div class="logo_container">
                            <a href="#">
                                <div class="logo_text"><img src="{{ asset('images/igniteLogo.jpg') }}" height="80" width="150"></div>
                            </a> 
                        </div>
                        <nav class="main_nav_contaner ml-auto">
                            <ul class="main_nav">
                                <li class="active"><a href="#">Home</a></li>
                                <li><a href="about.html">About</a></li>
                                <li><a href="courses.html">Courses</a></li>
                                <li><a href="blog.html">Blog</a></li>
                                <li><a href="#">Page</a></li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                            <div class="search_button"><i class="fa fa-search" aria-hidden="true"></i></div>

                            <!-- Hamburger -->

                            <div class="shopping_cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i></div>
                            <div class="hamburger menu_mm">
                                <i class="fa fa-bars menu_mm" aria-hidden="true"></i>
                            </div>
                        </nav>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Header Search Panel -->
    <div class="header_search_container">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="header_search_content d-flex flex-row align-items-center justify-content-end">
                        <form action="#" class="header_search_form">
                            <input type="search" class="search_input" placeholder="Search" required="required">
                            <button class="header_search_button d-flex flex-column align-items-center justify-content-center">
                                <i class="fa fa-search" aria-hidden="true"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>			
    </div>			
</header>

<!-- Menu -->

<div class="menu d-flex flex-column align-items-end justify-content-start text-right menu_mm trans_400">
    <div class="menu_close_container"><div class="menu_close"><div></div><div></div></div></div>
    <div class="search">
        <form action="#" class="header_search_form menu_mm">
            <input type="search" class="search_input menu_mm" placeholder="Search" required="required">
            <button class="header_search_button d-flex flex-column align-items-center justify-content-center menu_mm">
                <i class="fa fa-search menu_mm" aria-hidden="true"></i>
            </button>
        </form>
    </div>
    <nav class="menu_nav">
        <ul class="menu_mm">
            <li class="menu_mm"><a href="index.html">Home</a></li>
            <li class="menu_mm"><a href="#">About</a></li>
            <li class="menu_mm"><a href="#">Courses</a></li>
            <li class="menu_mm"><a href="#">Blog</a></li>
            <li class="menu_mm"><a href="#">Page</a></li>
            <li class="menu_mm"><a href="contact.html">Contact</a></li>
        </ul>
    </nav>
</div>