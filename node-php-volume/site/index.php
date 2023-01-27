<!-- <html>
  <body>
    <h1>Family members:</h1>
    <h2>Onu family</h2>
    <ul>
      <?php
        foreach(json_decode(file_get_contents('http://family'))->family as $family) {
          echo "<li>$family</li>";
        }
      ?>
    </ul>
  </body>
</html> -->


<html>
  <body>
    <h1>Family members:</h1>
    <ul>
      <?php
        $json = file_get_contents('http://family/');
        $family = json_decode($json)->family;
        foreach ($family as $player) {
          echo "<li>$player</li>";
        }
      ?>
    </ul>
  </body>
</html>