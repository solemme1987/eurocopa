<?php

// CONTROLADORES
require_once "controllers/template.controller.php";
require_once "controllers/goalDetailsController.php";
require_once "controllers/matchMastController.php";
require_once "controllers/playerMastController.php";
require_once "controllers/countryController.php";

// MODELOS
require_once "models/goalDetailsModels.php";
require_once "models/matchMastModel.php";
require_once "models/playerMastModel.php";
require_once "models/countryModel.php";



$template = new  TemplateController();
$template -> template();