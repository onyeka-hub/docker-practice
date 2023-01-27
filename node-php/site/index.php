<html>
  <body>
    <h1>Family:</h1>
    <ul>
      <?php
        $json = file_get_contents('http://172.17.0.2/');
        $players = json_decode($json)->players;
        foreach ($players as $player) {
          echo "<li>$player</li>";
        }
      ?>
    </ul>
  </body>
</html>