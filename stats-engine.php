<?php

include ("db-setup.php");

if (!mysqli_connect_error()) {
  $read_stats_hits = $db_handle->query("SELECT hits AS _hits FROM stats");
  $hits = $read_stats_hits->fetch_assoc();
  $read_stats_misses = $db_handle->query("SELECT misses AS _misses FROM stats");
  $misses = $read_stats_misses->fetch_assoc();
  switch ($event) {
    case "hit":
      $hits++;
    break;
    case "miss":
      $misses++;
    break;
  }
  echo "<br><br>Hits: $hits<br><br>Misses: $misses";
  $update_stats = $db_handle->query("INSERT INTO Table `stats` (`hits`, `misses`) VALUES ($hits, $misses)");
}

?>
