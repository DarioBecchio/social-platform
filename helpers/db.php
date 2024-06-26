<?php
require_once __DIR__ . '/../env.php';

class DB
{
  public static function connect()
  {
    // establish a db connection
    $connection = new mysqli(DB_SERVERNAME, DB_USERNAME, DB_PASSWORD, DB_NAME);

    if ($connection && $connection->connect_error) {
      throw new Exception("DB Connection Failed" . $connection->connect_error, 1);
    }

    return $connection;
  }


  public static function close_connection($connection)
  {
    $connection->close();
  }
}

$connection = new mysqli('localhost','root','root','1_pt_social_network');

if ($connection && $connection -> connect_error) {
  echo "Connection failed: " . $connection->connect_error;
  die;
}