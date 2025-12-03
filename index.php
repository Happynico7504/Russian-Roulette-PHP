<!doctype html>
  <html>
    <head>
      <title>Russian Roulette</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body style="font-size:32px;color:#00ff00;background-color:#000000;">
      <p>
        Select chamber!
        <br>
        <table>
          <tr>
            <td><button style="font-size:64px;color:#ff0000;background-color:#0000ff;" onclick="location.href='index.php?my_chamber=1';">01</button></td>
            <td><button style="font-size:64px;color:#ff0000;background-color:#0000ff;" onclick="location.href='index.php?my_chamber=2';">02</button></td>
            <td><button style="font-size:64px;color:#ff0000;background-color:#0000ff;" onclick="location.href='index.php?my_chamber=3';">03</button></td>
            <td><button style="font-size:64px;color:#ff0000;background-color:#0000ff;" onclick="location.href='index.php?my_chamber=4';">04</button></td>
          </tr>
          <tr>
            <td><button style="font-size:64px;color:#ff0000;background-color:#0000ff;" onclick="location.href='index.php?my_chamber=5';">05</button></td>
            <td><button style="font-size:64px;color:#ff0000;background-color:#0000ff;" onclick="location.href='index.php?my_chamber=6';">06</button></td>
            <td><button style="font-size:64px;color:#ff0000;background-color:#0000ff;" onclick="location.href='index.php?my_chamber=7';">07</button></td>
            <td><button style="font-size:64px;color:#ff0000;background-color:#0000ff;" onclick="location.href='index.php?my_chamber=8';">08</button></td>
          </tr>
          <tr>
            <td><button style="font-size:64px;color:#ff0000;background-color:#0000ff;" onclick="location.href='index.php?my_chamber=9';">09</button></td>
            <td><button style="font-size:64px;color:#ff0000;background-color:#0000ff;" onclick="location.href='index.php?my_chamber=10';">10</button></td>
            <td><button style="font-size:64px;color:#ff0000;background-color:#0000ff;" onclick="location.href='index.php?my_chamber=11';">11</button></td>
            <td><button style="font-size:64px;color:#ff0000;background-color:#0000ff;" onclick="location.href='index.php?my_chamber=12';">12</button></td>
          </tr>
          <tr>
            <td><button style="font-size:64px;color:#ff0000;background-color:#0000ff;" onclick="location.href='index.php?my_chamber=13';">13</button></td>
            <td><button style="font-size:64px;color:#ff0000;background-color:#0000ff;" onclick="location.href='index.php?my_chamber=14';">14</button></td>
            <td><button style="font-size:64px;color:#ff0000;background-color:#0000ff;" onclick="location.href='index.php?my_chamber=15';">15</button></td>
            <td><button style="font-size:64px;color:#ff0000;background-color:#0000ff;" onclick="location.href='index.php?my_chamber=16';">16</button></td>
          </tr>
        </table>
        <br>
        <?php
          $mychamber = $_GET['my_chamber'];
          if(!empty($_GET['my_chamber'])){
            if($mychamber <= 16) {
              $user_chamber = intval($mychamber);
              $bullet_pos = rand(1,16);
              if ($bullet_pos == $user_chamber) {
                echo "BOOM!<br>(bullet was in chamber \"$bullet_pos\")";
                echo "<audio autoplay src=\"boom.mp3\"></audio>";
                $event = "hit";
              } else {
                echo "You made it bro :-)<br>(bullet was in chamber \"$bullet_pos\")";
                $event = "miss";
              }
              include ("stats-engine.php");
            } else {
              echo "Invalid Chamber";
            }
          }
        ?>
      </p>
    </body>
  </html>
