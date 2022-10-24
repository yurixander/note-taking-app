<?php

class ConfigObj
{
  public $databaseHost;
  public $databasePort;
  public $databaseName;
  public $databaseUsername;
  public $databasePassword;
}

abstract class Config
{
  private static $instance;

  static function getConfig()
  {
    if (Config::$instance != null)
      return Config::$instance;

    // TODO: Get this config. data from the `.env` file.
    $config = new ConfigObj();
    $config->databaseHost = "localhost";
    $config->databasePort = 3306;
    $config->databaseName = "note-taking";
    $config->databaseUsername = "root";
    $config->databasePassword = "";

    Config::$instance = $config;

    return $config;
  }
}
