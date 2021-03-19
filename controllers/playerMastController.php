<?php

class PlayerMastController{

    public static function showPlayerController(){
        $table="player_mast";
        $request=PlayerMastModel::showPlayerModel($table);

        foreach ($request as $key => $player) {
            echo "<option value='{$player['player_id']}'> {$player['player_name']}</option>";
        }
    }
}