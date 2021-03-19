<?php

class GoalDetailsController{

  // MOSTRAR DETALLE DE LOS GOLES
  public static function showGoalDetailsController(){

     $table="goal_details";
     $request=GoalDetailsModels::showGoalDetailsModel($table);
     return $request;
    //  foreach ($request as $key => $goal) {
    //    echo "<tr>
    //         <th scope='row'>{$goal['goal_id']}</th>
    //         <td>{$goal['match_no']}</td>
    //         <td>{$goal['jugador']}</td>
    //         <td>{$goal['pais']}</td>
    //         <td>{$goal['goal_type']}</td>
    //         <td>{$goal['goal_time']}</td>
    //         <td>{$goal['play_stage']}</td>
    //         <td>{$goal['goal_schedule']}</td>
    //         <td class='text-center'>
    //             <button class='btn btn-primary btn-sm' id='addGoal' idGoal='{$goal['goal_id']}' data-bs-toggle='modal' data-bs-target='#deleteGoal'>
    //                <i class='fas fa-pen'></i>
    //             </button>
    //             <button class='btn btn-danger btn-sm' id='deleteGoal' idGoal='{$goal['goal_id']}'>
    //               <i class='fas fa-trash'></i>
    //             </button>
    //         </td>
    //         </tr>
    // //    ";
    //  }
  }

  // INSERTAR UN DETALLE DE GOL
  public static function insertGoalDetailController($data){
      $table="goal_details";
      $request=GoalDetailsModels::insertGoalDetailModel($data, $table);
      echo $request;
  }
}