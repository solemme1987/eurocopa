<div class="modal fade" id="insertGoal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
         <img src="view/assets/img/copa.png" alt="imagen aqui" class="img-fluid mr-2" width="35px">
         <h5 class="modal-title " id="exampleModalLabel"> AGREGAR GOL</h5>
        <button type="button" class="btn-close" id="closeModal" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

         <form id='goalDetailsForm'>
            <div class="input-group mb-3 ">
                <span class="input-group-text ">N° Partido</span>
                <select class="form-select" id="match" name="match" required >
                        <option selected>Selccionar Partido</option>
                        <?php
                            $showMatch = new MatchMastController();
                            $showMatch-> showMatchController();
                        ?>
                </select>
            </div>

            <div class="input-group mb-3 ">
                <span class="input-group-text " >Jugador</span>
                <select class="form-select"  id="player" name="player" required>
                        <option selected>Selccionar Jugador</option>
                        <?php
                            $showPlayer = new PlayerMastController();
                            $showPlayer-> showPlayerController();
                        ?>
                </select>
            </div>

            <div class="input-group mb-3 ">
                <span class="input-group-text " >Equipo</span>
                <select class="form-select" id="team" name="team"  required>
                        <option selected>Selccionar Equipo</option>
                        <?php
                            $showCountry = new CountryController();
                            $showCountry-> showCountryController();
                        ?>
                </select>
            </div>

            <div class="input-group mb-3 ">
                <span class="input-group-text " >Tiempo</span>
                <input type="number" class="form-control" id="time" placeholder="Minuto Gol"  aria-label="Minuto Gol" name="time" aria-describedby="Minuto Gol" required>

                <span class="input-group-text" >Tipo Gol</span>
                <select class="form-select" id="goal_type" name="goal_type" required>
                    <option selected>Tipo de gol</option>
                    <option value="N">Normal</option>
                    <option value="P">Penal</option>
                </select>
            </div>

            <div class="input-group mb-3 ">

                <span class="input-group-text bg-danger text-white" >Etapa</span>
                <select class="form-select" id="stage" name="stage" required>
                    <option selected>Seleccionar Etapa</option>
                    <option value="G">Grupos</option>
                    <option value="R">Octavos</option>
                    <option value="Q">Cuartos</option>
                    <option value="S">Semifinal</option>
                    <option value="F">Final</option>
                </select>

            </div>

            <div class="input-group mb-3 ">
                <span class="input-group-text bg-danger text-white" >Marcado en</span>
                <select class="form-select" id="schedule" name="schedule"  required>
                    <option selected>Seleccionar</option>
                    <option value="NT">Tiempo Normal</option>
                    <option value="ST">Tiempo Adicional</option>
                    <option value="ET">Tiempo Extra</option>
                </select>
            </div>

            <div class="input-group mb-3 ">
                <span class="input-group-text bg-danger text-white" >En que tiempo</span>
                <select class="form-select" id="half" name="half"  required>
                    <option selected>Seleccionar</option>
                    <option value="1">1 Primer Tiempo</option>
                    <option value="2">2 Segundo Tiempo </option>
                </select>
            </div>

        </div>

        <div class="modal-footer">
            <button type="button"id="insertGoalDetail" class="btn btn-primary">Agregar</button>
            </form>
        </div>

    </div>
  </div>
</div>