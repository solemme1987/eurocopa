<?php
 require_once 'conexion.php';
class CountryModel{

    public static function showCountryModel($table){
      $stmt = Conexion::conectar()->prepare("SELECT * FROM $table");
      $stmt -> execute();
      return $stmt -> fetchAll();
    }
}