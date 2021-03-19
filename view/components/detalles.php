
<?php
 include "helpers/insertGoal.php";
?>
<div class="col-10 px-4 mt-5 position-absolute top-0 end-0">

        <h3 class="mt-3" >Detalle de goles</h3>
        <div class="mt-4 d-flex justify-content-between">

            <div>
                <button class="btn btn-success btn-sm mr-2 " data-bs-toggle='modal' data-bs-target='#insertGoal'>
                    <i class="fas fa-futbol"></i> Argregar
                </button>
                <button class="btn btn-primary btn-sm">
                  <i class="fas fa-print"></i> Imprimr
                </button>
            </div>
            <div>
              <h4>
                Goles:
                <i class="fas fa-futbol"></i> 
                <span id="totalGoals"></span> 
              </h4>
            </div>
        </div>

     <table class="table  table-striped table-bordered table-hover mt-2">
        <thead>
          <tr>
            <th scope="col">N° Gol</th>
            <th scope="col">Partido</th>
            <th scope="col">Jugador</th>
            <th scope="col">Equipo</th>
            <th scope="col">Tipo_Gol</th>
            <th scope="col">Minuto</th>
            <th scope="col">Etapa</th>
            <th scope="col">T-Anotación</th>
            <th scope="col">Acciones</th>
          </tr>
        </thead>
        <tbody id="tableBodyGoalDetails">
            <?php
                // $showGoalDetails = new GoalDetailsController();
                // $showGoalDetails -> showGoalDetailsController();
            ?>
        </tbody>
     </table>

</div>
