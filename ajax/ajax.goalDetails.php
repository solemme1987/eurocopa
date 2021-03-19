<?php

require_once "../controllers/goalDetailsController.php";
require_once "../models/goalDetailsModels.php";

class AjaxGoalDetails{

    public function insertGoal(){

        $data=array(
            "match"=>$_POST['match'],
            "player"=>$_POST['player'],
            "team"=>$_POST['team'],
            "time"=>$_POST['time'],
            "goal_type"=>$_POST['goal_type'],
            "stage"=>$_POST['stage'],
            "schedule"=>$_POST['schedule'],
            "half"=>$_POST['half']
          );
          $request= GoalDetailsController::insertGoalDetailController($data);
        // $hola=array('ricardo'=>'cortes');
        echo $request;
        // echo "<script>
        //     console.log(`RICARDO CORTES HURTADO`)
        // </script>";


    }
    public function showGoals(){
        $request= GoalDetailsController::showGoalDetailsController();
        echo json_encode($request);
    }
}


if(isset($_POST['player'])){
    $insertGoalDetails =new AjaxGoalDetails();
    $insertGoalDetails->insertGoal();
}

if(isset($_POST['showData'])){
    $show=new AjaxGoalDetails();
    $show->showGoals();
}

