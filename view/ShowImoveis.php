<?php
require '../conexao/conexao.php';
require '../model/Imoveis.php';
$imoveis = new Imoveis($con);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>RealEstate Angola</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="assets/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="assets/lib/animate/animate.min.css" rel="stylesheet">
    <link href="assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->

        <!-- Spinner End -->


        <!-- Navbar Start -->
        <div class="container-fluid nav-bar bg-transparent">
            <nav class="navbar navbar-expand-lg bg-white navbar-light py-0 px-4">
                <a href="index.php" class="navbar-brand d-flex align-items-center text-center">
                    <div class="icon p-2 me-2">
                        <img class="img-fluid" src="assets/img/icon-deal.png" alt="Icon" style="width: 30px; height: 30px;">
                    </div>
                    <h1 class="m-0 text-primary">RealEstate</h1>
                </a>
                <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto">
                        <a href="index.html" class="nav-item nav-link active">Home</a>
                        <a href="about.html" class="nav-item nav-link">About</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Property</a>
                            <div class="dropdown-menu rounded-0 m-0">
                                <a href="property-list.html" class="dropdown-item">Property List</a>
                                <a href="property-type.html" class="dropdown-item">Property Type</a>
                                <a href="property-agent.html" class="dropdown-item">Property Agent</a>
                            </div>
                        </div>
                        <a href="contact.html" class="nav-item nav-link">Contact</a>

                    </div>
                    <a href="" class="btn btn-primary px-3 d-none d-lg-flex">Add Property</a>
                    <a href="login.html" class="btn btn-primary px-3 d-none d-lg-flex m-2">Login</a>
                </div>
            </nav>
        </div>
        <!-- Navbar End -->


        <!-- Header Start -->

        <!-- Header End -->
        <div class="container-fluid mt-5 mb-5">
            <div class="row g-4">
                <div class="col-md-3">
                    <div class="t-products p-2">
                        <h6 class="text-uppercase">Imoveis</h6>
                        <div class="p-lists">
                            <div class="d-flex justify-content-between mt-2"> <span>Apartamento</span> <span>23</span>
                            </div>
                            <div class="d-flex justify-content-between mt-2"> <span>Vivenda</span> <span>46</span>
                            </div>
                            <div class="d-flex justify-content-between mt-2"> <span>Terreno</span> <span>13</span>
                            </div>
                        </div>
                    </div>
                    <div class="processor p-2">
                        <div class="heading d-flex justify-content-between align-items-center">
                            <h6 class="text-uppercase">Categoria</h6> <span>--</span>
                        </div>
                        <div class="d-flex justify-content-between mt-2">
                            <div class="form-check"> <input class="form-check-input" type="checkbox" value=""
                                    id="flexCheckDefault"> <label class="form-check-label" for="flexCheckDefault"> Renda
                                </label> </div> <span>3</span>
                        </div>
                        <div class="d-flex justify-content-between mt-2">
                            <div class="form-check"> <input class="form-check-input" type="checkbox" value=""
                                    id="flexCheckChecked" checked> <label class="form-check-label"
                                    for="flexCheckChecked"> Por Comprar </label> </div> <span>4</span>
                        </div>
                        <div class="d-flex justify-content-between mt-2">
                            <div class="form-check"> <input class="form-check-input" type="checkbox" value=""
                                    id="flexCheckChecked" checked> <label class="form-check-label"
                                    for="flexCheckChecked"> Casa De Ferias </label> </div> <span>4</span>
                        </div>
                    </div>
                    <div class="brand p-2">
                        <div class="heading d-flex justify-content-between align-items-center">
                            <h6 class="text-uppercase">Localização</h6> <span>--</span>
                        </div>
                        <div class="d-flex justify-content-between mt-2">
                            <div class="form-check"> <input class="form-check-input" type="checkbox" value=""
                                    id="flexCheckDefault"> <label class="form-check-label" for="flexCheckDefault"> Rocha
                                    Pinto
                                </label> </div> <span>13</span>
                        </div>
                        <div class="d-flex justify-content-between mt-2">
                            <div class="form-check"> <input class="form-check-input" type="checkbox" value=""
                                    id="flexCheckChecked" checked> <label class="form-check-label"
                                    for="flexCheckChecked"> Talatona </label> </div> <span>4</span>
                        </div>
                        <div class="d-flex justify-content-between mt-2">
                            <div class="form-check"> <input class="form-check-input" type="checkbox" value=""
                                    id="flexCheckChecked" checked> <label class="form-check-label"
                                    for="flexCheckChecked"> Mutamba </label> </div> <span>24</span>
                        </div>
                        <div class="d-flex justify-content-between mt-2">
                            <div class="form-check"> <input class="form-check-input" type="checkbox" value=""
                                    id="flexCheckChecked" checked> <label class="form-check-label"
                                    for="flexCheckChecked"> Maianga </label> </div> <span>18</span>
                        </div>
                        <div class="d-flex justify-content-between mt-2">
                            <div class="form-check"> <input class="form-check-input" type="checkbox" value=""
                                    id="flexCheckChecked" checked> <label class="form-check-label"
                                    for="flexCheckChecked"> Morro Bento </label> </div> <span>44</span>
                        </div>
                    </div>
                    <div class="type p-2 mb-2">
                        <div class="heading d-flex justify-content-between align-items-center">
                            <h6 class="text-uppercase">Tipologia</h6> <span>--</span>
                        </div>
                        <div class="d-flex justify-content-between mt-2">
                            <div class="form-check"> <input class="form-check-input" type="checkbox" value=""
                                    id="flexCheckDefault"> <label class="form-check-label" for="flexCheckDefault">
                                    T1 </label> </div> <span>23</span>
                        </div>
                        <div class="d-flex justify-content-between mt-2">
                            <div class="form-check"> <input class="form-check-input" type="checkbox" value=""
                                    id="flexCheckChecked" checked> <label class="form-check-label"
                                    for="flexCheckChecked"> T2 </label> </div> <span>24</span>
                        </div>
                        <div class="d-flex justify-content-between mt-2">
                            <div class="form-check"> <input class="form-check-input" type="checkbox" value=""
                                    id="flexCheckChecked" checked> <label class="form-check-label"
                                    for="flexCheckChecked"> T3 </label> </div> <span>14</span>
                        </div>
                        <div class="d-flex justify-content-between mt-2">
                            <div class="form-check"> <input class="form-check-input" type="checkbox" value=""
                                    id="flexCheckChecked" checked> <label class="form-check-label"
                                    for="flexCheckChecked"> V1 </label> </div> <span>28</span>
                        </div>
                        <div class="d-flex justify-content-between mt-2">
                            <div class="form-check"> <input class="form-check-input" type="checkbox" value=""
                                    id="flexCheckChecked" checked> <label class="form-check-label"
                                    for="flexCheckChecked"> V2 </label> </div> <span>44</span>
                        </div>
                        <div class="d-flex justify-content-between mt-2">
                            <div class="form-check"> <input class="form-check-input" type="checkbox" value=""
                                    id="flexCheckChecked" checked> <label class="form-check-label"
                                    for="flexCheckChecked"> V3 </label> </div> <span>44</span>
                        </div>
                    </div>
                </div>
                <?php foreach($imoveis->getPropriety() as $k){?>
                <div class="col-lg-3 col-md-6 fadeInUp" data-wow-delay="0.1s">
                
                    <div class="property-item rounded overflow-hidden m-2">
                       <div class="property-item rounded overflow-hidden m-2">
                                <div class="position-relative overflow-hidden ">
                                    <a href=""><img class="img-fluid" src="img/property-1.jpg" alt=""></a>
                                    <div
                                        class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                                        For Sell
                                    </div>
                                    <div
                                        class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
                                        Apartamento
                                    </div>
                                </div>
                                <div class="p-4 pb-0">
                                    <h5 class="text-primary mb-3"><?php echo $k['Preco']?></h5>
                                    <a class="d-block h5 mb-2" href="ShowEachImoveis.html">Casa Luxuosa Comoda</a>
                                    <p><i class="fa fa-map-marker-alt text-primary me-2"></i>Av.21 De janeiro Gamek</p>
                                </div>
                                <div class="d-flex border-top">
                                    <small class="flex-fill text-center border-end py-2"><i
                                            class="fa fa-ruler-combined text-primary me-2"></i>1000 Sqft</small>
                                    <small class="flex-fill text-center border-end py-2"><i
                                            class="fa fa-bed text-primary me-2"></i>3 Bed</small>
                                    <small class="flex-fill text-center py-2"><i
                                            class="fa fa-bath text-primary me-2"></i>2
                                        Bath</small>
                                </div>
                            </div>
                    </div>
                    
                </div>
                <?php }?>
            </div>
        </div>

        <!-- Search Start -->
        <div class="container-fluid bg-primary mb-5 wow fadeIn" data-wow-delay="0.1s" style="padding: 35px;">
            <div class="container">
                <div class="row g-2">
                    <div class="col-md-10">
                        <div class="row g-2">
                            <div class="col-md-4">
                                <input type="text" class="form-control border-0 py-3" placeholder="Search Keyword">
                            </div>
                            <div class="col-md-4">
                                <select class="form-select border-0 py-3">
                                    <option selected>Property Type</option>
                                    <option value="1">Property Type 1</option>
                                    <option value="2">Property Type 2</option>
                                    <option value="3">Property Type 3</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <select class="form-select border-0 py-3">
                                    <option selected>Location</option>
                                    <option value="1">Location 1</option>
                                    <option value="2">Location 2</option>
                                    <option value="3">Location 3</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <button class="btn btn-dark border-0 w-100 py-3">Search</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Search End -->


     


        <!-- Footer Start -->
        <div class="container-fluid bg-dark text-white-50 footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-3 col-md-6">
                        <h5 class="text-white mb-4">Get In Touch</h5>
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Av 21 de janeiro, Morro Bento</p>
                        <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>943336417</p>
                        <p class="mb-2"><i class="fa fa-envelope me-3"></i>inforealestate@RealEstate.com</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h5 class="text-white mb-4">Quick Links</h5>
                        <a class="btn btn-link text-white-50" href="">Sobre nós</a>
                        <a class="btn btn-link text-white-50" href="">Contacto</a>
                        <a class="btn btn-link text-white-50" href="">Nossos Serviços</a>
                        <a class="btn btn-link text-white-50" href="">Privacy Policy</a>
                        <a class="btn btn-link text-white-50" href="">Terms & Condition</a>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h5 class="text-white mb-4">Galeria de fotos</h5>
                        <div class="row g-2 pt-2">
                            <div class="col-4">
                                <img class="img-fluid rounded bg-light p-1" src="img/vivenda.jpeg" alt="">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid rounded bg-light p-1" src="img/vivenda2.jpg" alt="">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid rounded bg-light p-1" src="img/VivendaOcean.png" alt="">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid rounded bg-light p-1" src="img/Vivendav4.png" alt="">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid rounded bg-light p-1" src="img/Apartamento.png" alt="">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid rounded bg-light p-1" src="img/property-6.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="assets/Sneat/vendor/libs/jquery/jquery.js"></script>
    <script src="loginproprietario.js"></script>
    <script src="assets/Sneat/vendor/libs/popper/popper.js"></script>
    <script src="assets/Sneat/vendor/js/bootstrap.js"></script>
    <script src="assets/Sneat/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="assets/Sneat/vendor/js/menu.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>