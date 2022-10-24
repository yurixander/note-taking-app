<?php

require_once "./api/notes.php";

// Controlling routing and requests.
$requestUri = $_SERVER["REQUEST_URI"]; // Returns the URI from the browser.
$pathParts = explode("/", $requestUri); // Splits the URI into an array.
$baseDir = $pathParts[0]; // Represents the base URL portion.
$controllerName = $pathParts[2]; // Represents the controller name portion.

// Invoke the routing function.
routeRequest($controllerName);

function routeRequest($controllerName)
{
  $controller = null;

  if ($controllerName == "notes")
    $controller = new NoteController();
  else {
    BaseController::errorMessage("Invalid controller name; your request URL should look something like: 'http://localhost/index.php/notes/'"); // Failure file name

    return;
  }

  $requestMethod = $_SERVER["REQUEST_METHOD"];

  if ($requestMethod == "GET")
    $controller->get();

  // TODO: Add more request methods here. POST/PUT/DELETE
}
