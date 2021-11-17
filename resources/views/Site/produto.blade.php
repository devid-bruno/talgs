<!DOCTYPE html>
<html lang="en" class="no-js">
<!-- Start Head -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="text" content="">
    <meta name="author" content=""><!-- description -->
    <meta name="description" content=""><!-- keywords -->
    <meta name="keywords" content="">
    <!--Start Title -->
    <title>TalgsCompany | Loja virtual</title>
    <!--End Title -->
    <!-- Start Favicon -->
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png"><!-- END Favicon -->
    <!-- Uikit Framework -->
    <link rel="stylesheet" href="css/uikit.min.css" /><!-- Bootstrap Framework -->
    <link rel="stylesheet" href="css/bootstrap.min.css" /><!-- Font Awesome -->
    <link rel="stylesheet" href="css/font-awesome.min.css"><!-- Main Stylesheet -->
    <link rel="stylesheet" href="css/style.css" /><!-- Responsive -->
    <link rel="stylesheet" href="css/responsive.css"><!-- Niche -->
    <link rel="stylesheet" href="css/niches/fashion-01.css" />
    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script><script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head><!-- End Head -->
<!-- Main Body -->

<body>
    <!-- Return to top icon --><a href="javascript:" id="return-to-top"><span
            data-uk-icon="icon: arrow-up; ratio: 1.3"></span></a><!-- Loading Screen -->
    <div id="loader-wrapper">
        <!-- Loading Image -->
        <div class="loader-img"><img src="images/loading-screen.gif" alt="" /></div><!-- END Loading Image -->
        <!-- Loading Screen Split -->
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div><!-- End Loading Screen Split -->
    </div><!-- End Loading Screen -->
    <!-- Off-Canvas Navigation -->
    <div id="offcanvas-nav" data-uk-offcanvas="mode: push; overlay: true; esc-close: true;">
        <!-- MENU LATERAL-->
        <div class="uk-offcanvas-bar menu-dark bg-black">
            <ul class="uk-nav-default uk-nav-parent-icon text-left" data-uk-nav>
                <li class="margin-top-25px"><a class="uk-navbar-item uk-logo text-white text-weight-700"
                        href="#">Yesir.</a></li><!-- Link -->
                <li class="margin-bottom-10px"><a href="{{ route('site.index') }}"><span
                            class="text-gray-light text-weight-400 text-medium roboto">Home</span></a></li>
                <!-- End Link -->
                <!-- Link -->
                <li class="margin-bottom-10px"><a href="page-about.html"><span
                            class="text-gray-light text-weight-400 text-medium roboto">Sobre</span></a></li>
                <!-- End Link -->
                <!-- Link -->
                <li class="uk-parent margin-bottom-10px"><a href="#"><span
                            class="text-gray-light text-weight-400 text-medium roboto">Produtos</span></a><!-- Dropdown -->
                    <ul class="uk-nav-sub">
                        <li><a href="{{ route('site.produto') }}">1ª coleção Black&White</a></li>
                        <li><a href="">EM BREVE!!!</a></li>
                        <li><a href="">EM BREVE!!!</a></li>
                    </ul><!-- End Dropdown -->
                </li><!-- End Link -->
                <!-- Link -->
                <li class="uk-parent margin-bottom-10px"><a href="#"><span
                            class="text-gray-light text-weight-400 text-medium roboto">Paginas Úteis</span></a><!-- Dropdown -->
                    <ul class="uk-nav-sub">
                        <li><a href="page-sign-up.html">Entrar na conta</a></li>
                        <li><a href="page-sign-in.html">Cadastrar conta</a></li>
                        <li><a href="page-cart.html">Carinho</a></li>
                    </ul><!-- End Dropdown -->
                </li><!-- End Link -->
                <!-- End Link -->
                <!-- Link -->
                <li class="margin-bottom-10px"><a href="#"><span
                            class="text-gray-light text-weight-400 text-medium roboto">Contato</span></a></li>
                <!-- End Link -->
                <!-- Link -->
                <li class="uk-parent margin-bottom-10px"><a href="#"><span
                            class="text-gray-light text-weight-400 text-medium roboto">Carinho</span></a><!-- Dropdown -->
                    <ul class="uk-nav-sub elements-nav">
                        <!-- Cart Item -->
                        <li class="margin-top-bottom-25px"><img
                                class="float-left width-25px margin-left-10px margin-right-10px"
                                src="images/" alt="" /><a href="#"><span
                                    class="text-gray-light text-weight-400 text-medium roboto"></span></a></li>
                        <!-- End Cart Item -->
                        <!-- Cart Item -->
                        <li class="margin-bottom-25px"><img
                                class="float-left width-25px margin-left-10px margin-right-10px"
                                src="images/" alt="" /><a href="#"><span
                                    class="text-gray-light text-weight-400 text-medium roboto"></span></a>
                        </li><!-- End Cart Item -->
                        <!-- Cart Total Price -->
                        <li class="uk-nav-divider margin-top-25px"></li>
                        <li class="margin-bottom-25px text-weight-400">Subtotal:<span
                                class="text-white text-weight-600">R$</span></li>
                        <li class="uk-nav-divider"></li><!-- End Cart Total Price -->
                        <!-- Cart Buttons -->
                        <li><a href="page-cart.html"><span class="text-gray-light text-weight-400 text-medium">Abrir Carinho</span></a></li>
                        <li><a href="page-checkout.html"><span class="text-gray-light text-weight-400 text-medium">Finalizar</span>
                        </a></li>
                        <!-- End Cart Buttons -->
                    </ul><!-- End Dropdown -->
                </li><!-- End Link -->
                <!-- Link -->
                <li class="uk-parent margin-bottom-10px"><a href="#"><span
                            class="text-gray-light text-weight-400 text-medium roboto">Favoritados</span></a>
                    <!-- Dropdown -->
                    <ul class="uk-nav-sub elements-nav">
                        <!-- Cart Item -->
                        <li class="margin-top-bottom-25px"><img
                                class="float-left width-25px margin-left-10px margin-right-10px"
                                src="images/fashion/products/01s.jpg" alt="" /><a href="#"><span
                                    class="text-gray-light text-weight-400 text-medium roboto"></span></a></li>
                        <!-- End Cart Item -->
                        <!-- Cart Item -->
                        <li class="margin-bottom-25px"><img
                                class="float-left width-25px margin-left-10px margin-right-10px"
                                src="images/fashion/products/01s.jpg" alt="" /><a href="#"><span
                                    class="text-gray-light text-weight-400 text-medium roboto"></span></a></li>
                        <!-- End Cart Item -->
                        <!-- Cart Item -->
                        <li class="margin-bottom-25px"><img
                                class="float-left width-25px margin-left-10px margin-right-10px"
                                src="images/fashion/products/01s.jpg" alt="" /><a href="#"><span
                                    class="text-gray-light text-weight-400 text-medium roboto"></span></a>
                        </li><!-- End Cart Item -->
                        <li class="uk-nav-divider margin-top-25px"></li><!-- End Cart Total Price -->
                        <!-- Cart Buttons -->
                        <li><a href="page-cart.html"><span class="text-gray-light text-weight-400 text-medium">Olhar Favoritos</span></a></li>
                        <li><a href="page-checkout.html"><span
                                    class="text-gray-light text-weight-400 text-medium">Finalizar</span></a></li>
                        <!-- End Cart Buttons -->
                    </ul><!-- End Dropdown -->
                </li><!-- End Link -->
            </ul><!-- End Off-Canvas Links -->
            <!-- Navigation Footer -->
            <div class="nav-footer margin-top-25px margin-bottom-50px">
                <!-- Off-Canvas Search -->
                <form class="uk-search uk-search-default width-100 bg-black"><a href=""
                        class="uk-search-icon-flip text-white" data-uk-search-icon></a><input
                        class="uk-search-input text-medium text-white text-weight-400" type="search"
                        placeholder="Pesquisar"></form><!-- End Off-Canvas Search -->
                <!-- Social Links for Off-Canvas Footer -->
                <ul class="list-unstyled no-margin-bottom margin-top-20px">
                    <li class="display-inline-block margin-right-25px"><a href="https://www.instagram.com/talgs.clothing"><i
                                class="fab fa-instagram instagram"></i></a></li>
                </ul>
                <p class="no-margin-bottom margin-top-20px text-small text-gray-light text-weight-400">Desenvolvido por D.B acesse o
                    <a href="https://github.com/kawagone" target="_blank" > github</a>
                </p>
                <!-- End Social Links for Off-Canvas Footer -->
                <!-- Copyright Information -->
            </div><!-- End Navigation Footer -->
        </div><!-- FIM MENU LATERAL -->
    </div><!-- End Off-Canvas Navigation -->
    <!-- Header Light -->
    <div class="z-index-999" data-uk-sticky>
        <!-- Header Options -->
        <div class="navbar-white">
            <!-- Header Container -->
            <nav class="uk-navbar-container" data-uk-navbar="boundary-align: true; align: center;">
                <!-- Navigation Left Side -->
                <div class="uk-navbar-left padding-left-four-percent">
                    <!-- Logo Image --><a class="uk-navbar-item uk-logo text-gray-dark text-weight-700"
                        href="#">TalgsCompany©</a>
                </div><!-- End Navigation Left Side -->
                <!-- MENU VERSAO DESKTOP -->
                <div class="uk-navbar-right uk-dark padding-right-four-percent">
                    <!-- Links -->
                    <ul class="uk-navbar-nav text-weight-600">
                        <!-- Link -->
                        <li><a class="uk-visible@l" href="{{route('site.index')}}"><span
                                    class="text-weight-400 text-medium roboto">Home</span></a></li><!-- Link -->
                        <li><a class="uk-visible@l" href="page-about.html"><span
                                    class="text-weight-400 text-medium roboto">Sobre</span></a></li><!-- Link -->
                        <li><a class="uk-visible@l" href="#"><span
                                    class="text-weight-400 text-medium roboto">Produtos</span></a>
                            <div class="bg-white" data-uk-dropdown>
                                <!-- Dropdown Links -->
                                <ul class="uk-nav uk-navbar-dropdown-nav">
                                    <li><a href="{{ route('site.produto') }}">1ª coleção Black&White</a></li>
                                    <li><a href="shop-grid-col-03.html">EM BREVE!!!!</a></li>
                                    <li><a href="shop-grid-col-02.html">EM BREVE!!!!</a></li>
                                </ul><!-- End Dropdown Links -->
                            </div>
                        </li><!-- Link -->
                        <li><a class="uk-visible@l" href="contact.htm"><span
                                    class="text-weight-400 text-medium roboto">Contato</span></a></li>
                        <!-- Cart Navigation -->
                        <li>
                            <!-- Cart Icon --><a class="uk-visible@m" href="#"><span
                                    class="text-gray-dark margin-right-10px"
                                    data-uk-icon="icon: cart; ratio: 1"></span><span
                                    class="uk-badge bg-gray-extra-dark text-white badge-small margin-left-minus-10px"></span></a>
                            <!-- Cart Dropdown -->
                            <div data-uk-dropdown>
                                <ul class="uk-nav uk-dropdown-nav">
                                    <!-- Cart Item -->
                                    <li class="margin-bottom-25px"><img
                                            class="float-left width-25px margin-left-10px margin-right-10px"
                                            src="" alt="" /><a href="#"
                                            class="text-gray-dark text-weight-400 text-medium roboto"><span
                                                class="text-gray-dark"></span></a></li><!-- End Cart Item -->
                                    <!-- Cart Item -->
                                    <li class="margin-bottom-25px"><img
                                            class="float-left width-25px margin-left-10px margin-right-10px"
                                            src="" alt="" /><a href="#"
                                            class="text-gray-dark text-weight-400 text-medium roboto"><span
                                                class="text-gray-dark"></span></a></li><!-- End Cart Item -->
                                    <!-- Cart Total Price -->
                                    <li class="uk-nav-divider"></li>
                                    <li class="margin-top-bottom-25px text-weight-400">Subtotal:<span
                                            class="text-gray-dark text-weight-600"></span></li>
                                    <li class="uk-nav-divider"></li><!-- End Cart Total Price -->
                                    <!-- Cart Buttons -->
                                    <li><a href="page-cart.html"><span class="text-gray-dark text-weight-400">Abrir Carinho`</span></a></li>
                                    <li><a href="page-checkout.html"><span
                                                class="text-gray-dark text-weight-400">Finalizar</span></a></li>
                                    <!-- End Cart Buttons -->
                                </ul>
                            </div><!-- End Cart Dropdown -->
                        </li><!-- End Cart Navigation -->
                        <!-- Favorite Navigation -->
                        <li>
                            <!-- Favorite Icon --><a class="uk-visible@m" href="#"><span
                                    class="text-gray-dark margin-right-10px"
                                    data-uk-icon="icon: heart; ratio: 1"></span><span
                                    class="uk-badge bg-gray-extra-dark text-white badge-small"></span></a>
                            <!-- Favorite Dropdown -->
                            <div data-uk-dropdown>
                                <ul class="uk-nav uk-dropdown-nav">
                                    <!-- Favorite Item -->
                                    <li class="display-block margin-bottom-25px"><img
                                            class="float-left width-25px margin-left-10px margin-right-10px"
                                            src="" alt="" /><a href="#"
                                            class="text-gray-dark text-weight-400 text-medium roboto"><span
                                                class="text-gray-dark"></span></a></li>
                                    <!-- End Favorite Item -->
                                    <!-- Favorite Item -->
                                    <li class="display-block margin-bottom-25px"><img
                                            class="float-left width-25px margin-left-10px margin-right-10px"
                                            src="" alt="" /><a href="#"
                                            class="text-gray-dark text-weight-400 text-medium roboto"><span
                                                class="text-gray-dark"></span></a></li><!-- End Favorite Item -->
                                    <!-- Favorite Item -->
                                    <li class="display-block margin-bottom-25px"><img
                                            class="float-left width-25px margin-left-10px margin-right-10px"
                                            src="" alt="" /><a href="#"
                                            class="text-gray-dark text-weight-400 text-medium roboto"><span
                                                class="text-gray-dark"></span></a></li>
                                    <!-- End Favorite Item -->
                                    <!-- Divider -->
                                    <li class="uk-nav-divider"></li><!-- Links -->
                                    <li><a href="page-cart.html"><span class="text-gray-dark text-weight-400">Abrir Favoritos</span></a></li>
                                </ul>
                            </div><!-- End Cart Dropdown -->
                        </li><!-- End Favorite Navigation -->
                        <!-- Off-Canvas Navigation Toggle -->
                        <li>
                            <div class="uk-navbar-right uk-hidden@l"><a class="uk-navbar-toggle"
                                    data-uk-navbar-toggle-icon data-uk-toggle="target: #offcanvas-nav"></a></div>
                        </li><!-- End Off-Canvas Navigation Toggle -->
                        <li><a class="uk-navbar-toggle text-gray-dark" href="#modal-full4" data-uk-search-icon
                                data-uk-toggle></a><!-- Search Modal -->
                            <div id="modal-full4" class="uk-modal-full uk-modal" data-uk-modal>
                                <div class="bg-black uk-modal-dialog uk-flex uk-flex-center uk-flex-middle"
                                    data-uk-height-viewport><button class="bg-black uk-modal-close-full" type="button"
                                        data-uk-close></button><!-- Input Form -->
                                    <form class="uk-search width-100 uk-search-large"><input
                                            class="uk-search-input text-uppercase text-weight-500 text-center letter-spacing-1"
                                            type="search" placeholder="Search"></form><!-- End Input Form -->
                                </div>
                            </div><!-- End Search Modal -->
                        </li>
                    </ul><!-- End Links -->
                </div><!-- FIM MENU PARA VERSAO DESKTOP -->
            </nav><!-- End Header Container -->
        </div><!-- End Header Options -->
    </div><!-- End Header Light -->
    <!-- Shop -->
    <div class="padding-top-bottom-150px">
        <div class="container sm-container-spread">
            <!-- Row -->
            <div class="row">
                <!-- Column -->
                <div class="col-md-8 col-sm-12 col-xs-12 center-col text-center margin-auto">
                    <h4 class="text-weight-700 text-gray-dark title-medium">Produtos Em Estoque</h4>
                    <p class="text-weight-400">Apesar Produtos em estoque pronta entrega</p>
                </div><!-- End Column -->
            </div><!-- End Row -->
            <!-- Products -->
            <div class="margin-top-75px">
                <!-- Row -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 margin-bottom-75px text-center">
                        <!-- Item Image -->
                        <div class="images">
                            <div class="uk-inline-clip uk-transition-toggle" tabindex="0">
                                <!-- Image --><a href="page-product.html"><img src="images/blusas/branca.jpeg"
                                        alt="" /></a>
                                <div
                                    class="uk-card-badge uk-label text-small padding-10px bg-gray-dark margin-right-50px">
                                    Novo</div>
                                <!-- Hover -->
                                <div class="uk-transition-fade uk-position-bottom text-white bg-black height-20">
                                    <div class="uk-position-center text-center"><a href="#"
                                            class="margin-right-5px text-extra-large"><i
                                                class="fas fa-star text-gray-light"></i></a>5.0 <a href="#"
                                            class="margin-left-25px margin-right-5px text-extra-large"><i
                                                class="fas fa-comments text-gray-light"></i></a>+99 <a href="#"
                                            class="margin-left-25px margin-right-5px text-extra-large"><i
                                                class="fas fa-heart text-red"></i></a>+99 </div>
                                </div><!-- End Hover -->
                            </div>
                        </div><!-- End Item Image -->
                        <!-- Item Description -->
                        <p class="text-extra-large roboto margin-top-25px text-weight-700 text-gray-dark"><a
                                class="text-weight-700 text-gray-dark" href="page-product.html">Camiseta Branca B/W</a></p>
                        <h6 class="roboto margin-top-25px text-weight-600 text-extra-large text-gray-dark">R$ 64,90</h6><a
                            class="btn btn-small btn-transparent-black sm-margin-left-right-auto sm-display-table xs-no-margin-bottom"
                            href="page-cart.html">Add ao carinho</a><!-- End Item Description -->
                    </div><!-- End Column -->
                    <!-- Column -->
                    <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 margin-bottom-75px text-center">
                        <!-- Item Image -->
                        <div class="images">
                            <div class="uk-inline-clip uk-transition-toggle" tabindex="0">
                                <!-- Image --><a href="page-product.html"><img src="images/blusas/preta.jpeg"
                                        alt="" /></a>
                                <div
                                    class="uk-card-badge uk-label text-small padding-10px bg-gray-dark margin-right-50px">
                                    Novo</div>
                                <!-- Hover -->
                                <div class="uk-transition-fade uk-position-bottom text-white bg-black height-20">
                                    <div class="uk-position-center text-center"><a href="#"
                                            class="margin-right-5px text-extra-large"><i
                                                class="fas fa-star text-gray-light"></i></a>5.0 <a href="#"
                                            class="margin-left-25px margin-right-5px text-extra-large"><i
                                                class="fas fa-comments text-gray-light"></i></a>+99 <a href="#"
                                            class="margin-left-25px margin-right-5px text-extra-large"><i
                                                class="fas fa-heart text-red"></i></a>+99 </div>
                                </div><!-- End Hover -->
                            </div>
                        </div><!-- End Item Image -->
                        <!-- Item Description -->
                        <p class="text-extra-large roboto margin-top-25px text-weight-700 text-gray-dark"><a
                                class="text-weight-700 text-gray-dark" href="page-product.html">Camiseta Preta B/W</a></p>
                        <h6 class="roboto margin-top-25px text-weight-600 text-extra-large text-gray-dark">R$64,90</h6><a
                            class="btn btn-small btn-transparent-black sm-margin-left-right-auto sm-display-table xs-no-margin-bottom"
                            href="page-cart.html">Add ao carinho</a><!-- End Item Description -->
                    </div>
                </div><!-- End Row -->
            </div><!-- End Products -->
        </div><!-- End Container -->
    </div>
    <!-- Footer-->
<footer class="image-bg-6 overlay-black-dense padding-top-bottom-150px">
        <!-- Row -->
        <div class="row">
            <div class="container sm-container-spread">
                <!-- Column -->
                <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                    <!-- Text -->
                    <h6 class="margin-bottom-25px"><a href="#"
                            class="roboto text-extra-large text-gray-light margin-right-10px text-weight-600"><span
                                data-uk-icon="icon: mail; ratio: 2"
                                class="margin-right-10px"></span>talgs2001@gmail.com</a></h6>
                    <h6 class="margin-bottom-25px"><a href="#"
                            class="roboto text-extra-large text-gray-light margin-right-10px text-weight-600"><span
                                data-uk-icon="icon: receiver; ratio: 2" class="margin-right-10px"></span>telefone</a></h6><!-- Links -->
                    <div
                        class="separator width-50 bottom-border border-1px border-color-gray-extra-dark margin-top-bottom-25px center-col">
                    </div><!-- Social Links for Footer -->
                    <ul class="list-unstyled margin-top-25px no-margin-bottom text-center">
                        <li class="display-inline-block margin-right-25px"><a class="text-medium text-weight-700"
                                href="https://www.instagram.com/talgs.clothing"><i class="fab fa-instagram instagram fa-2x"></i></a></li>
                    </ul><!-- End Social Links for Footer -->
                </div><!-- End Column -->
            </div>
        </div><!-- End Row -->
    </footer><!-- End Footer-->
    <!-- jQuery Library -->
    <script src="js/jquery.min.js"></script><!-- Uikit Framework -->
    <script src="js/uikit.min.js"></script><!-- Uikit Icons -->
    <script src="js/uikit-icons.min.js"></script><!-- Bootstrap Framework -->
    <script src="js/bootstrap.min.js"></script><!-- Modernizr -->
    <script src="js/modernizr.js"></script><!-- Font Awesome -->
    <script src="js/fontawesome.min.js"></script><!-- Contact Form Validation -->
    <script src="js/contact.js"></script><!-- Custom Scripts -->
    <script src="js/custom.js"></script>
</body>

</html>