<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="view/assets/img/copa.png">

      <!-- PLUGINS JAVASCRIPT -->
      <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
      <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

       <!-- PLUGINS CSS-->
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

      <!-- ESTILOS PROPIOS CSS-->
      <link rel="stylesheet" href="view/assets/css/main.css">
      <link rel="stylesheet" href="view/assets/css/sideBar.css">
      <link rel="stylesheet" href="view/assets/css/header.css">

    <title>Euro Copa 2016</title>
</head>
<body>
<div class="container-fluid " style="padding: 0; margin:0;">
<div class="row">

<?php


    // if(isset($_SESSION["validarSesionBackend"]) && $_SESSION["validarSesionBackend"]==="ok"){


       /*============================================
                LATERAL
          ==============================================*/

          include "components/sideBar.php";

          /*============================================
                CABEZOTE
          ==============================================*/
         echo "<main class='row position-relative'>";
            include "components/helpers/header.php";

          /*============================================
              CONTENIDO
          ==============================================*/

          if (isset($_GET["route"])){

            if(
               $_GET["route"]=="home" ||
               $_GET["route"]=="equipos"||
               $_GET["route"]=="jugadores"||
               $_GET["route"]=="partidos"||
               $_GET["route"]=="detalles"
            ){
               include "components/".$_GET["route"].".php";
            }

          }else{
              include "components/home.php";
          }

          /*============================================
              FOOTER
          ==============================================*/
          include "components/helpers/footer.php";

    // }else{

    //   include "modulos/login.php";

    // }

  ?>
  </main>
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>

<script src="view/assets/js/app.js"></script>
</body>
</html>