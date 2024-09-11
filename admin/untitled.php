<?php 
session_start();
require 'security.php';?>
<!DOCTYPE html>
<?php include 'topo.php'; ?>
    <nav class="navbar fixed-top">
        <div class="d-flex align-items-center navbar-left">
            <a href="#" class="menu-button d-none d-md-block">
                <svg class="main" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 9 17">
                    <rect x="0.48" y="0.5" width="7" height="1" />
                    <rect x="0.48" y="7.5" width="7" height="1" />
                    <rect x="0.48" y="15.5" width="7" height="1" />
                </svg>
                <svg class="sub" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 17">
                    <rect x="1.56" y="0.5" width="16" height="1" />
                    <rect x="1.56" y="7.5" width="16" height="1" />
                    <rect x="1.56" y="15.5" width="16" height="1" />
                </svg>
            </a>

            <a href="#" class="menu-button-mobile d-xs-block d-sm-block d-md-none">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 17">
                    <rect x="0.5" y="0.5" width="25" height="1" />
                    <rect x="0.5" y="7.5" width="25" height="1" />
                    <rect x="0.5" y="15.5" width="25" height="1" />
                </svg>
            </a>

           <!--  <div class="search" data-search-path="Layouts.Search.html?q=">
                <input placeholder="Busca...">
                <span class="search-icon">
                    <i class="simple-icon-magnifier"></i>
                </span>
            </div> -->
        </div>

        
        <a class="navbar-logo" href="index.php">
            <span class="logo d-none d-xs-block"></span>
            <span class="logo-mobile img-flud d-block d-xs-none"></span>
        </a>

        <div class="navbar-right">
            <!-- <div class="header-icons d-inline-block align-middle"> -->
                <!-- <a class="btn btn-sm btn-outline-primary mr-2 d-none d-md-inline-block mb-2" href="https://1.envato.market/5kAb">&nbsp;BUY&nbsp;</a> -->
                
                <div class="position-relative d-none d-sm-inline-block">
                    
                    <button class="header-icon btn btn-empty" type="button" id="iconMenuButton" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <i class="simple-icon-grid"></i>
                    </button></div>
                    <!-- <button> <div class="dark ">
                    <div class="form-check form-switch ">
                    <label class="form-check-label " for="lightSwitch">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                            class="bi bi-brightness-high" viewBox="0 0 16 16">
                            <path d="M8 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm0 1a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"
                            />
                            </svg>
                    </label>
                        <input class="form-check-input" type="checkbox" id="lightSwitch" />
