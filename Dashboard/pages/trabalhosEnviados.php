<!--
=========================================================
 Paper Dashboard 2 - v2.0.0
=========================================================

 Product Page: https://www.creative-tim.com/product/paper-dashboard-2
 Copyright 2019 Creative Tim (https://www.creative-tim.com)
 Licensed under MIT (https://github.com/creativetimofficial/paper-dashboard/blob/master/LICENSE)

 Coded by Creative Tim

=========================================================

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->

<?php
require_once($_SERVER["CONTEXT_DOCUMENT_ROOT"] . "/ProjetoPSI/assets/php/Object/validacaoDatas/obj_DtEvaluation.php");
require_once($_SERVER["CONTEXT_DOCUMENT_ROOT"] . "/ProjetoPSI/assets/php/Object/verifyLogin.php");
require_once($_SERVER["CONTEXT_DOCUMENT_ROOT"] . "/ProjetoPSI/assets/php/Object/obj_verifyRoleAdmin.php");
?>

<!DOCTYPE html>
<html lang="pt">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>Trabalhos Enviados</title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="../../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../../assets/css/paper-dashboard.css?v=2.0.0" rel="stylesheet" />
  <script src="../../assets/js/core/jquery.min.js"></script>



</head>

<body style="background-color : #f4f3ef">
  <script>
    $(document).ready(function() {
      $("#sidebar").load("../../Common/sidebar-dashboard.html");
      $(document).on('DOMNodeInserted', function(e) {
        $("#trabalhosEnviados").addClass("active");
      })
    })
  </script>
  <div id="sidebar"></div>

  <div class="main-panel">
    <div class="content mt-0">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Trabalhos Enviados</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table" id="tb_Work">
                    <thead class=" text-primary">
                      <th>ID</th>
                      <th>Titulo do Trabalho</th>
                      <th>Descrição do Trabalho</th>
                      <th>Nome</th>
                      <th>Tipo de Trabalho</th>
                      <th>Trabalho</th>
                    </thead>
                    <tbody>
                      <!--<td>
                            <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal">Avaliar</button>
                          </td>-->
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer footer-black  footer-white ">
        <div class="container-fluid">
          <div class="row">
            <nav class="footer-nav">
              <ul>
                <li>
                  <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a>
                </li>
                <li>
                  <a href="http://blog.creative-tim.com/" target="_blank">Blog</a>
                </li>
                <li>
                  <a href="https://www.creative-tim.com/license" target="_blank">Licenses</a>
                </li>
              </ul>
            </nav>
            <div class="credits ml-auto">
              <span class="copyright">
                ©
                <script>
                  document.write(new Date().getFullYear())
                </script>, made with <i class="fa fa-heart heart"></i> by Creative Tim
              </span>
            </div>
          </div>
        </div>
      </footer>
      <!--   Core JS Files   -->
      <script src="../../assets/js/core/popper.min.js"></script>
      <script src="../../assets/js/core/bootstrap.min.js"></script>
      <script src="../../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>


      <!--  Notifications Plugin    -->
      <script src="../../assets/js/plugins/bootstrap-notify.js"></script>
      <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
      <script src="../../assets/js/paper-dashboard.min.js?v=2.0.0" type="text/javascript"></script>
      <script src="./script/scr_trabalhosEnviados.js?v=2"></script>
</body>

</html>