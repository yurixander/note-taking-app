<?php

require_once "./api/notes.php";

$requestUri = $_SERVER["REQUEST_URI"];
$pathParts = explode("/", $requestUri);
$baseDir = $pathParts[1];
$controllerName = $pathParts[2];

function routeRequest($controllerName)
{
  $controller = null;

  // REVISE: This should be "notes" in the future.
  if ($controllerName == "index.php")
    $controller = new NoteController();
  else {
    BaseController::errorMessage("Invalid controller name");

    return;
  }

  $requestMethod = $_SERVER["REQUEST_METHOD"];

  if ($requestMethod == "GET")
    $controller->get();

  // TODO: Add more request methods here.
}

routeRequest($controllerName);