</div>
                    </div></button> -->
                    <div class="dropdown-menu dropdown-menu-right mt-3  position-absolute" id="iconMenuDropdown">
                        <a href="#" class="icon-menu-item">
                            <i class="iconsmind-Equalizer d-block"></i>
                            <span>Configurações</span>
                        </a>

                        <a href="#" class="icon-menu-item">
                            <i class="iconsmind-MaleFemale d-block"></i>
                            <span>Usuário</span>
                        </a>

                        <a href="#" class="icon-menu-item">
                            <i class="iconsmind-Puzzle d-block"></i>
                            <span>Componentes</span>
                        </a>

                        <a href="#" class="icon-menu-item">
                            <i class="iconsmind-Bar-Chart d-block"></i>
                            <span>Lucros</span>
                        </a>

                        <a href="#" class="icon-menu-item">
                            <i class="iconsmind-File-Chart d-block"></i>
                            <span>pesquisas</span>
                        </a>

                        <a href="#" class="icon-menu-item">
                            <i class="iconsmind-Suitcase d-block"></i>
                            <span>Tarefas</span>
                        </a>

                    </div>
                </div>

                <div class="position-relative d-inline-block">
                  <!--   <button class="header-icon btn btn-empty" type="button" id="notificationButton" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <i class="simple-icon-bell"></i>
                        <span class="count">3</span>
                    </button> -->
                    <div class="dropdown-menu dropdown-menu-right mt-3 scroll position-absolute" id="notificationDropdown">

                        <div class="d-flex flex-row mb-3 pb-3 border-bottom">
                            <a href="#">
                                <img src="assets/img/profile-pic-l-2.jpg" alt="Notification Image" class="img-thumbnail list-thumbnail xsmall border-0 rounded-circle" />
                            </a>
                            <div class="pl-3 pr-2">
                                <a href="#">
                                    <p class="font-weight-medium mb-1">Joisse Kaycee acabou de enviar um novo comentário!</p>
                                    <p class="text-muted mb-0 text-small">09.04.2018 - 12:45</p>
                                </a>
                            </div>
                        </div>

                        <div class="d-flex flex-row mb-3 pb-3 border-bottom">
                            <a href="#">
                                <img src="assets/img/notification-thumb.jpg" alt="Notification Image" class="img-thumbnail list-thumbnail xsmall border-0 rounded-circle" />
                            </a>
                            <div class="pl-3 pr-2">
                                <a href="#">
                                    <p class="font-weight-medium mb-1">1 item is out of stock!</p>
                                    <p class="text-muted mb-0 text-small">09.04.2018 - 12:45</p>
                                </a>
                            </div>
                        </div>


                        <div class="d-flex flex-row mb-3 pb-3 border-bottom">
                            <a href="#">
                                <img src="assets/img/notification-thumb-2.jpg" alt="Notification Image" class="img-thumbnail list-thumbnail xsmall border-0 rounded-circle" />
                            </a>
                            <div class="pl-3 pr-2">
                                <a href="#">
                                    <p class="font-weight-medium mb-1">New order received! It is total $147,20.</p>
                                    <p class="text-muted mb-0 text-small">09.04.2018 - 12:45</p>
                                </a>
                            </div>
                        </div>

                        <div class="d-flex flex-row mb-3 pb-3 ">
                            <a href="#">
                                <img src="assets/img/notification-thumb-3.jpg" alt="Notification Image" class="img-thumbnail list-thumbnail xsmall border-0 rounded-circle" />
                            </a>
                            <div class="pl-3 pr-2">
                                <a href="#">
                                    <p class="font-weight-medium mb-1">3 items just added to wish list by a user!</p>
                                    <p class="text-muted mb-0 text-small">09.04.2018 - 12:45</p>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>

                <button class="header-icon btn btn-empty d-none d-sm-inline-block" type="button" id="fullScreenButton">
                    <i class="simple-icon-size-fullscreen"></i>
                    <i class="simple-icon-size-actual"></i>
                </button>

            </div>

            <div class="user d-inline-block">
                <button class="btn btn-empty p-0" type="button" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    <span class="name"><?=$_SESSION['user'];?></span>
                    <span>
                        <img alt="Profile Picture" src="assets/img/profile-pic-l.jpg" />
                    </span>
                </button>

                <div class="dropdown-menu dropdown-menu-right mt-3">
                 <a class="dropdown-item" href="#">Conta</a>
                     
                     <!-- <a class="dropdown-item" href="#">Histórico</a> -->
                     <a class="dropdown-item" href="#">Suporte</a>
                     <a class="dropdown-item" href="logout.php">Sair</a>
                </div>
            </div>
        </div>
    </nav>
    <div class="sidebar">
        <div class="main-menu">
            <div class="scroll">
                <ul class="list-unstyled">
                    <li >
                        <a href="index.php">
                            <i class="simple-icon-home"></i>
                            <span>Home</span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="#dashboard">
                            <i class="iconsmind-Optimization"></i>
                            <span>Cadastros</span>
                        </a>
                    </li>
                   <!--  <li>
                        <a href="#layouts">
                            <i class="iconsmind-Digital-Drawing"></i> Listagens
                        </a>
                    </li> -->
                    <li>
                        <a href="#applications">
                            <i class="simple-icon-organization"></i> Contratos
                        </a>
                    </li>

                    <!-- <li>
                        <a href="#ui">
                            <i class="iconsmind-Pantone"></i> UI
                        </a>
                    </li>
                    <li>
                        <a href="#landingPage">
                            <i class="iconsmind-Space-Needle"></i> Landing Page
                        </a>
                    </li> 
                    <li>
                        <a href="#menu">
                            <i class="iconsmind-Three-ArrowFork"></i> Menu
                        </a>
                    </li>-->
                </ul>
            </div>
        </div>
        <div class="sub-menu">
            <div class="scroll">
                <ul class="list-unstyled" data-link="dashboard">
                    <li class="active">
                        <a href="index.php?link=5">
                            <i class="simple-icon-rocket"></i> contrato
                        </a>
                    </li>
                    <li>
                        <a href="index.php?link=4">
                            <i class="simple-icon-pie-chart"></i>credor
                        </a>
                    </li>
                    <li>
                        <a href="index.php?link=6">
                            <i class="simple-icon-basket-loaded"></i> Fiscal de Contrato
                        </a>
                    </li>
                     <li>
                        <a href="index.php?link=2">
                            <i class="simple-icon-doc"></i> secretarias
                        </a>
                    </li> 
                    <li>
                        <a href="index.php?link=9">
                            <i class="simple-icon-picture"></i> Notas 
                            <!-- <i class="simple-icon-picture"></i> Notas <span class="badge badge-pill badge-outline-primary float-right mr-4">NEW</span> -->
                        </a>
                    </li>
                    <li>
                        <a href="index.php?link=1">
                            <i class="simple-icon-doc"></i>  usuarios
                        </a>
                    </li> 
                </ul>

                <ul class="list-unstyled" data-link="layouts">
                    <li>
                        <a href="index.php?link=13">
                            <i class="simple-icon-credit-card"></i> Relatório
                        </a>
                    </li>
                    <li>
                        <a href="index.php?link=12">
                            <i class="simple-icon-check"></i> Credores
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="simple-icon-calculator"></i> Fiscais
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="simple-icon-bubbles"></i> Contratos
                        </a>
                    </li> 
                   <!--  <li>
                        <a href="Layouts.Thumbs.html">
                            <i class="simple-icon-list"></i> Thumb List
                        </a>
                    </li>
                    <li>
                        <a href="Layouts.Images.html">
                            <i class="simple-icon-grid"></i> Image List
                        </a>
                    </li>
                    <li>
                        <a href="Layouts.Details.html">
                            <i class="simple-icon-book-open"></i> Details
                        </a>
                    </li>
                    <li>
                        <a href="Layouts.Search.html">
                            <i class="simple-icon-magnifier"></i> Search
                        </a>
                    </li>
                    <li>
                        <a href="Layouts.Login.html">
                            <i class="simple-icon-user-following"></i> Login
                        </a>
                    </li>
                    <li>
                        <a href="Layouts.Register.html">
                            <i class="simple-icon-user-follow"></i> Register
                        </a>
                    </li>
                    <li>
                        <a href="Layouts.ForgotPassword.html">
                            <i class="simple-icon-user-unfollow"></i> Forgot Password
                        </a>
                    </li>
                    <li>
                        <a href="Layouts.Error.html">
                            <i class="simple-icon-exclamation"></i> Error
                        </a>
                    </li> -->
                </ul>
                <ul class="list-unstyled" data-link="applications">
                    <!-- <li>
                        <a href="index.php?link=9">
                            <i class="simple-icon-picture"></i> Notas 
                            <i class="simple-icon-picture"></i> Notas <span class="badge badge-pill badge-outline-primary float-right mr-4">NEW</span>
                        </a>
                    </li> -->
                     <li>
                        <a href="index.php?link=10">
                            <i class="simple-icon-picture"></i> Lista Geral 
                            <!-- <i class="simple-icon-picture"></i> Notas <span class="badge badge-pill badge-outline-primary float-right mr-4">NEW</span> -->
                        </a>
                    </li>
                     <li>
                        <a href="index.php?link=17">
                            <i class="simple-icon-picture"></i>Notas Pedentes
                            <!-- <i class="simple-icon-picture"></i> Notas <span class="badge badge-pill badge-outline-primary float-right mr-4">NEW</span> -->
                        </a>
                    </li>
                     <li>
                        <a href="index.php?link=16">
                            <i class="simple-icon-picture"></i> Notas Feitas/Relatorios
                            <!-- <i class="simple-icon-picture"></i> Notas <span class="badge badge-pill badge-outline-primary float-right mr-4">NEW</span> -->
                        </a>
                    </li>
                   
                </ul>
               <!-- <ul class= "list-unstyled" data-link="ui">
                    <li>
                        <a href="Ui.Alerts.html">
                            <i class="simple-icon-bell"></i> Alerts
                        </a>
                    </li>
                    <li>
                        <a href="Ui.Badges.html">
                            <i class="simple-icon-badge"></i> Badges
                        </a>
                    </li>
                    <li>
                        <a href="Ui.Buttons.html">
                            <i class="simple-icon-control-play"></i> Buttons
                        </a>
                    </li>
                    <li>
                        <a href="Ui.Cards.html">
                            <i class="simple-icon-layers"></i> Cards
                        </a>
                    </li>

                    <li>
                        <a href="Ui.Carousel.html">
                            <i class="simple-icon-picture"></i> Carousel
                        </a>
                    </li>
                    <li>
                        <a href="Ui.Charts.html">
                            <i class="simple-icon-chart"></i> Charts
                        </a>
                    </li>
                    <li>
                        <a href="Ui.Collapse.html">
                            <i class="simple-icon-arrow-up"></i> Collapse
                        </a>
                    </li>
                    <li>
                        <a href="Ui.Dropdowns.html">
                            <i class="simple-icon-arrow-down"></i> Dropdowns
                        </a>
                    </li>
                    <li>
                        <a href="Ui.Editors.html">
                            <i class="simple-icon-book-open"></i> Editors
                        </a>
                    </li>
                    <li>
                        <a href="Ui.Forms.html">
                            <i class="simple-icon-check mi-forms"></i> Forms
                        </a>
                    </li>
                    <li>
                        <a href="Ui.FormComponents.html">
                            <i class="simple-icon-puzzle"></i> Form Components
                        </a>
                    </li>
                    <li>
                        <a href="Ui.Icons.html">
                            <i class="simple-icon-star"></i> Icons
                        </a>
                    </li>
                    <li>
                        <a href="Ui.InputGroups.html">
                            <i class="simple-icon-note"></i> Input Groups
                        </a>
                    </li>
                    <li>
                        <a href="Ui.Jumbotron.html">
                            <i class="simple-icon-screen-desktop"></i> Jumbotron
                        </a>
                    </li>
                    <li>
                        <a href="Ui.Modal.html">
                            <i class="simple-icon-docs"></i> Modal
                        </a>
                    </li>
                    <li>
                        <a href="Ui.Navigation.html">
                            <i class="simple-icon-cursor"></i> Navigation
                        </a>
                    </li>

                    <li>
                        <a href="Ui.PopoverandTooltip.html">
                            <i class="simple-icon-pin"></i> Popover & Tooltip
                        </a>
                    </li>
                    <li>
                        <a href="Ui.Sortable.html">
                            <i class="simple-icon-shuffle"></i> Sortable
                        </a>
                    </li>
                </ul> -->
                <!-- <ul class="list-unstyled" data-link="landingPage">
                    <li>
                        <a target="_blank" href="LandingPage.Home.html">
                            <i class="simple-icon-docs"></i> Multipage Home
                        </a>
                    </li>
                    <li>
                        <a target="_blank" href="LandingPage.Home.Single.html">
                            <i class="simple-icon-doc"></i> Singlepage Home
                        </a>
                    </li>
                    <li>
                        <a target="_blank" href="LandingPage.About.html">
                            <i class="simple-icon-info"></i> About
                        </a>
                    </li>
                    <li>
                        <a target="_blank" href="LandingPage.Auth.Login.html">
                            <i class="simple-icon-user-following"></i> Auth Login
                        </a>
                    </li>
                    <li>
                        <a target="_blank" href="LandingPage.Auth.Register.html">
                            <i class="simple-icon-user-follow"></i> Auth Register
                        </a>
                    </li>
                    <li>
                        <a target="_blank" href="LandingPage.Blog.html">
                            <i class="simple-icon-bubbles"></i> Blog
                        </a>
                    </li>
                    <li>
                        <a target="_blank" href="LandingPage.Blog.Video.html">
                            <i class="simple-icon-bubble"></i> Blog Detail
                        </a>
                    </li>
                    <li>
                        <a target="_blank" href="LandingPage.Careers.html">
                            <i class="simple-icon-people"></i> Careers
                        </a>
                    </li>
                    <li>
                        <a target="_blank" href="LandingPage.Confirmation.html">
                            <i class="simple-icon-check"></i> Confirmation
                        </a>
                    </li>
                    <li>
                        <a target="_blank" href="LandingPage.Contact.html">
                            <i class="simple-icon-phone"></i> Contact
                        </a>
                    </li>
                    <li>
                        <a target="_blank" href="LandingPage.Content.html">
                            <i class="simple-icon-book-open"></i> Content
                        </a>
                    </li>
                    <li>
                        <a target="_blank" href="LandingPage.Docs.html">
                            <i class="simple-icon-notebook"></i> Docs
                        </a>
                    </li>
                    <li>
                        <a target="_blank" href="LandingPage.Features.html">
                            <i class="simple-icon-chemistry"></i> Features
                        </a>
                    </li>
                    <li>
                        <a target="_blank" href="LandingPage.Prices.html">
                            <i class="simple-icon-wallet"></i> Prices
                        </a>
                    </li>
                    <li>
                        <a target="_blank" href="LandingPage.Videos.html">
                            <i class="simple-icon-film"></i> Videos
                        </a>
                    </li>
                </ul>

                <ul class="list-unstyled" data-link="menu">
                    <li>
                        <a href="Menu.Default.html">
                            <i class="simple-icon-control-pause"></i> Default
                        </a>
                    </li>
                    <li>
                        <a href="Menu.Subhidden.html">
                            <i class="simple-icon-arrow-left mi-subhidden"></i> Subhidden
                        </a>
                    </li>
                    <li>
                        <a href="Menu.Hidden.html">
                            <i class="simple-icon-control-start mi-hidden"></i> Hidden
                        </a>
                    </li>
                </ul> -->
            </div>
        </div>
    </div>

    <main >
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 ">
                     <?php 
