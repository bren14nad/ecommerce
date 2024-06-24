    @section('nav')
        <style>
            @media (min-width: 992px) {
                .nav-center {
                    display: flex;
                    justify-content: center;
                }
            }
            .carousel-item img {
                object-fit: contain;
                width: 100%;
                height: 100%;
            }
            .navbar-collapse .navbar-nav .nav-item {
                margin-right: 2rem !important; /* Espace entre les éléments de la navbar */
            }

            .navbar-collapse .navbar-nav .nav-link {
                color: white !important; /* Couleur blanche pour les liens de la navbar */
            }
            .marquee {
                width: 100%;
                height: 100%;
                overflow: hidden;
                position: relative;
                white-space: nowrap;
                /* animation: marquee 5s linear infinite; */
            }

            .marquee p {
                display: inline-block;
                padding-left: 100%;
                animation: marquee 10s linear infinite;
            }

            @keyframes marquee {
                0% { transform: translateX(0); }
                100% { transform: translateX(-100%); }
            }
            .vertical-scroll {
                /* height: 200px; */ /* Ajustez la hauteur selon vos besoins */
                overflow-y: auto; /* Permet le défilement vertical */
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
            }

            .vertical-scroll-item {
                padding: 1rem;
                animation: vertical-scroll 5s linear infinite;
            }

            @keyframes vertical-scroll {
                0% {
                    transform: translateY(0%);
                }
                100% {
                    transform: translateY(-100%);
                }
            }
            .carousel-image {
                height: 500px; /* Définissez la hauteur souhaitée */
                object-fit: cover; /* Permet de conserver les proportions de l'image tout en remplissant l'espace */
            }

        </style>
        <!-- Topbar Start -->
        <div class="container-fluid bg-primary">
            {{--               <div class="row bg-secondary py-2 px-xl-5">
                <div class="col-lg-6 d-none d-lg-block">
                    <div class="d-inline-flex align-items-center">
                        <a class="text-dark" href="">FAQs</a>
                        <span class="text-muted px-2">|</span>
                        <a class="text-dark" href="">Help</a>
                        <span class="text-muted px-2">|</span>
                        <a class="text-dark" href="">Support</a>
                    </div>
                </div>
                <div class="col-lg-6 text-center text-lg-right">
                    <div class="d-inline-flex align-items-center">
                        <a class="text-dark px-2" href="">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a class="text-dark px-2" href="">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a class="text-dark px-2" href="">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a class="text-dark px-2" href="">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a class="text-dark pl-2" href="">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
            </div> --}}
            <div class="row bg-danger h-auto  bg-secondary">
                <div class="col-lg-9 bg-white h-50"><div class="marquee border-0 text-black fs-4"><p>je vous remercie pour votre confiance</p></div></div>
                <div class="col-lg-3 text-center ">
                    <div id="carouselExampleSlidesOnly1" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <span class="fs-3 text-white">High Quality</span>
                            </div>
                            <div class="carousel-item">
                                <span class="fs-3 text-white">good Quality</span>
                            </div>
                            <div class="carousel-item">
                                <span class="fs-3 text-white">wonderful Quality</span>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="row align-items-center py-3 px-xl-5">
                <div class="col-lg-4 col-6 d-none d-lg-block">
                    <a href="" class="text-decoration-none">
                        <h1 class="m-0 display-5 font-weight-semi-bold text-white"><span class="text-white font-weight-bold border px-3 mr-1">E</span> 2ncorporate</h1>
                    </a>
                </div>
                <div class="col-lg-4 col-6 text-left">
                    <form action="">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Recherche..." aria-label="recherche..." aria-describedby="basic-addon1">
                            <span class="input-group-text bg-transparent text-" id="basic-addon1"><i class="fa fa-search"></i></span>
                        </div>
                    </form>
                </div>
                <div class="col-lg-1 col-2 text-right">
                    <a href={{ route('panier') }} class="btn border position-relative">
                        <i class="fas fa-shopping-cart text-"></i>
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                        99+
                        </span>
                    </a>
                </div>
                <div class="col-lg-1">
                        
                </div>
                <div class="col-lg-1 col-2 text-right  border-end">
                        <a href={{ route('connexion') }} class=" text-decoration-none text-white">Se connecter</a>
                </div>
                <div class="col-lg-1 col-2 text-right">
                    <a href={{ route('inscription') }} class=" text-decoration-none text-white">S'inscrire</a>
                </div>
            </div>
            <div class="row">
                <div class="container-fluid nav-center">
                    <nav class="navbar sticky-lg-top navbar-expand-lg text-white ">
                        <a href="" class="text-decoration-none d-lg-none text-white ">
                            <h2 class="ms-0 display-5 font-weight-semi-bold"><span class="text-white font-weight-bold border px-3 mr-1">E</span> 2NCORPORATE</h2>
                        </a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNavDropdown" >
                            <div class="navbar-nav  py-0"  >
                                <a href="/" class="nav-item nav-link active fs-5 font-monospace"><i class="fa fa-home"></i> Accueil </a>
                                <a href="shop.html" class="nav-item nav-link fs-5 font-monospace"><i class="fa fa-shopping-cart"></i> Shop</a>
                                <a href={{ route('admin') }} class="nav-item nav-link fs-5 font-monospace"><i class="fa fa-key"></i> Admin</a>
                                <div class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle fs-5 font-monospace" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-shipping-fast"></i> Catégories
                                    </a>
                                    <div class="dropdown-menu rounded-2 m-0">
                                        <a href="cart.html" class="dropdown-item"> Shopping Cart</a>
                                        <a href="checkout.html" class="dropdown-item"> Checkout</a>
                                        <a href="" class="dropdown-item  "> CÂBLE ET CONDUCTEUR</a>
                                        <!-- Autres éléments de la dropdown -->
                                    </div>
                                </div>
                                <a href="contact.html" class="nav-item nav-link fs-5 font-monospace"><i class="fa fa-phone-alt"></i> Contact</a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Topbar End -->

    @endsection
    @section('detail')
        
    @endsection
    @section('body')

        <!-- Navbar Start -->
        <div class="container-fluid mb-2 mt-3">
            <div class="row border-bottom  px-xl-5">
                <div class="col-lg-3 d-none d-lg-block fade-in">
                    {{-- <button class="btn rounded-0 shadow-none d-flex align-items-center justify-content-between  text-white w-100" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-vertical" aria-expanded="false" aria-controls="collapseWidthExample" style="height: 65px; margin-top: -1px; padding: 0 30px;">
                        {{-- <h6 class="m-0">Categories</h6> --}}
                        {{-- <i class="fa fa-angle-down text-dark"></i>
                    </button> --}}
                    <nav class="collapse show navbar navbar-vertical navbar-light align-items-start border bg-white rounded-4" id="navbar-vertical">
                        <div class="navbar-nav w-100 overflow-hidden ps-2" >
                            {{--   <div class="nav-item dropdown">
                                <a href="#" class="nav-link" data-toggle="dropdown">Dresses <i class="fa fa-angle-down float-right mt-1"></i></a>
                                <div class="dropdown-menu position-absolute bg-secondary border-0 rounded-0 w-100 m-0">
                                    <a href="" class="dropdown-item">Men's Dresses</a>
                                    <a href="" class="dropdown-item">Women's Dresses</a>
                                    <a href="" class="dropdown-item">Baby's Dresses</a>
                                </div>
                            </div> --}}
                            <a href="" class="nav-item  nav-link">CÂBLE ET CONDUCTEUR</a>
                            <a href="" class="nav-item  nav-link">LUMINAIRE</a>
                            <a href="" class="nav-item  nav-link">OUTILLAGE</a>
                            <a href="" class="nav-item  nav-link">AUTOMATISME - GESTION DE L'ENERGIE</a>
                            <a href="" class="nav-item  nav-link">ASCENSEUR-MONTE-CHARGE</a>
                            <a href="" class="nav-item  nav-link">CARRELAGE</a>
                            <a href="" class="nav-item  nav-link">APPAREILS ELECTROMENAGERS</a>
                            <a href="" class="nav-item  nav-link">VIDEO SURVEILLANCE</a>
                            <a href="" class="nav-item  nav-link">MATERIELS INFORMATIQUES</a>
                        </div>
                    </nav>
                </div>
                <div class="col-lg-6">
                    <div id="carouselExampleSlidesOnly" class="carousel slide bg-white" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active" style="height: 410px;">
                                <img src={{ asset('img/w.jfif') }} class="w-100" alt="...">
                                <div class="carousel-caption d-none d-m rounded-5">
                                <h5>First slide label</h5>
                                <p>Some representative placeholder content for the first slide.</p>
                                </div>
                            </div>
                            <div class="carousel-item" style="height: 410px;">
                                <img src={{ asset('img/s.jfif') }} class="w-100" alt="...">
                                <div class="carousel-caption d-none d-m">
                                <h5>Second slide label</h5>
                                <p>Some representative placeholder content for the second slide.</p>
                                </div>
                            </div>
                            <div class="carousel-item" style="height: 410px;">
                                <img src={{ asset('img/q.jfif') }} class="w-100" alt="...">
                                <div class="carousel-caption d-none d-m">
                                <h5>Third slide label</h5>
                                <p>Some representative placeholder content for the third slide.</p>
                                </div>
                            </div>
                        </div>
                      </div>
                </div>
                <div class="col-lg-3 d-none d-lg-block">
                    <div class="container-fluid" style="height: 300px;">
                        <div class="row d-none d-lg-block" >
                            <img class="img-fluid" src={{ asset('img/c.jfif') }} alt="">
                        </div><br>
                        <div class="row">
                            <div class="card border-0 shadow-sm bg-success fs-5 text-white opacity-75">
                                <span>Heures d'ouverture</span>
                                <span>Lun - Ven : 9h - 18h</span>
                                <samp>Sam : 9h - 13h</samp>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar End -->


        <!-- Featured Start -->
        <div class="container-fluid pt-5">
            <div class="row px-xl-5 pb-3">
                <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                    <div class="d-flex align-items-center border mb-4 bg-white" style="padding: 30px;">
                        <h1 class="fa fa-check text-primary m-0 mr-3"></h1>
                        <h5 class="font-weight-semi-bold m-0">Produits de qualité</h5>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                    <div class="d-flex align-items-center border mb-4 bg-white" style="padding: 30px;">
                        <h1 class="fa fa-shipping-fast text-primary m-0 mr-2"></h1>
                        <h5 class="font-weight-semi-bold m-0">Livraison rapide</h5>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                    <div class="d-flex align-items-center border mb-4 bg-white" style="padding: 30px;">
                        <h1 class="fas fa-exchange-alt text-primary m-0 mr-3"></h1>
                        <h5 class="font-weight-semi-bold m-0">Service impécable</h5>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                    <div class="d-flex align-items-center border mb-4 bg-white" style="padding: 30px;">
                        <h1 class="fa fa-phone-volume text-primary m-0 mr-3"></h1>
                        <h5 class="font-weight-semi-bold m-0">Ouvert 6 jours / 7</h5>
                    </div>
                </div>
            </div>
        </div>
        <!-- Featured End -->
        
        <!-- slide Start -->
        <div class="container-fluid pt-5">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="true">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row px-xl-5" >
                            <div class="col-2" >
                                <img src={{ asset('img/q.jfif') }} class="d-block w-100" alt="Image 1" >
                            </div>
                            <div class="col-2" >
                                <img src={{ asset('img/s.jfif') }} class="d-block w-100" alt="Image 2" >
                            </div>
                            <div class="col-2" >
                                <img src={{ asset('img/w.jfif') }} class="d-block w-100" alt="Image 3" >
                            </div>
                            <div class="col-2" >
                                <img src={{ asset('img/s.jfif') }} class="d-block w-100" alt="Image 4" >
                            </div>
                            <div class="col-2" >
                                <img src={{ asset('img/q.jfif') }} class="d-block w-100" alt="Image 5" >
                            </div>
                            <div class="col-2" >
                                <img src={{ asset('img/q.jfif') }} class="d-block w-100" alt="Image 5" >
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                        <div class="col-2" >
                            <img src={{ asset('img/q.jfif') }} class="d-block w-100 carousel-image" alt="Image 7" >
                        </div>
                        <div class="col-2" >
                            <img src={{ asset('img/w.jfif') }} class="d-block w-100 carousel-image" alt="Image 8" >
                        </div>
                        <div class="col-2" >
                            <img src={{ asset('img/s.jfif') }} class="d-block w-100 carousel-image" alt="Image 9" >
                        </div>
                        <div class="col-2" >
                            <img src={{ asset('img/s.jfif') }} class="d-block w-100 carousel-image" alt="Image 4" >
                        </div>
                        <div class="col-2" >
                            <img src={{ asset('img/q.jfif') }} class="d-block w-100 carousel-image" alt="Image 5" >
                        </div>
                        <div class="col-2" >
                            <img src={{ asset('img/q.jfif') }} class="d-block w-100 carousel-image" alt="Image 5" >
                        </div>
                        </div>
                    </div>
                    {{-- <div class="carousel-item">
                        <div class="row">
                        <div class="col-2" >
                            <img src={{ asset('img/q.jfif') }} class="img-responsive" alt="Image 10" >
                        </div>
                        </div>
                    </div> --}}
                </div>
                <button class="carousel-control-prev " type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev" style="left: 0">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden bg-primary">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next" style="right: 0">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
          <!-- slide End -->


        <div class="container-fluid pt-5">
            <div class="text-center mb-4">
                <h2 class="section-title px-5"><span class="px-2">Trandy Products</span></h2>
            </div>
            <div class="row px-xl-5 pb-3">
                <div class="col-lg-2 col-md-6 col-sm-12 pb-1">
                    <div class="card product-item border-0 mb-4 shadow-sm"  style="height: 20rem;">
                        <div class="card-header product-img position-relative overflow-hidden bg-transparent p-0 text-center ">
                            <img class="img-fluid w-75" src={{ asset('img/11.jpg') }} alt="" >
                        </div>
                        <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                            <h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>
                            <div class="d-flex justify-content-center">
                                <h6>$123.00</h6><h6 class="text-muted ml-2"><del>$123.00</del></h6>
                            </div>
                        </div>
                        <div class="card-footer d-flex justify-content-between bg-light border">
                            <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                            <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-12 pb-1">
                    <div class="card product-item border-0 mb-4 shadow-sm"  style="height: 20rem;">
                        <div class="card-header product-img position-relative overflow-hidden bg-transparent p-0">
                            <img class="img-fluid w-75" src={{ asset('img/1.jpg') }} alt="" >
                        </div>
                        <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                            <h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>
                            <div class="d-flex justify-content-center">
                                <h6>$123.00</h6><h6 class="text-muted ml-2"><del>$123.00</del></h6>
                            </div>
                        </div>
                        <div class="card-footer d-flex justify-content-between bg-light border">
                            <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                            <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-12 pb-1">
                    <div class="card product-item border-0 mb-4 shadow-sm"  style="height: 20rem;">
                        <div class="card-header product-img position-relative overflow-hidden bg-transparent p-0">
                            <img class="img-fluid w-75" src={{ asset('img/17.jpg') }} alt=""  >
                        </div>
                        <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                            <h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>
                            <div class="d-flex justify-content-center">
                                <h6>$123.00</h6><h6 class="text-muted ml-2"><del>$123.00</del></h6>
                            </div>
                        </div>
                        <div class="card-footer d-flex justify-content-between bg-light border">
                            <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                            <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-12 pb-1">
                    <div class="card product-item border-0 mb-4 shadow-sm"  style="height: 20rem;">
                        <div class="card-header product-img position-relative overflow-hidden bg-transparent p-0">
                            <img class="img-fluid w-75" src={{ asset('img/2.webp') }} alt="" >
                        </div>
                        <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                            <h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>
                            <div class="d-flex justify-content-center">
                                <h6>$123.00</h6><h6 class="text-muted ml-2"><del>$123.00</del></h6>
                            </div>
                        </div>
                        <div class="card-footer d-flex justify-content-between bg-light border">
                            <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                            <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-12 pb-1">
                    <div class="card product-item border-0 mb-4 shadow-sm"  style="height: 20rem;">
                        <div class="card-header product-img position-relative overflow-hidden bg-transparent p-0">
                            <img class="img-fluid w-75" src={{ asset('img/16.jpg') }} alt="" >
                        </div>
                        <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                            <h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>
                            <div class="d-flex justify-content-center">
                                <h6>$123.00</h6><h6 class="text-muted ml-2"><del>$123.00</del></h6>
                            </div>
                        </div>
                        <div class="card-footer d-flex justify-content-between bg-light border">
                            <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                            <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-12 pb-1">
                    <div class="card product-item border-0 mb-4 shadow-sm"  style="height: 20rem;">
                        <div class="card-header product-img position-relative overflow-hidden bg-transparent p-0">
                            <img class="img-fluid w-75" src={{ asset('img/image1.webp') }} alt="" >
                        </div>
                        <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                            <h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>
                            <div class="d-flex justify-content-center">
                                <h6>$123.00</h6><h6 class="text-muted ml-2"><del>$123.00</del></h6>
                            </div>
                        </div>
                        <div class="card-footer d-flex justify-content-between bg-light border">
                            <a href={{ route('detailProd') }} class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                            <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-12 pb-1">
                    <div class="card product-item border-0 mb-4 shadow-sm"  style="height: 20rem;">
                        <div class="card-header product-img position-relative overflow-hidden bg-transparent p-0">
                            <img class="img-fluid w-75" src={{ asset('img/8.jpg') }} alt="" >
                        </div>
                        <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                            <h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>
                            <div class="d-flex justify-content-center">
                                <h6>$123.00</h6><h6 class="text-muted ml-2"><del>$123.00</del></h6>
                            </div>
                        </div>
                        <div class="card-footer d-flex justify-content-between bg-light border">
                            <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                            <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-12 pb-1">
                    <div class="card product-item border-0 mb-4 shadow-sm"  style="height: 20rem;">
                        <div class="card-header product-img position-relative overflow-hidden bg-transparent p-0">
                            <img class="img-fluid w-75" src={{ asset('img/9.jpg') }} alt="" >
                        </div>
                        <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                            <h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>
                            <div class="d-flex justify-content-center">
                                <h6>$123.00</h6><h6 class="text-muted ml-2"><del>$123.00</del></h6>
                            </div>
                        </div>
                        <div class="card-footer d-flex justify-content-between bg-light border">
                            <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                            <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-12 pb-1">
                    <div class="card product-item border-0 mb-4 shadow-sm"  style="height: 20rem;">
                        <div class="card-header product-img position-relative overflow-hidden bg-transparent p-0">
                            <img class="img-fluid w-75" src={{ asset('img/d.jpg') }} alt="" >
                        </div>
                        <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                            <h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>
                            <div class="d-flex justify-content-center">
                                <h6>$123.00</h6><h6 class="text-muted ml-2"><del>$123.00</del></h6>
                            </div>
                        </div>
                        <div class="card-footer d-flex justify-content-between bg-light border">
                            <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                            <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-12 pb-1">
                    <div class="card product-item border-0 mb-4 shadow-sm"  style="height: 20rem;">
                        <div class="card-header product-img position-relative overflow-hidden bg-transparent p-0">
                            <img class="img-fluid w-75" src={{ asset('img/13.jpg') }} alt="" >
                        </div>
                        <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                            <h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>
                            <div class="d-flex justify-content-center">
                                <h6>$123.00</h6><h6 class="text-muted ml-2"><del>$123.00</del></h6>
                            </div>
                        </div>
                        <div class="card-footer d-flex justify-content-between bg-light border">
                            <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                            <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-12 pb-1">
                    <div class="card product-item border-0 mb-4 shadow-sm"  style="height: 20rem;">
                        <div class="card-header product-img position-relative overflow-hidden bg-transparent p-0">
                            <img class="img-fluid w-75" src={{ asset('img/14.jpg') }} alt="" >
                        </div>
                        <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                            <h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>
                            <div class="d-flex justify-content-center">
                                <h6>$123.00</h6><h6 class="text-muted ml-2"><del>$123.00</del></h6>
                            </div>
                        </div>
                        <div class="card-footer d-flex justify-content-between bg-light border">
                            <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                            <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-12 pb-1">
                    <div class="card product-item border-0 mb-4 shadow-sm"  style="height: 20rem;">
                        <div class="card-header product-img position-relative overflow-hidden bg-transparent p-0">
                            <img class="img-fluid w-75" src={{ asset('img/12.jpg') }} alt="" >
                        </div>
                        <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                            <h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>
                            <div class="d-flex justify-content-center">
                                <h6>$123.00</h6><h6 class="text-muted ml-2"><del>$123.00</del></h6>
                            </div>
                        </div>
                        <div class="card-footer d-flex justify-content-between bg-light border">
                            <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                            <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Footer Start -->
        <div class="container-fluid bg-secondary text-dark mt-5 pt-5">
            <div class="row px-xl-5 pt-5">
                <div class="col-lg-4 col-md-12 mb-5 pr-3 pr-xl-5">
                    <a href="" class="text-decoration-none">
                        <h1 class="mb-4 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border border-white px-3 mr-1">E</span>2NCORPORATE</h1>
                    </a>
                    <p>Dolore erat dolor sit lorem vero amet. Sed sit lorem magna, ipsum no sit erat lorem et magna ipsum dolore amet erat.</p>
                    <p class="mb-2"><i class="fa fa-map-marker-alt text-primary mr-3"></i>Bonaberie, Face ancien cinéma Fohato</p>
                    <p class="mb-2"><i class="fa fa-envelope text-primary mr-3"></i>info@2ncorporate.com</p>
                    <p class="mb-0"><i class="fa fa-phone-alt text-primary mr-3"></i>+237 694 01 57 88</p>
                </div>
                <div class="col-lg-8 col-md-12">
                    <div class="row">
                        <div class="col-md-4 mb-5">
                            <h5 class="font-weight-bold text-dark mb-4">Quick Links</h5>
                            <div class="d-flex flex-column justify-content-start">
                                <a class="text-dark mb-2" href="index.html"><i class="fa fa-angle-right mr-2"></i>Home</a>
                                <a class="text-dark mb-2" href="shop.html"><i class="fa fa-angle-right mr-2"></i>Our Shop</a>
                                <a class="text-dark mb-2" href="detail.html"><i class="fa fa-angle-right mr-2"></i>Shop Detail</a>
                                <a class="text-dark mb-2" href="cart.html"><i class="fa fa-angle-right mr-2"></i>Shopping Cart</a>
                                <a class="text-dark mb-2" href="checkout.html"><i class="fa fa-angle-right mr-2"></i>Checkout</a>
                                <a class="text-dark" href="contact.html"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
                            </div>
                        </div>
                        <div class="col-md-4 mb-5">
                            <h5 class="font-weight-bold text-dark mb-4">Quick Links</h5>
                            <div class="d-flex flex-column justify-content-start">
                                <a class="text-dark mb-2" href="index.html"><i class="fa fa-angle-right mr-2"></i>Home</a>
                                <a class="text-dark mb-2" href="shop.html"><i class="fa fa-angle-right mr-2"></i>Our Shop</a>
                                <a class="text-dark mb-2" href="detail.html"><i class="fa fa-angle-right mr-2"></i>Shop Detail</a>
                                <a class="text-dark mb-2" href="cart.html"><i class="fa fa-angle-right mr-2"></i>Shopping Cart</a>
                                <a class="text-dark mb-2" href="checkout.html"><i class="fa fa-angle-right mr-2"></i>Checkout</a>
                                <a class="text-dark" href="contact.html"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
                            </div>
                        </div>
                        <div class="col-md-4 mb-5">
                            <h5 class="font-weight-bold text-dark mb-4">Newsletter</h5>
                            <form action="">
                                <div class="form-group">
                                    <input type="text" class="form-control border-0 py-4" placeholder="Your Name" required="required" />
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control border-0 py-4" placeholder="Your Email"
                                        required="required" />
                                </div>
                                <div>
                                    <button class="btn btn-primary btn-block border-0 py-3" type="submit">Subscribe Now</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row border-top border-light mx-xl-5 py-4">
                <div class="col-md-6 px-xl-0">
                    <p class="mb-md-0 text-center text-md-left text-dark">
                        &copy; <a class="text-dark font-weight-semi-bold" href="#">Your Site Name</a>. All Rights Reserved. Designed
                        by
                        <a class="text-dark font-weight-semi-bold" href="https://htmlcodex.com">HTML Codex</a><br>
                        Distributed By <a href="https://themewagon.com" target="_blank">ThemeWagon</a>
                    </p>
                </div>
                <div class="col-md-6 px-xl-0 text-center text-md-right">
                    <img class="img-fluid" src="img/8.jpg" alt="">
                </div>
            </div>
        </div>
        <!-- Footer End -->
    @endsection

    @section('connexion')
        <a class="btn btn-" href="/">Accueil</a>
        <div class="container border rounded-4 my-5 h-50 bg-white w-50">
            <div class="row">
                <div class="col-lg-6 col-md-6 bg-white text-center ">
                    <img class="img-thumbnail w-75 mt-4 mp-3" src={{ asset('img/logo2n.png') }} alt="logo">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 my-5">
                    
                    <form class="" action="" method="POST">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label"> Address Email</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Submit</button><br>
                        <small class="mb-5">vous n'avez pas encore de compte? <a class="text-decoration-none text-primary" href={{ route('inscription')}}>Inscrivez-vous</a></small>
                        
                    </form>
                </div>
            </div>
            <br>
        </div>
    @endsection

    @section('inscription')
        <a class="btn btn-success" href="/">Accueil</a>
        <div class="container border rounded-4 my-5 bg-white pt-3 pb-3">
            <h3 class="text-center text-success">Inscription</h3>
            <hr> <br>
            <form class="row g-3">
                <div class="col-md-6">
                    <label for="inputEmail4" class="form-label">Email</label>
                    <input type="email" class="form-control" id="inputEmail4">
                </div>
                <div class="col-md-6">
                    <label for="inputPassword4" class="form-label">Password</label>
                    <input type="password" class="form-control" id="inputPassword4">
                </div>
                <div class="col-12">
                    <label for="inputAddress" class="form-label">Address</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                </div>
                <div class="col-12">
                    <label for="inputAddress2" class="form-label">Address 2</label>
                    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                </div>
                <div class="col-md-6">
                    <label for="inputCity" class="form-label">City</label>
                    <input type="text" class="form-control" id="inputCity">
                </div>
                <div class="col-md-4">
                    <label for="inputState" class="form-label">State</label>
                    <select id="inputState" class="form-select">
                        <option selected>Choose...</option>
                        <option>...</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <label for="inputZip" class="form-label">Zip</label>
                    <input type="text" class="form-control" id="inputZip">
                </div>
                <div class="col-12">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck">
                        <label class="form-check-label" for="gridCheck">
                        Check me out
                        </label>
                    </div>
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Sign in</button>
                </div>
        </form>
        </div>
    @endsection