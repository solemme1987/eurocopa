<?php
 require_once 'conexion.php';
class PlayerMastModel{

    public static function showPlayerModel($table){
      $stmt = Conexion::conectar()->prepare("SELECT * FROM $table");
      $stmt -> execute();
      return $stmt -> fetchAll();
    }
}