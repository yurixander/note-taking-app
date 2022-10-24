<?php

require_once "api/baseController.php";
require_once "models/note.php";

/**
 * This note controller is responsible for handling requests
 * related to notes.
 *
 * It is based off the CRUD model.
 */
class NoteController extends BaseController
{
  public function get()
  {
    // Get all the notes from the database. Find this function in model/note folder
    $notes = Note::allRecords();

    // Send them as a response to the user.
    BaseController::sendJson($notes);
  }

  public function update()
  {
    // TODO: Implement.
  }

  public function delete()
  {
    // TODO: Implement.
  }
}
