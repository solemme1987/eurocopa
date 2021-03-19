<?php
require_once 'conexion.php';

class GoalDetailsModels{


  // MOSTRA LOS DETALLES  DE GOL
    public static function showGoalDetailsModel($table){

        $stmt = Conexion::conectar()->prepare("
            SELECT  goal_id, match_no, player_mast.player_name jugador, soccer_country.country_name pais, goal_type, goal_time,play_stage,goal_schedule
            FROM $table
            JOIN player_mast ON  player_mast.player_id=goal_details.player_id
            JOIN soccer_country ON soccer_country.country_id= goal_details.team_id
            ORDER BY(goal_id)DESC
        ");
        $stmt -> execute();

        return $stmt -> fetchAll();
    }


  // INSERTAR UN DETALLE DE GOL
    public static function insertGoalDetailModel($data, $table){
        $stmt = Conexion::conectar()->prepare("INSERT INTO $table (match_no,player_id,team_id,goal_time,goal_type,play_stage,goal_schedule,goal_half) VALUES(:match,:player,:team,:time,:goal_type,:stage,:schedule,:half)");

		$stmt->bindParam(":match", $data["match"], PDO::PARAM_INT);
		$stmt->bindParam(":player", $data["player"], PDO::PARAM_INT);
		$stmt->bindParam(":team", $data["team"], PDO::PARAM_INT);
		$stmt->bindParam(":time", $data["time"], PDO::PARAM_STR);
    $stmt->bindParam(":goal_type", $data["goal_type"], PDO::PARAM_STR);
		$stmt->bindParam(":stage", $data["stage"], PDO::PARAM_STR);
		$stmt->bindParam(":schedule", $data["schedule"], PDO::PARAM_STR);
		$stmt->bindParam(":half", $data["half"], PDO::PARAM_INT);

		if($stmt->execute()){

			return "ok";

		}else{

			return "error";
		}

		// $stmt = null;

    }

}