if(isset($_GET["link"])){
  $link = $_GET["link"];
  $pag[1]="cad_user.php";
  $pag[2]="cad_secretaria.php";
  $pag[3]="cad_notafiscal.php";
  $pag[4]="cad_credor.php";
  $pag[5]="cad_contrato.php";
  $pag[6]="cad_fiscal.php";
  $pag[7]="logout.php";
  $pag[8]="cad_relatorio.php";
  $pag[9]="cad_nota.php";
  $pag[10]="listnotas.php";
  $pag[11]="verCredor.php";
  $pag[12]="listacredores.php";
  $pag[13]="listarel.php";
  $pag[14]="relatoriopdf.php";
  $pag[15]="imprimir.php";
  $pag[16]="listnotasrelatorios.php";
  $pag[17]="listnotaspedente.php";
 
}
  
    if(!empty($link)){  
      if (@file_exists($pag[$link])){
      include $pag[$link];
  
      }else{
      echo "<center><img src='assets/image/chuck.png' width='300'  /></center>";
      echo "<h1 class='naoexiste'>Chuck Norris, contou o infinito 4 vezes e não encontrou essa página!</h1>";
      }
    }else{

      if($_SESSION['permissao'] == 0){

        include "home.php";
      }else{
        include "home_user.php";
      }
      
  };

  ?>
                    
                </div>
            </div>
        </div>
    </main>
    <!-- <script src="assets/DataTables/jquery-3.5.1.js"></script> -->
      <script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script>
    <script src="assets/js/vendor/bootstrap.bundle.min.js"></script>
    <script src="assets/js/vendor/Chart.bundle.min.js"></script>
    <script src="assets/js/vendor/chartjs-plugin-datalabels.js"></script>
    <script src="assets/js/vendor/moment.min.js"></script>
    <script src="assets/js/vendor/fullcalendar.min.js"></script>
    <script src="assets/js/vendor/datatables.min.js"></script>
    <script src="assets/js/vendor/perfect-scrollbar.min.js"></script>
    <script src="assets/js/vendor/owl.carousel.min.js"></script>
    <script src="assets/js/vendor/progressbar.min.js"></script>
    <script src="assets/js/vendor/jquery.barrating.min.js"></script>
    <script src="assets/js/vendor/select2.full.js"></script>
    <script src="assets/js/vendor/nouislider.min.js"></script>
    <script src="assets/js/vendor/bootstrap-datepicker.js"></script>
    <script src="assets/js/vendor/Sortable.js"></script>
    <script src="assets/js/vendor/mousetrap.min.js"></script>
    <script src="assets/js/dore.script.js"></script>
    <script src="assets/js/scripts.js"></script>
    <script src="assets/js/jquery.mask.min.js"></script>
    <script src="assets/js/switch.js"></script>

</body>

</html>