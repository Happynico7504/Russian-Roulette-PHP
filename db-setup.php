<?php

// MySQL Credentials

$hostname="your_hostname";
$username="your_username";
$password="your_password";
$dbname="your_dbname";

$db_handle = new mysqli($hostname, $username, $password, $dbname);

if (!mysqli_connect_error()) {
  $field_empty_check = =$db_handle->query("SHOW TABLES;");
  if($field_empty_check == false) {
    $table_setup = $db_handle->query("CREATE TABLE IF NOT EXISTS `stats` (`hits` INT(255) NOT NULL , `misses` INT(255) NOT NULL ) ENGINE = InnoDB;");
    $field_setup = $db_handle->query("INSERT INTO `stats` (`hits`, `misses`) VALUES (0, 0)");
  }
}

?>
