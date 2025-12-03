<?php

// MySQL Credentials

$hostname="your_hostname";
$username="your_username";
$password="your_password";
$dbname="your_dbname";

$db_handle = new mysqli($hostname, $username, $password, $dbname);

if (!mysqli_connect_error()) {
  $table_setup = $db_handle->query("CREATE TABLE IF NOT EXISTS `stats` (`hits` INT(65536) NOT NULL , `misses` INT(65536) NOT NULL ) ENGINE = InnoDB;");
}

?>
