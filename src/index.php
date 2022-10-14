<?php

require_once "./api/notes.php";

$requestUri = $_SERVER["REQUEST_URI"]; //returns the uri in the browser
$pathParts = explode("/", $requestUri); //splits the uri into an array of 3 elements
$baseDir = $pathParts[1];
$controllerName = $pathParts[2];

function routeRequest($controllerName)
{
  $controller = null;

  // REVISE: This should be "notes" in the future.
  if ($controllerName == "index.php")//success file name
    $controller = new NoteController();
  else {
    BaseController::errorMessage("Invalid controller name");//failure file name

    return;
  }

  $requestMethod = $_SERVER["REQUEST_METHOD"];//check method

  if ($requestMethod == "GET")
    $controller->get();

  // TODO: Add more request methods here. GET/POST/PUT/DELETE
}
routeRequest($controllerName);
