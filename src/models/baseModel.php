<?php

require_once "config.php";

/**
 * This class is used to represent the data in the database
 * and to perform database operations.
 */
abstract class BaseModel
{
  private static $connection = null;

  /**
   * This function is used to retrieve the database connection object.
   *
   * If the connection has not been established yet, it will be created
   * the first time that this function is called.
   */
  private static function getOrSetConnection()
  {
    $config = Config::getConfig();

    // If the connection is not set, set it.
    if (!isset(self::$connection))
      self::$connection = new PDO("mysql:host=$config->databaseHost;dbname=$config->databaseName", $config->databaseUsername, $config->databasePassword);

    return self::$connection;
  }

  /**
   * The unique identifier for this specific record on the database.
   */
  public $id;


  /**
   * Get a specific record from the database.
   */
  static function getRecord($id)
  {
    $connection = BaseModel::getOrSetConnection();
    $query = $connection->prepare("SELECT * FROM notes WHERE id = :id", $id);
    $result = $query->execute();

    // TODO: Return the result.
  }

  static function deleteRecord($id)
  {
    $connection = BaseModel::getOrSetConnection();
    $query = $connection->prepare("DELETE FROM notes WHERE id = :id", $id);

    // TODO: Return the result.
  }

  /**
   * Get all the records from the database.
   */
  static function allRecords()
  {
    $connection = BaseModel::getOrSetConnection();
    $query = $connection->prepare("SELECT * FROM notes");

    // TODO: Return the result.

    // TODO: MySQL query to get all the data for this model. This is dummy data.
    return [1, 2, 3];
  }
}
