<!-- Main Header-->
<header class="main-header header-style-two">

    <!-- Header Lower -->
    <div class="header-lower">
        <!-- Main box -->
        <div class="main-box">
            <div class="logo-box">
                <div class="logo"><a href={{ route('accueil') }}>
                        <img src={{ asset("storage/01HW0FAXYRB67BP5GYTBF7QYRC.jpg") }} alt="" title="Tronis" width="100"></a>
                </div>
            </div>

            <!--Nav Box-->
            <div class="nav-outer">
                <nav class="nav main-menu">
                    <ul class="navigation">
                        <li><a href={{ route('accueil') }}>Accueil</a></li>
{{--                        class="dropdown"--}}
                        <li>
                            <a href={{ route('formations') }}>Formations</a>
{{--                            <ul>--}}
{{--                                <li><a href="page-about.html">About</a></li>--}}
{{--                                <li class="dropdown"> <a href="#">Projects</a>--}}
{{--                                    <ul>--}}
{{--                                        <li><a href="page-projects.html">Projects List</a></li>--}}
{{--                                        <li><a href="page-project-details.html">Project Details</a></li>--}}
{{--                                    </ul>--}}
{{--                                </li>--}}
{{--                                <li class="dropdown"> <a href="#">Team</a>--}}
{{--                                    <ul>--}}
{{--                                        <li><a href="page-team.html">Team List</a></li>--}}
{{--                                        <li><a href="page-team-details.html">Team Details</a></li>--}}
{{--                                    </ul>--}}
{{--                                </li>--}}
{{--                                <li><a href="page-testimonial.html">Testimonial</a></li>--}}
{{--                                <li><a href="page-pricing.html">Pricing</a></li>--}}
{{--                                <li><a href="page-faq.html">FAQ</a></li>--}}
{{--                                <li><a href="page-404.html">Page 404</a></li>--}}
{{--                            </ul>--}}
                        </li>
                        <li>
                            <a href={{ route('publications') }}>Blog</a>
{{--                            <ul>--}}
{{--                                <li><a href="news-grid.html">News Grid</a></li>--}}
{{--                                <li><a href="news-details.html">News Details</a></li>--}}
{{--                            </ul>--}}
                        </li>
                        <li><a href={{ route('contacts') }}>Contacts</a></li>
                    </ul>
                </nav>
                <!-- Main Menu End-->

                <div class="outer-box">
                    <div class="ui-btn-outer">
                        <button class="ui-btn ui-btn search-btn"> <span class="icon lnr lnr-icon-search"></span> </button>
                        <div class="mobile-nav-toggler"><span class="icon lnr-icon-bars"></span></div>
                    </div>
                    <div class="contact-info">
                        <a href="tel:1234567890"> +92 (8800) - 9850</a><br><i class="icon fas fa-phone-flip"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header Lower -->

    <!-- Mobile Menu  -->
    <div class="mobile-menu">
        <div class="menu-backdrop"></div>

        <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
        <nav class="menu-box">
            <div class="upper-box">
                <div class="nav-logo"><a href={{ route('accueil') }}><img src={{ asset("storage/01HW0FAXYRB67BP5GYTBF7QYRC.jpg") }} alt=""></a></div>
                <div class="close-btn"><i class="icon fa fa-times"></i></div>
            </div>
            <ul class="navigation clearfix">
                <!--Keep This Empty / Menu will come through Javascript-->
            </ul>
            <ul class="contact-list-one">
                <li>
                    <!-- Contact Info Box -->
                    <div class="contact-info-box"> <i class="icon lnr-icon-phone-handset"></i> <span class="title">Call Now</span> <a href="tel:+92880098670">+92 (8800) - 98670</a> </div>
                </li>
                <li>
                    <!-- Contact Info Box -->
                    <div class="contact-info-box"> <span class="icon lnr-icon-envelope1"></span> <span class="title">Send Email</span> <a href="mailto:help@company.com">help@company.com</a> </div>
                </li>
                <li>
                    <!-- Contact Info Box -->
                    <div class="contact-info-box"> <span class="icon lnr-icon-clock"></span> <a href="#" class="number">+92 666 888 0000</a> </div>
                </li>
            </ul>
        </nav>
    </div>
    <!-- End Mobile Menu -->

    <!-- Header Search -->
{{--    <div class="search-popup"> <span class="search-back-drop"></span>--}}
{{--        <button class="close-search"><span class="fa fa-times"></span></button>--}}
{{--        <div class="search-inner">--}}
{{--            <form method="post" action="index.html">--}}
{{--                <div class="form-group">--}}
{{--                    <label>--}}
{{--                        <input type="text" name="search-field" value="" placeholder="Search..." required="">--}}
{{--                    </label>--}}
{{--                    <button type="submit"><i class="fa fa-search"></i></button>--}}
{{--                </div>--}}
{{--            </form>--}}
{{--        </div>--}}
{{--    </div>--}}
    <!-- End Header Search -->

    <!-- Sticky Header  -->
    <div class="sticky-header">
        <div class="auto-container">
            <div class="inner-container">
                <!--Logo-->
                <div class="logo">
                    <a href={{ route('accueil') }}><img src={{ asset("storage/01HW0FAXYRB67BP5GYTBF7QYRC.jpg") }} alt=""></a>
                    <h3><a href={{ route('accueil') }} class="logo-t">SHARK TECHNOLOGYS</a></h3>
                </div>

                <!--Right Col-->
                <div class="nav-outer">
                    <!-- Main Menu -->
                    <nav class="main-menu">
                        <div class="navbar-collapse show collapse clearfix">
                            <ul class="navigation clearfix">
                                <!--Keep This Empty / Menu will come through Javascript-->
                            </ul>
                        </div>
                    </nav>
                    <!-- Main Menu End-->

                    <!--Mobile Navigation Toggler-->
                </div>
            </div>
        </div>
    </div>
    <!-- End Sticky Menu -->

    <!-- Header Top -->
{{--    <div class="left-header">--}}
{{--        <div class="inner-container">--}}
{{--            <div class="top-left">--}}
{{--                <ul class="list-style-one">--}}
{{--                    <li>mon - fri</li>--}}
{{--                    <li>9am - 7pm</li>--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--            <div class="top-bottom">--}}
{{--                <ul class="links-vight">--}}
{{--                    <li><a href="#">Twitter</a></li>--}}
{{--                    <li><a href="#">Facebook</a></li>--}}
{{--                    <li><a href="#"> youtube</a></li>--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
</header>
<!--End Main Header -->
