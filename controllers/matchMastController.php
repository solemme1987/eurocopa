<?php

class MatchMastController{

    public static function showMatchController(){
        $table="match_mast";
        $request=MatchMastModel::showMatchModel($table);

        foreach ($request as $key => $match) {
            echo "<option value='{$match['match_no']}'>Partido N° {$match['match_no']}</option>";
        }
        // echo "<pre>";
        //     var_dump($request);
        // echo "</pre>";
    }
}