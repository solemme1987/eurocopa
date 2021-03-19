var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
    return new bootstrap.Tooltip(tooltipTriggerEl)
})


const btnInsertGoal = document.querySelector("#insertGoalDetail");
const goalDetailsForm = document.querySelector('#goalDetailsForm');
const closeModal = document.querySelector('#closeModal');
let tableBodyGoalDetails = document.querySelector('#tableBodyGoalDetails');

toChargerEventListeners();
showGoalDetails();


function toChargerEventListeners() {
    btnInsertGoal.addEventListener('click', getGoalDetail);
}

// VALIDO Y RECIBO LOS DATOS QUE ENTRAN PAR INSERTAR
function getGoalDetail(e) {
    const data = new FormData();

    data.append('match', document.querySelector('#match').value);
    data.append('player', document.querySelector('#player').value);
    data.append('team', document.querySelector('#team').value);
    data.append('time', document.querySelector('#time').value);
    data.append('goal_type', document.querySelector('#goal_type').value);
    data.append('stage', document.querySelector('#stage').value);
    data.append('schedule', document.querySelector('#schedule').value);
    data.append('half', document.querySelector('#half').value);

    console.log(match.value, player.value, team.value, time.value, goal_type.value, stage.value, schedule.value, half.value);

    insertGoalDetail(data);

}

// INSERTO DATOS SIN RECARGAR LA PAGINA
function insertGoalDetail(data) {

    // FETCH API
    fetch('ajax/ajax.goalDetails.php', {
            method: 'POST',
            body: data
        })
        .then(res => res.text())
        .then(data => {

            if (data == 'ok') {

                goalDetailsForm.reset(); //Limpiamos el formulario
                closeModal.click(); //simulamos un click para cerra el modal
                tableBodyGoalDetails.innerHTML = ''; //QUITO LOS DATOS DE LA TABLA 
                showGoalDetails(); //VUELVO A CARGAR LOS DATOS EN LA TABLA

                Swal.fire(
                    'Gol registrado con exito!',
                    'You clicked the button!',
                    'success'
                );
                setTimeout(() => {
                    document.querySelector('.swal2-confirm').click();
                }, 1500);

            } else {
                Swal.fire(
                    'ERRO AL INSERTAR!',
                    'Cerrar',
                    'error'
                );

                setTimeout(() => {
                    document.querySelector('.swal2-confirm').click();
                }, 2000);
            }

        });

}

// LLENAR LA TABLA SIN RECARGAR LA PAGINA
function showGoalDetails() {


    data = new FormData();

    data.append('showData', 'mostrar');
    let html = '';
    let totalRow = 0;
    fetch('ajax/ajax.goalDetails.php', {
            method: 'POST',
            body: data
        })
        .then(res => res.json())
        .then(data => {

            data.forEach(({ goal_id, match_no, jugador, pais, goal_type, goal_time, play_stage, goal_schedule }) => {
                totalRow += 1; //cuento los registros par saber cuantos goles
                html += `<tr>
                        <th scope='row'>${goal_id}</th>
                        <td>${match_no}</td>
                        <td>${jugador}</td>
                        <td>${pais}</td>
                        <td>${goal_type}</td>
                        <td>${goal_time}</td>
                        <td>${play_stage}</td>
                        <td>${goal_schedule}</td>
                        <td class='text-center'>
                            <button class='btn btn-primary btn-sm' id='addGoal' idGoal='${goal_id}' data-bs-toggle='modal' data-bs-target='#deleteGoal'    data-bs-toggle="tooltip" data-bs-placement="top" title="Actualizar">
                               <i class='fas fa-pen'></i>
                            </button>
                            <button class='btn btn-danger btn-sm' id='deleteGoal' idGoal='${goal_id}' data-bs-toggle="tooltip" data-bs-placement="top" title="Elimnar">
                              <i class='fas fa-trash'></i>
                            </button>
                        </td>
                        </tr>`;
            });
            tableBodyGoalDetails.innerHTML += html; //leno la tabla
            document.querySelector('#totalGoals').innerHTML = totalRow; //toal de goles

        });
}