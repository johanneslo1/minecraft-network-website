<?php

class db
  {
    public function dbConnect($database)
      {

        return new PDO('mysql:host=localhost;dbname='., '', '', array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
      }
  }

?>
