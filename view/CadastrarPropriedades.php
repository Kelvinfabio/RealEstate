<?php
session_start();

$r = $_SESSION['user'] ;
$item = $_SESSION['item'];

?>
<!DOCTYPE html>

<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="../assets/"
    data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Owner RealEstate </title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/Sneat/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet" />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="assets/Sneat/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="assets/Sneat/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="assets/Sneat/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="assets/Sneat/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="assets/Sneat/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="assets/Sneat/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="assets/Sneat/js/config.js"></script>
</head>

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->

            <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
                <div class="app-brand demo">
                    <a href="Propriedade.php" class="navbar-brand d-flex align-items-center text-center">
                        <div class="icon p-2 me-2">
                            <img class="img-fluid" src="assets/img/icon-deal.png" alt="Icon"
                                style="width: 20px; height: 20px;">
                        </div>
                        <h4 class="m-0 text-primary">RealEstate</h4>
                    </a>
                    <a href="javascript:void(0);"
                        class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
                        <i class="bx bx-chevron-left bx-sm align-middle"></i>
                    </a>
                </div>

                <div class="menu-inner-shadow"></div>

                <ul class="menu-inner py-1">
                    <!-- Dashboard -->
                    <li class="menu-item">
                        <a href="Propriedade.php" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-home-circle"></i>
                            <div data-i18n="Analytics">Pagina Inicial</div>
                        </a>
                    </li>

                    <!-- Layouts -->
                    <!-- Components -->
                   
                    <!-- Misc -->
                </ul>
            </aside>
            <!-- / Menu -->

            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->

                <nav class="layout-navbar container-fluid navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
                    id="layout-navbar">
                    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
                        <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                            <i class="bx bx-menu bx-sm"></i>
                        </a>
                    </div>

                    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
                        <!-- Search -->
                        <div class="navbar-nav align-items-center">
                            <div class="nav-item d-flex align-items-center">
                                <i class="bx bx-search fs-4 lh-0"></i>
                                <input type="text" class="form-control border-0 shadow-none" placeholder="Search..."
                                    aria-label="Search..." />
                            </div>
                        </div>
                        <!-- /Search -->

                        <ul class="navbar-nav flex-row align-items-center ms-auto">
                            <!-- Place this tag where you want the button to render. -->
                            <li class="nav-item lh-1 me-3">
                                <a class="github-button"
                                    href="https://github.com/themeselection/sneat-html-admin-template-free"
                                    data-icon="octicon-star" data-size="large" data-show-count="true"
                                    aria-label="Star themeselection/sneat-html-admin-template-free on GitHub">Star</a>
                            </li>

                            <!-- User -->
                            <li class="nav-item navbar-dropdown dropdown-user dropdown">
                                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);"
                                    data-bs-toggle="dropdown">
                                    <div class="avatar avatar-online">
                                        <img src="../assets/img/avatars/1.png" alt
                                            class="w-px-40 h-auto rounded-circle" />
                                    </div>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar avatar-online">
                                                        <img src="../assets/img/avatars/1.png" alt
                                                            class="w-px-40 h-auto rounded-circle" />
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <span class="fw-semibold d-block">John Doe</span>
                                                    <small class="text-muted">Admin</small>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="dropdown-divider"></div>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <i class="bx bx-user me-2"></i>
                                            <span class="align-middle">My Profile</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <i class="bx bx-cog me-2"></i>
                                            <span class="align-middle">Settings</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <span class="d-flex align-items-center align-middle">
                                                <i class="flex-shrink-0 bx bx-credit-card me-2"></i>
                                                <span class="flex-grow-1 align-middle">Billing</span>
                                                <span
                                                    class="flex-shrink-0 badge badge-center rounded-pill bg-danger w-px-20 h-px-20">4</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="dropdown-divider"></div>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="logout.php">
                                            <i class="bx bx-power-off me-2"></i>
                                            <span class="align-middle">Log Out</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <!--/ User -->
                        </ul>
                    </div>
                </nav>

                <!-- / Navbar -->

                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Content -->

                    <div class="container-xxl flex-grow-1 container-p-y" id="user">
                        <div class="col-xl">
                            <div class="card mb-4">
                                <div class="card-header d-flex justify-content-between align-items-center">
                                    <h5 class="mb-0">Cadastrar Propriedade</h5>
                                </div>
                                <div class="card-body">
                                    <form>
                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-fullname">Titulo</label>
                                            <input type="text" class="form-control" id="Titulo"
                                                placeholder="John Doe" />
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-fullname">Ano de Construção</label>
                                            <input type="text" class="form-control" id="AnoConstru"
                                                placeholder="John Doe" />
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-company">Preco</label>
                                            <input type="text" class="form-control" id="Preco"
                                                placeholder="56.000kz" />
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-email">Area Do Imovel</label>
                                            <div class="input-group input-group-merge">
                                                <input type="text" id="AreaImovel" class="form-control"
                                                    placeholder="500x50" aria-label="john.doe"
                                                    aria-describedby="basic-default-email2" />
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-phone">Localizacao</label>
                                            <input type="text" id="Localizacao" class="form-control phone-mask"
                                                placeholder="Benfica, Nova Vida..." />
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-message">Topologia</label>
                                            <input type="text" id="Topologia" class="form-control phone-mask"
                                                placeholder="T4, V4, ou Terreno" />
                                        </div>
                                        <select id="main-option" class="mb-4 form-select">
                                            <option value="">Selecciona uma opção</option>
                                            <option value="option1">Vivenda</option>
                                            <option value="option2">Apartamento</option>
                                            <option value="option3">Terreno</option>
                                        </select>

                                        <div id="additional-fields" style="display: none;">
                                            <!-- additional fields will appear here -->
                                            <div class="mb-3">
                                                <label class="form-label" for="basic-default-message">Numero de quartos</label>
                                                <input type="text" id="Num_quarto" class="form-control phone-mask"
                                                    placeholder="1, 2, 3..." />
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label" for="basic-default-message">Numero de WC</label>
                                                <input type="text" id="Num_sala" class="form-control phone-mask"
                                                    placeholder="1, 2, 3..." />
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label" for="basic-default-message">Numero de Salas</label>
                                                <input type="text" id="Num_cozinha" class="form-control phone-mask"
                                                    placeholder="1, 2, 3..." />
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label" for="basic-default-message">Numero de cozinhas</label>
                                                <input type="text" id="Num_WC" class="form-control phone-mask"
                                                    placeholder="1, 2, 3..." />
                                            </div>
                                        </div>
                                        
                                        <div id="additional-fields1" style="display: none;">
                                            <!-- additional fields will appear here -->
                                            <div class="mb-3">
                                                <label class="form-label" for="basic-default-message">Numero de quartos</label>
                                                <input type="text" id="Num_quarto" class="form-control phone-mask"
                                                    placeholder="1, 2, 3..." />
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label" for="basic-default-message">Numero de WC</label>
                                                <input type="text" id="Num_WC" class="form-control phone-mask"
                                                    placeholder="1, 2, 3..." />
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label" for="basic-default-message">Numero de Salas</label>
                                                <input type="text" id="Num_Sala" class="form-control phone-mask"
                                                    placeholder="1, 2, 3..." />
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label" for="basic-default-message">Numero de cozinhas</label>
                                                <input type="text" id="Num_cozinha" class="form-control phone-mask"
                                                    placeholder="1, 2, 3..." />
                                            </div>
                                        </div>

                                        <div id="additional-fields2" style="display: none;">
                                            <!-- additional fields will appear here -->
                                            <div class="mb-3">
                                                <label class="form-label" for="basic-default-message">Zona</label>
                                                <input type="text" id="Zona" class="form-control phone-mask"
                                                    placeholder="Zona urbana ou Rural" />
                                            </div>
                                        </div>
                                        <?php foreach($item as $k){?>
                                        <input type="hidden" name="id_proprietario" id="id_proprietario" value="<?php echo $k['id_proprietario'] ?>">
                                        <?php }?>
                                        <button type="button" onclick="cadastrar()" class="btn btn-primary">Send</button>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- / Content -->

                    <!-- Footer -->
                    <footer class="content-footer footer bg-footer-theme">
                        <div
                            class="container-fluid d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                            <div class="mb-2 mb-md-0">
                                ©
                                <script>
                                    document.write(new Date().getFullYear());
                                </script>
                                , made with ❤️ by
                                <a href="https://themeselection.com" target="_blank"
                                    class="footer-link fw-bolder">ThemeSelection</a>
                            </div>
                            <div>
                                <a href="https://themeselection.com/license/" class="footer-link me-4"
                                    target="_blank">License</a>
                                <a href="https://themeselection.com/" target="_blank" class="footer-link me-4">More
                                    Themes</a>

                                <a href="https://themeselection.com/demo/sneat-bootstrap-html-admin-template/documentation/"
                                    target="_blank" class="footer-link me-4">Documentation</a>

                                <a href="https://github.com/themeselection/sneat-html-admin-template-free/issues"
                                    target="_blank" class="footer-link me-4">Support</a>
                            </div>
                        </div>
                    </footer>
                    <!-- / Footer -->

                    <div class="content-backdrop fade"></div>
                </div>
                <!-- Content wrapper -->
            </div>
            <!-- / Layout page -->
        </div>

        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->
    <script>
        const mainOption = document.getElementById('main-option');
        const additionalFields = document.getElementById('additional-fields');
        const additionalFields1 = document.getElementById('additional-fields1');
        const additionalFields2 = document.getElementById('additional-fields2');

        mainOption.addEventListener('change', () => {
            if (mainOption.value === 'option1') {
                additionalFields.style.display = 'block';
                additionalFields1.style.display = 'none';
                additionalFields2.style.display = 'none';
            }else if(mainOption.value === 'option2'){
                additionalFields1.style.display = 'block';
                additionalFields.style.display = 'none';
                additionalFields2.style.display = 'none';
            }
            else if(mainOption.value === 'option3') {
                additionalFields2.style.display = 'block';
                additionalFields1.style.display = 'none';
                additionalFields.style.display = 'none';
            }
        });
    </script>
    <script>
        function cadastrar(){
            
            var Titulo = document.getElementById("Titulo").value;
            var AnoConstru = document.getElementById("AnoConstru").value;
            var Preco = document.getElementById("Preco").value;
            var AreaImovel = document.getElementById("AreaImovel").value;
            var Localizacao = document.getElementById("Localizacao").value;
            var Topologia = document.getElementById("Topologia").value;
            var Num_cozinha = document.getElementById("Num_cozinha").value;
            var Num_WC = document.getElementById("Num_WC").value;
            var Num_quarto = document.getElementById("Num_quarto").value;
            var Num_sala = document.getElementById("Num_sala").value;
            var id_proprietario = document.getElementById('id_proprietario').value;
            var zona = document.getElementById("Zona").value;

            let user = {
                "id_proprietario":id_proprietario,
                "Titulo":Titulo,
                "AnoConstru":AnoConstru,
                "Preco":Preco,
                "AreaImovel":AreaImovel,
                "Localizacao":Localizacao,
                "Topologia":Topologia,
                "Num_cozinha":Num_cozinha,
                "Num_WC":Num_WC,
                "Num_quarto":Num_quarto,
                "Num_sala":Num_sala,
                "Zona":zona
                
              }
              fetch('http://localhost/RealEstate/view/links.php/imoveis',{
                method: 'POST',
                headers:{
                  'Content-type':'application/json'
                },
                body:JSON.stringify(user)
                
              }).then(swal("Cadastro efectuado com sucesso!", "", "success"),
            )
              .catch((error)=>console.error("erro",error));
            }
        
    </script>
    <script>

    </script>
    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="assets/Sneat/vendor/libs/jquery/jquery.js"></script>
    <script src="loginproprietario.js"></script>
    <script src="assets/Sneat/vendor/libs/popper/popper.js"></script>
    <script src="assets/Sneat/vendor/js/bootstrap.js"></script>
    <script src="assets/Sneat/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script src="assets/Sneat/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->
    <script src="assets/Sneat/js/main.js"></script>

    <!-- Page JS -->

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
</body>

</html>