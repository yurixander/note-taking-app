<?php

/**
 * This serves as the superclass for all API controllers.
 *
 * It also has some helper functions to be used when dealing with
 * requests.
 */
class BaseController
{
  static function errorMessage($message)
  {
    // TODO: Send error status code along with the message.

    echo $message;
  }

  static function sendJson($data)
  {
    header("Content-Type: application/json");
    echo json_encode($data);
  }

  static function allRecords()
  {
    // TODO: Implement.
  }
}
