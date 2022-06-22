<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" href="../slide/css/swiper.min.css">
    <link rel="stylesheet" media="screen" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.min.css">
    <link href="../libs/fontawesome/css/fontawesome.css" rel="stylesheet">
    <link href="../libs/fontawesome/css/brands.css" rel="stylesheet">
    <link href="../libs/fontawesome/css/solid.css" rel="stylesheet">
    <link rel="stylesheet" media="screen" href="../style/style.css">
    <link rel="stylesheet" media="screen" href="../style/sfia.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <script src="https://kit.fontawesome.com/7158d3bcfa.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
        <!-- Traductor -->
    <style type="text/css">
      <!--
      a.gflag {vertical-align:middle;font-size:32px;padding:1px 0;background-repeat:no-repeat;background-image:url(//gtranslate.net/flags/32.png);}
      a.gflag img {border:0;}
      a.gflag:hover {background-image:url(//gtranslate.net/flags/32a.png);}
      #goog-gt-tt {display:none !important;}
      .goog-te-banner-frame {display:none !important;}
      .goog-te-menu-value:hover {text-decoration:none !important;}
      body {top:0 !important;}
      #google_translate_element2 {display:none!important;}
      -->
      #mydatatable tfoot input {
            width: 100% !important;
        }

        #mydatatable tfoot {
            display: table-header-group !important;
  </style>

  <title>Sistema de control de visitas</title>
  <link rel="shortcut icon" href="impulso.ico">
  <!-- Required meta tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/js/bootstrap.min.js"></script>

    <!-- Datatables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/v/bs4-4.1.1/dt-1.10.18/datatables.min.css">
    <script src="https://cdn.datatables.net/v/bs4-4.1.1/dt-1.10.18/datatables.min.js"></script>

    <!-- Buttons -->
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.2/css/buttons.dataTables.min.css">
    <script src="https://cdn.datatables.net/buttons/1.6.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.53/build/pdfmake.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.53/build/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.flash.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.print.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>

</head>

<body>
    <div class="wrapper">
        <!-- GTranslate: https://gtranslate.io/ -->
        <div id="google_translate_element2"></div>

        <!-- HEADER -->
        <header class="masthead" role="banner">
            <!-- Top bar -->
            <div class="top-bar">
                <div class="container">
                    <div class="row">
                        <!-- CONTACT -->
                        <div class="hidden-xs col-sm-6">
                            <ul class="contact-options">

                                <li class="phone">
                                    <a href="http://sgo.juventudesgto.com/Directorio/Directorio.html" title="Contacto" target="_blank"> 477 710 34 00</a>
                                    
                                </li>

                                <div class="rro"></div>
                                <li class="phone">
                                    <a href="http://sgo.juventudesgto.com/Directorio/Directorio.html" title="Contacto" target="_blank">DIRECTORIO</a>
                                </li>

                            </ul>
                        </div>
                        <!-- /CONTACT -->
                        <!-- SOCIAL -->
                        <div class="col-xs-12 col-sm-6">
                            <div class="social xs-center">

                                <a href="https://www.instagram.com/juventudgto/" title="Instagram" target="_blank"><span class="fab fa-instagram"></span></a>
                                <a href="https://www.facebook.com/JuventudEsGto" title="Facebook" target="_blank"><span class="fab fa-facebook-square"></span></a>
                                <a href="https://twitter.com/JuventudEsGto" title="Twitter" target="_blank"><span class="fab fa-twitter"></span></a>
                                <a href="https://www.youtube.com/channel/UCNxjn155hP-SHqu1m4C4w4w" title="YouTube" target="_blank"><span class="fab fa-youtube"></span></a>
                                <a href="https://www.tiktok.com/@juventudesgto?_d=secCgYIASAHKAESMgowwNecevOXTNFs1MrRbUWyACd%2F8VbwjJSj7X0VbtSgMB8Hk6CSAz4JM6iFy3fkAhmMGgA%3D&language=es&sec_uid=MS4wLjABAAAAIvg_1QW5XcHcnWaU215krcSoYRS32VH140AvOjufnSdAgfinJVU1lo4yH5UGZANK&sec_user_id=MS4wLjABAAAAIvg_1QW5XcHcnWaU215krcSoYRS32VH140AvOjufnSdAgfinJVU1lo4yH5UGZANK&share_app_id=1233&share_author_id=6902169995460314113&share_link_id=1ef3c474-ff07-49b6-9446-456a68e369d6&timestamp=1625587897&u_code=dfm08lg625c7a6&user_id=6902169995460314113&utm_campaign=client_share&utm_medium=android&utm_source=whatsapp&source=h5_m&_r=1" title="TikTok" target="_blank"><span class="fab fa-tiktok"></span></a>
                                <div class="rro lnh"></div>                           
                            </div>
                        </div>
                        <!-- /SOCIAL -->
                    </div>
                </div>
            </div>
            <!-- Main menu -->
            <nav class="nav navbar-default">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle search" data-toggle="modal" data-target="#modal_search"><span class="fa fa-search"></span></button>
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main_menu" aria-expanded="false"><span class="fa fa-bars"></span></button>
                        
                        <a href="#"></a>
                    </div>
                    <div class="collapse navbar-collapse" id="main_menu">
                     <ul class="nav navbar-nav navbar-right hidden-xs search">
                        
                        <li>
                            <button type="button" class="search" data-toggle="modal" data-target="#modal_search"><span class="fa fa-search"></span></button>
                        </li>
                        
                    </ul>
                    <ul class="nav navbar-nav navbar-right main-menu">
                        <li>
                            <a href="#"><span class="fas fa-home"></span></a>
                            
                        </li>
                        
                        
                        <li>
                            <a href="<?= base_url() .'Admin' ?>"  title="Normativa">MENÚ PRINCIPAL</a>
                        </li>
                        <li class="has-submenus">

                            <div class="dropdown">
                                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">SUBMENÚ
                                    <span class="caret"></span></button>
                                    <ul class="dropdown-menu">
                                      <li><a href="<?= base_url() . 'Registro' ?>">Formulario de registro</a></li>
                                      <li><a href="<?= base_url() . 'Informes' ?>">Informes</a></li>
                                      <li><a href="<?= base_url() .'Configuracion_Sistema' ?>" >Configuración</a></li>
                                      <li><a href="<?= base_url() . 'Ingreso_Sistema/cerrarSesion' ?>" >Salir </a></li>
                                  </ul>
                              </div>
                          </li>



                      </ul>
                  </div>
              </div>
          </nav>
          <div class="botbar">
             <div class="barC1"></div>
             <div class="barC2"></div>
         </div>
     </header>';



     <!-- Search field -->
     <div class="modal search fade" id="modal_search" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-body">
                <form action="javascript:RedireccionaBuscador()">
                    <input type="text" class="search-field" id="txtSearch" placeholder="Buscar" value="">
                    <button type="submit" style="display: none;">Buscar</button>
                </form>
            </div>
        </div>
    </div>
    <!-- /Search field -->
    <!-- Accesibilidad -->
    <div style="position: fixed;" id="moduloAccesibilidad2" > 
        <div class="ocultaAccesible" style="background-color: transparent;padding: 0px 0px 0px 11px;"><img id="cerrarAccesibleT" title="Cerrar" src="..\img\x-acs.svg"></div>
        <div  id="_biggtxt" ><img title="Aumentar Texto" class="biggertxt"  src="..\img\txt+.svg"></div>
        <div id="_smalltxt"  ><img title="Reducir Texto"  class="accesible1" src="..\img\txt-.svg"></div>
        <div  id="lecturaSeleccionV2" ><img title="Activar Lectura" class="accesible1" src="..\img\audio-.svg"></div> 
        <div  id="reconocimientoVozV2" style="" class="activoAccesibilidad"><img title="Activar Microfono" class="accesible1" src="..\img\micro-.svg"></div>
        <div  id="zoominV2" ><img title="Aumentar tamaño de contenido" class="accesible1" src="..\img\lupa+.svg"></div>
        <div  id="zoomoutV2" ><img title="Restablecer tamaño" class="accesible1" src="..\img\lupa-.svg"></div>    
    </div>
    <!-- /Accesibilidad -->
