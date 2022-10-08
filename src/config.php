<?php

abstract class Config
{
  static function getConfig()
  {
    // TODO: Get this config. data from the `.env` file.
    $config = new Config();
    $config->databaseHost = "localhost";
    $config->databasePort = 3306;
    $config->databaseName = "notes";
    $config->databaseUsername = "root";
    $config->databasePassword = "";

    return $config;
  }

  public $databaseHost;
  public $databasePort;
  public $databaseName;
  public $databaseUsername;
  public $databasePassword;
}
