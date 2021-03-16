<?php
//     declare(strict_types=1);

//     require_once 'model/conexion.php';

//     $stmt = Conexion::conectar()->prepare("SELECT * FROM match_details");

//     $stmt -> execute();

//   echo "<pre>";
//     print_r($stmt -> fetchAll());
//   echo "</pre>";

require_once "controllers/template.controller.php";

$template = new  TemplateController();
$template -> template();