
<html
  lang="en"
  class="light-style layout-menu-fixed"
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

    <title>Koperasi</title>

    <meta name="description" content="" />
    <link rel="icon" type="image/x-icon" href="../assets/img/favicon/favicon.ico" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css" />
    <link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../assets/css/demo.css" />
    <link rel="stylesheet" href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <script src="../assets/vendor/js/helpers.js"></script>
    <script src="../assets/js/config.js"></script>
  </head>

  <body>
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="app-brand demo">
            <a href="index.php" class="app-brand-link">
              <span class="app-brand-text demo menu-text fw-bolder ms-2">Koperasi</span>
            </a>
          </div>
          <ul class="menu-inner py-1">
            <li class="menu-item">
              <a href="index.php" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>Dashboard
              </a>
            </li>
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-user"></i>
                Anggota
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="anggota.php" class="menu-link" >
                  Input Anggota
                  </a>
                </li>
                <li class="menu-item">
                  <a href="view_all_anggota.php" class="menu-link" >
                    <div data-i18n="Basic">View Data Anggota</div>
                  </a>
                </li>
              </ul>
            </li>
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-money"></i>
                Jenis Simpanan
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="jenis_simpanan.php" class="menu-link" >
                  Input Jenis Simpanan
                  </a>
                </li>
                <li class="menu-item">
                  <a href="view_all_jenis_simpanan.php" class="menu-link" >
                    <div data-i18n="Basic">View Data Simpanan</div>
                  </a>
                </  >
              </ul>
            </li>
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-wallet"></i>
                Simpanan
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="simpanan.php" class="menu-link" >
                  Input Simpanan
                  </a>
                </li>
                <li class="menu-item">
                  <a href="view_all_simpanan.php" class="menu-link" >
                    <div data-i18n="Basic">View Data Simpanan</div>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
          </li>
          </ul>
          </aside>
        <div class="layout-page">
          <div class="content-wrapper">
            <div class="container-xxl flex-grow-1 container-p-y">
              <div class="row">
                <div class="col-lg-4 col-md-4 order-1">
                  <div class="row">
                    <div class="col-lg-6 col-md-12 col-6 mb-4">
                      <div class="card">
                        <div class="card-body">
                          <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                              <i class="bx bx-user"></i>  
                            </div>
                          </div>
                          <span class="fw-semibold d-block mb-1">Anggota</span>
                          <h3 class="card-title mb-2">
                            <?php 
                              require("library.php");
                              $Lib = new Library();
                              $show = $Lib->showSumAnggota();
                              while($data = $show->fetch(PDO::FETCH_OBJ))
                              {
                                echo "$data->jAnggota";                               
                              }
                            ?>      
                          </h3>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-6 mb-4">
                      <div class="card">
                        <div class="card-body">
                          <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                              <i class="bx bx-file"></i>
                            </div>
                          </div>
                          <span class="fw-semibold d-block mb-1">Jenis Simpanan</span>
                          <h3 class="card-title text-nowrap mb-1">
                            <?php 
                              $show = $Lib->showSumJenisSimpanan();
                              while($data = $show->fetch(PDO::FETCH_OBJ))
                              {
                                echo "$data->jJenisSimpanan";                               
                              }
                           ?>
                          </h3>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-md-8 col-lg-4 order-3 order-md-2">
                  <div class="row">
                    <div class="col-8 mb-4">
                      <div class="card">
                        <div class="card-body">
                          <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                              <i class="bx bx-wallet"></i>
                            </div>
                          </div>
                          <span class="fw-semibold d-block mb-1">Simpanan</span>
                          <h3 class="card-title text-nowrap mb-2">
                            <?php 
                              $show = $Lib->showSumSimpanan();
                              while($data = $show->fetch(PDO::FETCH_OBJ))
                              {
                                echo "$data->jSimpanan";                               
                              }
                           ?>
                           </h3>
                        </div>
                      </div>
                    </div>
                    </div>
                  </div>
                </div>
              </div>
            <footer class="content-footer footer bg-footer-theme">
              <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                <div class="mb-2 mb-md-0">
                  ©
                  <script>
                    document.write(new Date().getFullYear());
                  </script>
                </div>
              </div>
            </footer>
          </div>
        </div>
      </div>\
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <script src="../assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../assets/vendor/libs/popper/popper.js"></script>
    <script src="../assets/vendor/js/bootstrap.js"></script>
    <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="../assets/vendor/js/menu.js"></script>
    <script src="../assets/js/main.js"></script>
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>