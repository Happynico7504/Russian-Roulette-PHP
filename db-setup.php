<?php

// MySQL Credentials

$hostname="your_hostname";
$username="your_username";
$password="your_password";
$dbname="your_dbname";

$db_handle = new mysqli($hostname, $username, $password, $dbname);

if (!mysqli_connect_error()) {
    try {
      $db_init_check = $db_handle->query("SELECT isinitialized AS _isinit FROM setupcheck");
      $db_init_check_read = $db_init_check->fetch_assoc();
      $db_check = $db_init_check_read["_isinit"];
    } catch (Exception $e) {
        $db_check = 0;
    }
    if (!$db_check == 1) {
      $db_init = $db_handle->query("CREATE TABLE IF NOT EXISTS `setupcheck` (`isinitialized` INT(1) NOT NULL) ENGINE = InnoDB;");
      $table_setup = $db_handle->query("CREATE TABLE IF NOT EXISTS `stats` (`hits` INT(255) NOT NULL , `misses` INT(255) NOT NULL ) ENGINE = InnoDB;");
      $field_setup = $db_handle->query("INSERT INTO `stats` (`hits`, `misses`) VALUES (0, 0)");
      $db_init_complete = $db_handle->query("INSERT INTO `setupcheck` (`isinitialized`) VALUES ('1')");
    }
}

?>
