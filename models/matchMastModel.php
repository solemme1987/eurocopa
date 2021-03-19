<?php
 require_once 'conexion.php';
class MatchMastModel{

    public static function showMatchModel($table){
      $stmt = Conexion::conectar()->prepare("SELECT * FROM $table");
      $stmt -> execute();
      return $stmt -> fetchAll();
    }
}