<!DOCTYPE html>

<html lang="pt-pt">

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
        <div id="spinner"
            class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar Start -->
        <div class="container-fluid nav-bar bg-transparent">
            <nav class="navbar navbar-expand-lg bg-white navbar-light py-0 px-4">
                <a href="index.html" class="navbar-brand d-flex align-items-center text-center">
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
                        <a href="index.html" class="nav-item nav-link active">Inicio</a>
                        <a href="about.html" class="nav-item nav-link">Sobre</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Propriedade</a>
                            <div class="dropdown-menu rounded-0 m-0">
                                <a href="property-list.html" class="dropdown-item">Apartamento</a>
                                <a href="property-type.html" class="dropdown-item">Vivenda</a>
                                <a href="property-agent.html" class="dropdown-item">Terrenos</a>
                            </div>
                        </div>
                        <a href="contact.html" class="nav-item nav-link">Contact</a>

                    </div>
                    <a href="LoginProprietario.php" class="btn btn-primary px-3 d-none d-lg-flex">Add Propriedade</a>
                    <a href="login.html" class="btn btn-primary px-3 d-none d-lg-flex m-2">Login</a>
                </div>
            </nav>
        </div>
        <!-- Navbar End -->


        <!-- Header Start -->
        <div class="container-fluid header bg-white p-0">
            <div class="row g-0 align-items-center flex-column-reverse flex-md-row">
                <div class="col-md-6 p-5 mt-lg-5">
                    <h1 class="display-5 animated fadeIn mb-4">Encontre um<span class="text-primary"> Lar
                            Perfeito</span> Para viver com a sua familia</h1>
                    <p class="animated fadeIn mb-4 pb-2">Garantimos que o seu lar seja de forma encontadora,
                        Não perca esta oportunidade e veja os preços mais atraentes do mercado
                    </p>
                    <a href="ShowImoveis.html" class="btn btn-primary py-3 px-5 me-3 animated fadeIn">Começar Agora</a>
                </div>
                <div class="col-md-6 animated fadeIn">
                    <div class="owl-carousel header-carousel">
                        <div class="owl-carousel-item">
                            <img class="img-fluid" src="assets/img/carousel-1.jpg" alt="">
                        </div>
                        <div class="owl-carousel-item">
                            <img class="img-fluid" src="assets/img/carousel-2.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->

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
                                    <option selected> Propriedade</option>
                                    <option value="1">Apartamento</option>
                                    <option value="2">Vivenda</option>
                                    <option value="3">Terreno</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <select class="form-select border-0 py-3">
                                    <option selected>Localização</option>
                                    <option value="1">Morro Bento</option>
                                    <option value="2">Cassenda</option>
                                    <option value="3">Nova vida</option>
                                    <option value="4">Martires do Kifangondo</option>
                                    <option value="5">Prenda</option>
                                    <option value="6">Mutamba</option>
                                    <option value="7">Maianga</option>
                                    <option value="8">Alvalade</option>
                                    <option value="9">Maculusso</option>
                                    <option value="10">Miramar</option>
                                    <option value="11">Ilha</option>
                                    <option value="12">Sambizanga</option>
                                    <option value="13">Cazenga</option>
                                    <option value="14">Vila Alice</option>
                                    <option value="15">Bairro Azul</option>
                                    <option value="16">Benfica</option>
                                    <option value="17">Kilamba</option>
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


        <!-- Category Start -->
        <div class="container-xxl py-5 ">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="mb-3">Tipo de Propriedades</h1>
                    <p>Oferecemos uma gama de propriedades para a si a sua familia, desde vivendas, Terrenos e Apartamentos, faça a sua escolha 😊</p>
                </div>
                <div class="row g-4">
                    <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                        <a class="cat-item d-block bg-light text-center rounded p-3" href="">
                            <div class="rounded p-4">
                                <div class="icon mb-3">
                                    <img class="img-fluid" src="assets/img/icon-apartment.png" alt="Icon">
                                </div>
                                <h6>Apartmentos</h6>
                                <span>123 Properties</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                        <a class="cat-item d-block bg-light text-center rounded p-3" href="">
                            <div class="rounded p-4">
                                <div class="icon mb-3">
                                    <img class="img-fluid" src="assets/img/icon-villa.png" alt="Icon">
                                </div>
                                <h6>Vivendas</h6>
                                <span>123 Properties</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                        <a class="cat-item d-block bg-light text-center rounded p-3" href="">
                            <div class="rounded p-4">
                                <div class="icon mb-3">
                                    <img class="img-fluid" src="assets/img/icon-luxury.png" alt="Icon">
                                </div>
                                <h6>Terrenos</h6>
                                <span>123 Properties</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Category End -->


        <!-- About Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                        <div class="about-img position-relative overflow-hidden p-5 pe-0">
                            <img class="img-fluid w-100" src="img/vivenda.jpeg">
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                        <h1 class="mb-4"> O melhor Lugar para encontrar o seu aconchego.</h1>
                        <p class="mb-4">Transmitimos o meu confiança e segurança aos nossos clientes, </p>
                        <p><i class="fa fa-check text-primary me-3"></i>Atendimento personalizado</p>
                        <p><i class="fa fa-check text-primary me-3"></i>Agendamento de uma visita a residencia solicitada</p>
                        <p><i class="fa fa-check text-primary me-3"></i>Documentação das residencias em conformidade</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


        <!-- Property List Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-0 gx-5 align-items-end">
                    <div class="col-lg-6">
                        <div class="text-start mx-auto mb-5 wow slideInLeft" data-wow-delay="0.1s">
                            <h1 class="mb-3">Propriedades</h1>
                        </div>
                    </div>
                </div>
                <div class="tab-content">
                    <div id="tab-1" class="tab-pane fade show p-0 active">
                        <div class="row g-4">
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="property-item rounded overflow-hidden">
                                    <div class="position-relative overflow-hidden">
                                        <a href=""><img class="img-fluid" src="assets/img/Vivendav4.png" alt=""></a>
                                        <div
                                            class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                                            Por Arrendar</div>
                                        <div
                                            class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
                                            Vivenda</div>
                                    </div>
                                    <div class="p-4 pb-0">
                                        <h5 class="text-primary mb-3">250.000kz</h5>
                                        <a class="d-block h5 mb-2" href="">Vivenda v4 Futungo de Belas</a>
                                        <p><i class="fa fa-map-marker-alt text-primary me-2"></i>Futungo De Belas</p>
                                    </div>
                                    <div class="d-flex border-top">
                                        <small class="flex-fill text-center border-end py-2"><i
                                                class="fa fa-bed text-primary me-2"></i>4 Quartos Suites</small>
                                        <small class="flex-fill text-center py-2"><i
                                                class="fa fa-bath text-primary me-2"></i>2 Quartos de banho</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                                <div class="property-item rounded overflow-hidden">
                                    <div class="position-relative overflow-hidden">
                                        <a href=""><img class="img-fluid" src="assets/img/VivendaOcean.png" alt=""></a>
                                        <div
                                            class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                                            Por Arrendar</div>
                                        <div
                                            class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
                                            Vivenda</div>
                                    </div>
                                    <div class="p-4 pb-0">
                                        <h5 class="text-primary mb-3">500.000kz</h5>
                                        <a class="d-block h5 mb-2" href="">Vivenda V3+1 Ocean Ville</a>
                                        <p><i class="fa fa-map-marker-alt text-primary me-2"></i>Ocean Ville, Talatona, Luanda</p>
                                    </div>
                                    <div class="d-flex border-top">
                                        <small class="flex-fill text-center border-end py-2"><i
                                                class="fa fa-bed text-primary me-2"></i>3 Quartos suites</small>
                                        <small class="flex-fill text-center py-2"><i
                                                class="fa fa-bath text-primary me-2"></i>2 Quartos de banhos</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                                <div class="property-item rounded overflow-hidden">
                                    <div class="position-relative overflow-hidden">
                                        <a href=""><img class="img-fluid" src="assets/img/Apartamento.png" alt=""></a>
                                        <div
                                            class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                                            Venda</div>
                                        <div
                                            class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
                                            Office</div>
                                    </div>
                                    <div class="p-4 pb-0">
                                        <h5 class="text-primary mb-3">600 000 USD</h5>
                                        <a class="d-block h5 mb-2" href="">APARTAMENTO T3</a>
                                        <p><i class="fa fa-map-marker-alt text-primary me-2"></i>CONDOMÍNIO CORIMBA RESIDENCE - LUANDA</p>
                                    </div>
                                    <div class="d-flex border-top">
                                        <small class="flex-fill text-center border-end py-2"><i
                                                class="fa fa-bed text-primary me-2"></i>3 Quartos(1 Suite)</small>
                                        <small class="flex-fill text-center py-2"><i
                                                class="fa fa-bath text-primary me-2"></i>2 Quartos de Banho</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="property-item rounded overflow-hidden">
                                    <div class="position-relative overflow-hidden">
                                        <a href=""><img class="img-fluid" src="assets/img/Terreno.png" alt=""></a>
                                        <div
                                            class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                                          Venda</div>
                                        <div
                                            class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
                                            Building</div>
                                    </div>
                                    <div class="p-4 pb-0">
                                        <h5 class="text-primary mb-3">
                                            50 000 000 AKZ</h5>
                                        <a class="d-block h5 mb-2" href="">Terreno No Benfica</a>
                                        <p><i class="fa fa-map-marker-alt text-primary me-2"></i>Av Fidel de Castro, Benfica
                                            </p>
                                    </div>
                                    <div class="d-flex border-top">
                                        <small class="flex-fill text-center border-end py-2"><i
                                                class="fa fa-bed text-primary me-2"></i>3 Bed</small>
                                        <small class="flex-fill text-center py-2"><i
                                                class="fa fa-bath text-primary me-2"></i>2 Bath</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                                <div class="property-item rounded overflow-hidden">
                                    <div class="position-relative overflow-hidden">
                                        <a href=""><img class="img-fluid" src="assets/img/ApartamentoT3.png" alt=""></a>
                                        <div
                                            class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                                            Por Arrendar</div>
                                        <div
                                            class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
                                            Home</div>
                                    </div>
                                    <div class="p-4 pb-0">
                                        <h5 class="text-primary mb-3">700 000 kz</h5>
                                        <a class="d-block h5 mb-2" href="">APARTAMENTO T3 EM CONDOMÍNIO BOULEVARD</a>
                                        <p><i class="fa fa-map-marker-alt text-primary me-2"></i>Av. Fidel de Castro, Benfica</p>
                                    </div>
                                    <div class="d-flex border-top">
                                        <small class="flex-fill text-center border-end py-2"><i
                                                class="fa fa-bed text-primary me-2"></i>3 Quartos</small>
                                        <small class="flex-fill text-center py-2"><i
                                                class="fa fa-bath text-primary me-2"></i>2 Quartos Banhos</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                                <div class="property-item rounded overflow-hidden">
                                    <div class="position-relative overflow-hidden">
                                        <a href=""><img class="img-fluid" src="assets/img/Terreno2.png" alt=""></a>
                                        <div
                                            class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                                            Venda</div>
                                        <div
                                            class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
                                            Shop</div>
                                    </div>
                                    <div class="p-4 pb-0">
                                        <h5 class="text-primary mb-3">60.000.000kz</h5>
                                        <a class="d-block h5 mb-2" href="">Terreno 2 lotes</a>
                                        <p><i class="fa fa-map-marker-alt text-primary me-2"></i>LAR DO PATRIOTA</p>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.1s">
                                <a class="btn btn-primary py-3 px-5" href="">Procurar por mais propriedades.</a>
                            </div>
                        </div>
                    </div>
                
                </div>
            </div>
        </div>
        <!-- Property List End -->


        <!-- Call to Action Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="bg-light rounded p-3">
                    <div class="bg-white rounded p-4" style="border: 1px dashed rgba(0, 185, 142, .3)">
                        <div class="row g-5 align-items-center">
                            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                                <img class="img-fluid rounded w-100" src="img/call-to-action.jpg" alt="">
                            </div>
                            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                                <div class="mb-4">
                                    <h1 class="mb-3">Contacte um agente certificado</h1>
                                    <p>Os nossos agentes estarão disponiveis para atender as suas preocupações relacionaciondas a questões mobiliarias, 
                                        não exite peça um agendamento</p>
                                </div>
                                <a href="" class="btn btn-primary py-3 px-4 me-2"><i
                                        class="fa fa-phone-alt me-2"></i>Fazer uma chamada</a>
                                <a href="" class="btn btn-dark py-3 px-4"><i class="fa fa-calendar-alt me-2"></i>Fazer um agendamento</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Call to Action End -->


        <!-- Team Start -->
        <!-- Team End -->


        <!-- Testimonial Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="mb-3">O que os nossos clientes dizem!</h1>
                    <p>Os testemunhos e depoimentos dos nossos clientes em relação aos nossos serviços</p>
                </div>
                <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                    <div class="testimonial-item bg-light rounded p-3">
                        <div class="bg-white border rounded p-4">
                            <p>É incrivel poder contar com a RealEstate para resolver questões mobiliarias, sinto-me realizado com essa conquista. 
                                Espero que consiga encontrar aquilo que procura</p>
                            <div class="d-flex align-items-center">
                                <img class="img-fluid flex-shrink-0 rounded" src="img/testimonial-1.jpg"
                                    style="width: 45px; height: 45px;">
                                <div class="ps-3">
                                    <h6 class="fw-bold mb-1">Etiandra Gouveia</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-light rounded p-3">
                        <div class="bg-white border rounded p-4">
                            <p>Sempre procurei em acomodar-me em um espaço que podesse estar em familia e a RealEstate realizou esse grande sonho,
                                Muito obrigado!!
                            </p>
                            <div class="d-flex align-items-center">
                                <img class="img-fluid flex-shrink-0 rounded" src="img/testimonial-2.jpg"
                                    style="width: 45px; height: 45px;">
                                <div class="ps-3">
                                    <h6 class="fw-bold mb-1">Ericlenio Nunes </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-light rounded p-3">
                        <div class="bg-white border rounded p-4">
                            <p>É uma honra poder estar aqui e dizer que consegui uma moradia de ferias para passar com a minha familia, foi incrivel o tempo 
                                que passei, graças a RealEstate proporcionou-me este lindo momento.</p>
                            <div class="d-flex align-items-center">
                                <img class="img-fluid flex-shrink-0 rounded" src="img/testimonial-3.jpg"
                                    style="width: 45px; height: 45px;">
                                <div class="ps-3">
                                    <h6 class="fw-bold mb-1">Ana de Jesus</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->


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
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/lib/wow/wow.min.js"></script>
    <script src="assets/lib/easing/easing.min.js"></script>
    <script src="assets/lib/waypoints/waypoints.min.js"></script>
    <script src="assets/lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="assets/js/main.js"></script>
</body>

</html>