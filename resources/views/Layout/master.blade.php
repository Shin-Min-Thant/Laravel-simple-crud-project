
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- SEO Meta Tags -->
        <meta name="description" content="Your description">
        <meta name="author" content="Your name">

        <!-- OG Meta Tags to improve the way the post looks when you share the page on Facebook, Twitter, LinkedIn -->
        <meta property="og:site_name" content="" /> <!-- website name -->
        <meta property="og:site" content="" /> <!-- website link -->
        <meta property="og:title" content=""/> <!-- title shown in the actual shared post -->
        <meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
        <meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
        <meta property="og:url" content="" /> <!-- where do you want your post to link to -->
        <meta name="twitter:card" content="summary_large_image"> <!-- to have large image post format in Twitter -->

        <!-- Webpage Title -->
       @yield("title")

        <!-- Styles -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;1,400&family=Raleway:wght@700&display=swap" rel="stylesheet">
        <link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/fontawesome-all.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/swiper.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/magnific-popup.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet">

        <!-- Favicon  -->
        <link rel="icon" href="{{ asset('assets/images/favicon.png') }}">

        {{-- Bootstrap cdn --}}
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">

    </head>
    <body data-spy="scroll" data-target=".fixed-top">

        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg fixed-top navbar-light">
            <div class="container">

                <!-- Text Logo - Use this if you don't have a graphic logo -->
                <!-- <a class="navbar-brand logo-text page-scroll" href="index.html">Name</a> -->

                <!-- Image Logo -->
                <a class="navbar-brand logo-image" href="{{ route('create#page') }}"><img src="{{ asset('assets/images/logo.svg') }}" alt="alternative"></a>

                <button class="navbar-toggler p-0 border-0" type="button" data-toggle="offcanvas">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Choose Page</a>
                            <div class="dropdown-menu" aria-labelledby="dropdown01">
                                <a class="dropdown-item page-scroll" href="{{ route('create#page') }}">Create Page</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item page-scroll" href="{{ route('read') }}">Read Page</a>
                                <div class="dropdown-divider"></div>
                            </div>
                        </li>
                    </ul>
                </div> <!-- end of navbar-collapse -->
            </div> <!-- end of container -->
        </nav> <!-- end of navbar -->
        <!-- end of navigation -->

        @yield("body")

        <!-- Copyright -->
        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <p class="p-small">Copyright © Some name</p>
                    </div> <!-- end of col -->
                </div> <!-- enf of row -->
            </div> <!-- end of container -->
        </div> <!-- end of copyright -->
        <!-- end of copyright -->

        {{-- Bootstrap cdn --}}
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
        <!-- Scripts -->
        <script src="{{ asset('assets/js/jquery.min.js') }}"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
        <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script> <!-- Bootstrap framework -->
        <script src="{{ asset('assets/js/jquery.easing.min.js') }}"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
        <script src="{{ asset('assets/js/swiper.min.js') }}"></script> <!-- Swiper for image and text sliders -->
        <script src="{{ asset('assets/js/jquery.magnific-popup.js') }}"></script> <!-- Magnific Popup for lightboxes -->
        <script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script> <!-- Isotope for filter -->
        <script src="{{ asset('assets/js/scripts.js') }}"></script> <!-- Custom scripts -->
    </body>
</html>
