<?php
class Dbh {
  private $servername;
  private $username;
  private $password;
  private $dbName;

  protected function connect(){
    $this->servername = "localhost";
    $this->username = "root";
    $this->password = "";
    $this->dbname = "ProjectRPGHub";

    $conn = new mysqli($this->servername, $this->username, $this->password,$this->dbname);
    return $conn;
  }
}