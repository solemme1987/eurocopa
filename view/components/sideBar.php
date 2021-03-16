 <!-- SIDE BAR -->
 <aside class="col-2 sideBar fixed-top">

   <!-- LOGO -->
   <div class="row ">
      <div class="col-12 px-4 logo-box text-uppercase fw-bold d-flex justify-content-between align-items-center">
         <img class="mt-2" src="view/assets/img/copa.png" alt="profile" width="40px">
         <img class="mt-2" src="view/assets/img/logo_euro.png" alt="profile" width="80px">
      </div>
   </div>

   <!-- BOTON DE HOME Y DASHBOAR -->
   <div class="row text-light mt-4  ">
      <div class="col-12 px-4 homeDashBoard py-1 d-flex justify-content-start align-items-center fw-normal">
         <i class="fas fa-home"></i>
         <a href="home">
            <span class="ms-3 mt-1 text-light">Dashboard</span>
        </a>
         <span class="badge rounded-pill bg-primary ms-5 mt-1">6</span>
      </div>
   </div>

   <!-- LISTADO DE OPCIONES-->
   <div class="row sideBarItems mt-4">

      <!-- PRIMER BLOQUE-->
      <ul class="col-12 px-4 ">

         <li class="list-title">Administracíon</li>

         <a href="equipos">
               <li class="list-item mt-2 ">
                  <i class="fas fa-user"></i>
                  <span class="ms-3">Equipos</span>
               </li>
         </a>

         <a href="jugadores">
            <li class="list-item mt-2 ">
                  <i class="fas fa-running"></i>
                  <span class="ms-3">Jugadores</span>
            </li>
         </a>

         <a href="partidos">
            <li class="list-item mt-2 ">
                  <i class="fas fa-futbol"></i>
                  <span class="ms-3">Partidos</span>
            </li>
         </a>

         <a href="detalles">
            <li class="list-item mt-2 ">
                  <i class="fas fa-chart-pie"></i>
                  <span class="ms-3">Detalles</span>
            </li>
         </a>

      </ul>

      <!-- SEGUNDO BLOQUE-->
      <ul class="col-12 px-4 mt-4">

         <li class="list-title ">DATOS IMPORTANTES</li>

         <li class="list-item mt-2 ">
               <i class="fas fa-times-circle"></i>
               <span class="ms-3">Eliminados</span>
         </li>

         <li class="list-item mt-2  ">
               <i class="fas fa-folder"></i>
               <span class="ms-3">Tarjetas</span>
               <!-- <span class="badge   rounded-pill bg-success ms-5 ">18</span> -->
         </li>

      </ul>

      <!-- TERCER BLOQUE-->
      <div class="col-12 px-4 mt-4">
         <li class="list-title">ARBITRAJE</li>

         <li class="list-item mt-3 ">
               <i class="fas fa-map"></i>
               <span class="ms-3">Faltas</span>
         </li>

         <li class="list-item mt-3 ">
               <i class="fas fa-bullseye"></i>
               <span class="ms-3">Penales</span>
         </li>

      </div>

   </div>

</aside>