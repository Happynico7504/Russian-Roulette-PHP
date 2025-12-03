<?php

// MySQL Credentials

$hostname="your_hostname";
$username="your_username";
$password="your_password";
$dbname="your_dbname";

$db_handle = new mysqli($hostname, $username, $password, $dbname);

if (!mysqli_connect_error()) {
  $table_setup = $db_handle->query("CREATE TABLE IF NOT EXISTS `stats` (`hits` INT(255) NOT NULL DEFAULT 0 , `misses` INT(255) NOT 0 DEFAULT 0 ) ENGINE = InnoDB;");
}

?>
