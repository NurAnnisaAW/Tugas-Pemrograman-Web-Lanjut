<?php
  require("library.php");
  $Lib = new Library();
?>
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
                </li>
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
        </aside>
        <div class="layout-page">
          </nav>
          <div class="content-wrapper">
            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Forms /</span> Input Simpanan</h4>
              <div class="row">
                <div class="col-12">
                  <div class="card">
                    <h5 class="card-header">
                    <i class="menu-icon tf-icons bx bx-user"></i>
                    Data Simpanan
                  </h5>
                    <div class="card-body demo-vertical-spacing demo-only-element">

                      <form action="simpanan.php" method="POST" enctype="multipart/form-data">
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-message">Tanggal </label>
                            <div class="col-sm-10">
                              <div class="col-md-10">
                              <input class="form-control" type="date" name="tgl_simpanan" id="html5-date-input" />
                            </div>
                        </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label">ID Simpanan</label>
                          <div class="col-sm-10">
                            <input type="text" name="id_simpanan" class="form-control" id="basic-default-name"  placeholder="SPNXXX" required />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label">Nama Simpanan</label>
                          <div class="col-sm-10">
                            <input type="text" name="nm_simpanan"class="form-control" id="basic-default-name" placeholder="Simpanan Pendidikan" required />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label">Jenis Simpanan</label>
                          <div class="col-sm-10">
                          <select id="defaultSelect" name="id_jenis_simpanan" class="form-select">
                            <?php
                              $show = $Lib->showJenisSimpanan();
                              while($data = $show->fetch(PDO::FETCH_OBJ))
                              {
                                echo "<option value=$data->id_jenis_simpanan>$data->nm_jenis_simpanan</option>
                                  ";
                              }
                              ?>
                            </select>
                            </div>
                          </div>
                          <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">ID Anggota</label>
                            <div class="col-sm-10">
                              <div class="input-group">
                                <input
                                  class="form-select"
                                  id="inputGroupSelect04"
                                  aria-label="Example select with button addon"
                                name="id_anggota" >
                                <button class="btn btn-outline-primary" name="cari" type="button" id="onClickSearch">CARI</button>
                                  <?php 
                                      if(isset($_POST["cari"])){
                                          $id_anggota = $_POST['id_anggota'];
                                          $add = $Lib->searchAnggota($id_anggota);
                                          var_dump($add);
                                      }
                                  ?>
                            </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label">Nama</label>
                          <div class="col-sm-10">
                            <input type="text" name="nm_anggota" value=""  class="form-control" id="nm_anggota" readonly/>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-message">Tgl. Lahir </label>
                            <div class="col-sm-10">
                              <input class="form-control" type="date" name="tgl_lahir" value="" id="tgl_lahir" readonly/>
                            </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label">Alamat</label>
                          <div class="col-sm-10">
                            <input type="text" name="alamat"class="form-control" id="alamat" value=""  readonly />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label">Besar Simpanan</label>
                          <div class="col-sm-10">
                            <input type="text" name="besar_simpanan"class="form-control" id="basic-default-name" />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label">Jumlah Simpanan</label>
                          <div class="col-sm-10">
                            <input type="text" name="jumlah_simpanan" class="form-control" readonly  />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-message">Keterangan</label>
                          <div class="col-sm-10">
                            <textarea name="ket"
                              id="basic-default-message"
                              class="form-control"
                              placeholder="Apakah kamu punya tambahan informasi lainnya?"
                              aria-label="Apakah kamu punya tambahan informasi lainnya?"
                              aria-describedby="basic-icon-default-message2" required
                            ></textarea>
                          </div>
                        </div>
                        <div class="row justify-content-end">
                          <div class="col-sm-10">
                            <button class="btn btn-primary" type="submit" name="addSimpanan" value="Add Simpanan">Submit</button>
                          </div>
                        </div>
                      </form>
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
    <script type="text/javascript">
    $(document).ready(function(){
        $("#onClickSearch").click(function(){
            var param = $("#inputGroupSelect04").val();
            $.ajax({
                type: 'POST',
                url: 'searchAnggota.php',
                data : {param : param},
                success: function(response) {
                    console.log(jQuery.parseJSON(response)[0].nama);
                    document.getElementById("nm_anggota").value = jQuery.parseJSON(response)[0].nama;
                    document.getElementById("tgl_lahir").value = jQuery.parseJSON(response)[0].tgl_lahir;
                    document.getElementById("alamat").value = jQuery.parseJSON(response)[0].alamat;
                    //  $("#nm_anggota").val(response[0].alamat);
                }
            });
       });
    });
    </script>
  </body>
</html>

<?php
  if (isset($_POST['addSimpanan'])) {
    $id_simpanan = $_POST['id_simpanan'];
    $id_anggota = $_POST['id_anggota'];
    $id_jenis_simpanan = $_POST['id_jenis_simpanan'];
    $nm_simpanan = $_POST['nm_simpanan'];
    $besar_simpanan = $_POST['besar_simpanan'];
    $tgl_simpanan = $_POST['tgl_simpanan'];
    $ket = $_POST['ket'];
    $jumlah_simpanan = $_POST['jumlah_simpanan'];
    $arg = Array($_POST['id_simpanan'],$_POST['id_anggota'],$_POST['id_jenis_simpanan'],$_POST['nm_simpanan'],$_POST['besar_simpanan'],$_POST['tgl_simpanan'],$_POST['ket'],$_POST['besar_simpanan']);

    $lib = new library();
    $add = $lib->addSimpanan($arg);
    if ($add == "success") {
      echo "<script>url:location='view_all_simpanan.php';</script>";
    }
  }
?>