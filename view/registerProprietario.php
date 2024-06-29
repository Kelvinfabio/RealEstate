<!DOCTYPE html>
<html
  lang="en"
  class="light-style customizer-hide"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>Register Basic - Pages | Sneat - Bootstrap 5 HTML Admin Template - Pro</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="assets/Sneat/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="assets/Sneat/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="assets/Sneat/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="assets/Sneat/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="assets/Sneat/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <!-- Page CSS -->
    <!-- Page -->
    <link rel="stylesheet" href="assets/Sneat/vendor/css/pages/page-auth.css" />
    <!-- Helpers -->
    <script src="assets/Sneat/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="assets/Sneat/js/config.js"></script>
  </head>

  <body>
    <!-- Content -->

    <div class="container-xxl">
      <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner">
          <!-- Register Card -->
          <div class="card">
            <div class="card-body">
              <!-- Logo -->
              <div class="app-brand justify-content-center">
                <a href="index.php">
                    <img class="img-fluid" src="assets/img/icon-deal.png" alt="Icon" style="width: 30px; height: 30px;">
                  <span class="app-brand-text demo text-body fw-bolder" style="text-transform: initial ;">RealEstate</span>
                </a>
              </div>
              <!-- /Logo -->
              <h4 class="mb-2">Welcome to Owner RealEstate! </h4>
              <p class="mb-4">Aumente os seus rendimentos cadastrando as suas propriedades aqui!</p>
              <form id="formAuthentication" class="mb-3" action="index.html" method="POST">
                <div class="mb-3">
                  <label for="username" class="form-label">Nome</label>
                  <input
                    type="text"
                    class="form-control"
                    id="Nome"
                    placeholder="Enter your username"
                    autofocus
                  />
                </div>
                <div class="mb-3">
                  <label for="username" class="form-label">Sobrenome</label>
                  <input
                    type="text"
                    class="form-control"
                    id="Sobrenome"
                    placeholder="Enter your username"
                    autofocus
                  />
                </div>
                <div class="mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input type="text" class="form-control" id="Email" name="email" placeholder="Enter your email" />
                </div>
                <div class="mb-3 form-password-toggle">
                  <label class="form-label" for="password">Password</label>
                  <div class="input-group input-group-merge">
                    <input
                      type="password"
                      id="pass"
                      class="form-control"
                      placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                      aria-describedby="password"
                    />
                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                  </div>
                </div>

                <div class="mb-3">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="terms-conditions" name="terms" />
                    <label class="form-check-label" for="terms-conditions">
                      I agree to
                      <a href="javascript:void(0);">privacy policy & terms</a>
                    </label>
                  </div>
                </div>
                <button type="button" class="btn btn-primary d-grid w-100" onclick="add()">Sign up</button>
              </form>

              <p class="text-center">
                <span>Already have an account?</span>
                <a href="LoginProprietario.php">
                  <span>Sign in instead</span>
                </a>
              </p>
            </div>
          </div>
          <!-- Register Card -->
        </div>
      </div>
    </div>
    <script>
      function add(){
        var Nome = document.getElementById("Nome").value;
        var Sobrenome = document.getElementById("Sobrenome").value;
        var Email = document.getElementById("Email").value;
        var pass = document.getElementById("pass").value;

        let user = {
          "Nome":Nome,
          "Sobrenome":Sobrenome,
          "Email":Email,
          "Password":pass
          
        }
        fetch('http://localhost/RealEstate/view/links.php/user',{
          method: 'POST2',
          headers:{
            'Content-type':'application/json'
          },
          body:JSON.stringify(user)
        }).then(swal("Cadastro efectuado com sucesso!", "", "success"))
        .catch((error)=>console.error("erro",error));
      }
    </script>

    <!-- / Content -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="assets/Sneat/vendor/libs/jquery/jquery.js"></script>
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
